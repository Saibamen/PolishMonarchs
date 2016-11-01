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

            echo "noweee";
        }

        $session_people = session("matched_people");

        if($form_answer) {
            $answers = Answer::where("question_id", $question_id)->where("answer", $form_answer)->with("person")->get();

            // Tylko wspólne rekordy w tablicach
            foreach($answers as $answer) {
                $matched_people[] += $answer->person->id;
            }

            session(["matched_people" => array_intersect($matched_people, session("matched_people"))]);
        } else {
            $answers = Answer::where("question_id", $question_id)->where("answer", 1)->with("person")->get();

            // Wyrzucaj osoby z jedynką
            foreach($answers as $answer) {
                $matched_people[] += $answer->person->id;
            }

            foreach($array_session = session("matched_people") as $session) {
                if(in_array($session, $matched_people)) {
                    // DEBUG
                    echo "Usuwam osoby z odpowiedziami TAK";

                    if(($key = array_search($session, $array_session)) !== false) {
                        unset($array_session[$key]);
                    }
                }
            }

            session(["matched_people" => $array_session]);
        }

        // TODO: dodawaj pytania
        if(session("answered_questions")) {
            $questions = session("answered_questions");
            //session("answered_questions", session("answered_questions")[$question_id]);
            $questions += $question_id;
            dump("array questuibs", $questions);
            session(["answered_questions" => $questions]);
        }

        $questions = session("answered_questions");
        dump("array questuibs", $questions);

        dd("matched_people", session("matched_people"), "answered_questions", session("answered_questions", [$question_id]));

        // TODO
        if(count(session("matched_people")) === 1) {
            // return to result
        } else {
            // return to next question
        }
    }

}
