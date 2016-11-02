<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Person;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller {

    public function index() {
        $question = Question::select("id", "name")->inRandomOrder()->first();

        return view("question", ["question" => $question]);
    }

    public function answer($question_id, $form_answer) {
        $matched_people = [];

        if(!session("matched_people")) {
            $people = Person::select("id")->get();

            foreach($people as $person) {
                $matched_people[] += $person->id;
            }

            session(["matched_people" => $matched_people]);
            echo "BRAK MATCHED PEOPLE";
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
                    // DEBUG
                    echo "Usuwam osoby z odpowiedziami TAK";

                    if(($key = array_search($session, $session_people)) !== false) {
                        unset($session_people[$key]);
                    }
                }
            }

            session(["matched_people" => $session_people]);
        }

        // TODO: dodawaj pytania
        if(!session("answered_questions")) {
            session(["answered_questions" => [$question_id]]);
            echo "pierwsze pytanie";
        }

        // TODO: mogo być problemy na hostingu "0", 0
        if(!in_array($question_id, $new_answered_questions = session("answered_questions"))) {
            echo "unikat";
            dump($new_answered_questions);
            $new_answered_questions[] += $question_id;
            dump($new_answered_questions);
            session(["answered_questions" => $new_answered_questions]);
        }

        //dump("matched_people", session("matched_people"), "answered_questions", session("answered_questions"));

        // TODO ??
        if(count(session("matched_people")) === 1) {
            return redirect()->route("question.result", session("matched_people")[0]);
        } else {
            return redirect()->route("question.index");
        }
    }

    public function result($id) {
        $person = Person::select("name")->where("id", $id)->first();

        return view("result", ["person" => $person]);
    }

}
