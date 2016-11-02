<?php

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder {

    public function run() {
        $roles = [
            ["name" => "Czy ucięli mu głowę?"],
            ["name" => "Czy to on 'mówił ośmioma językami'?"],
            ["name" => "Czy urodził się na terenach polskich?"],
        ];

        foreach($roles as $role) {
            Question::firstOrCreate($role);
        }
    }

}
