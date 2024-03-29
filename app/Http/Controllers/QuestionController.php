<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Person;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller {

    public function index() {
        if(!session("answered_questions")) {
            $question = Question::select("id", "name")
                ->whereHas("answers", function($query) {
                    $query->havingRaw("COUNT(*) > 1");
                })->inRandomOrder()->first();

            $first_message = true;
        } else {
            if(!session("matched_people")) {
                return redirect()->route("person.add");
            }

            $max_between = count(session("matched_people")) - 1;

            if(count(session("answered_questions")) === 1) {
                $min_between = 2;
            } else {
                $min_between = 1;
            }

            $question = Question::select("id", "name")->whereNotIn("id", session("answered_questions"))
                ->whereHas("answers", function($query) use ($min_between, $max_between) {
                    $query->whereIn("person_id", session("matched_people"));
                    $query->groupBy("question_id");
                    $query->havingRaw("count(DISTINCT person_id) BETWEEN " . $min_between . " AND " . $max_between);
                })->inRandomOrder()->first();

            $first_message = false;
        }

        if(!$question) {
            return redirect()->route("person.add");
        }

        return view("question", ["question" => $question, "first_message" => $first_message]);
    }

    public function answer($question_id, $form_answer) {
        $matched_people = [];

        if(!session("matched_people")) {
            $people = Person::select("id")->get();
            $persons = [];

            foreach($people as $person) {
                $persons[] += $person->id;
            }

            session(["matched_people" => $persons]);
        }

        $session_people = session("matched_people");

        if($form_answer) {
            $answers = Answer::where("question_id", $question_id)->where("answer", $form_answer)->with("person")->get();

            // Tylko wspólne rekordy w tablicach
            foreach($answers as $answer) {
                $matched_people[] += $answer->person->id;
            }

            session(["matched_people" => array_intersect($matched_people, $session_people)]);
        } else {
            $answers = Answer::where("question_id", $question_id)->where("answer", 1)->with("person")->get();

            // Wyrzucaj osoby z jedynką
            foreach($answers as $answer) {
                $matched_people[] += $answer->person->id;
            }

            foreach($session_people as $session) {
                if(in_array($session, $matched_people)) {
                    if(($key = array_search($session, $session_people)) !== false) {
                        unset($session_people[$key]);
                        // Reindex
                        $session_people = array_values($session_people);
                    }
                }
            }

            session(["matched_people" => $session_people]);
        }

        if(!session("answered_questions")) {
            session(["answered_questions" => [$question_id]]);
        }

        if(!in_array($question_id, $new_answered_questions = session("answered_questions"))) {
            $new_answered_questions[] += $question_id;
            session(["answered_questions" => $new_answered_questions]);
        }

        // Reindex jeszcze raz
        $session_people = array_values(session("matched_people"));
        session(["matched_people" => $session_people]);

        if(count(session("matched_people")) === 1) {
            return redirect()->route("question.result", session("matched_people")[0]);
        } else {
            return redirect()->route("question.index");
        }
    }

    public function result(Request $request, $id) {
        $person = Person::select("name", "file")->where("id", $id)->first();

        $request->session()->forget("matched_people");
        $request->session()->forget("answered_questions");

        return view("result", ["person" => $person]);
    }

}
