<?php

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder {

    public function run() {
        $roles = [
            ["question_id" => 1, "person_id" => 1, "answer" => 1],
            ["question_id" => 2, "person_id" => 3, "answer" => 1],
            ["question_id" => 3, "person_id" => 2, "answer" => 1],
        ];

        foreach($roles as $role) {
            Answer::firstOrCreate($role);
        }
    }

}
