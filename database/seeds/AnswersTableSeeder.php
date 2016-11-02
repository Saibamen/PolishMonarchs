<?php

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder {

    public function run() {
        $roles = [
            // Należał do dynastii Piastów?
            ["question_id" => 1, "person_id" => 1, "answer" => 1],
            ["question_id" => 1, "person_id" => 2, "answer" => 1],
            ["question_id" => 1, "person_id" => 3, "answer" => 1],
            ["question_id" => 1, "person_id" => 4, "answer" => 1],
            ["question_id" => 1, "person_id" => 6, "answer" => 1],
            ["question_id" => 1, "person_id" => 7, "answer" => 1],

            // Miał przydomek?
            ["question_id" => 2, "person_id" => 1, "answer" => 1],
            ["question_id" => 2, "person_id" => 2, "answer" => 1],
            ["question_id" => 2, "person_id" => 3, "answer" => 1],
            ["question_id" => 2, "person_id" => 6, "answer" => 1],
            ["question_id" => 2, "person_id" => 7, "answer" => 1],
            ["question_id" => 2, "person_id" => 8, "answer" => 1],
            ["question_id" => 2, "person_id" => 9, "answer" => 1],
            ["question_id" => 2, "person_id" => 11, "answer" => 1],
            ["question_id" => 2, "person_id" => 12, "answer" => 1],
            ["question_id" => 2, "person_id" => 13, "answer" => 1],
            ["question_id" => 2, "person_id" => 14, "answer" => 1],
            ["question_id" => 2, "person_id" => 15, "answer" => 1],
            ["question_id" => 2, "person_id" => 16, "answer" => 1],
            ["question_id" => 2, "person_id" => 18, "answer" => 1],
            ["question_id" => 2, "person_id" => 25, "answer" => 1],
            ["question_id" => 2, "person_id" => 26, "answer" => 1],
            ["question_id" => 2, "person_id" => 27, "answer" => 1],

            // Należał do dynastii Jagiellonów?
            ["question_id" => 3, "person_id" => 10, "answer" => 1],
            ["question_id" => 3, "person_id" => 11, "answer" => 1],
            ["question_id" => 3, "person_id" => 12, "answer" => 1],
            ["question_id" => 3, "person_id" => 13, "answer" => 1],
            ["question_id" => 3, "person_id" => 14, "answer" => 1],
            ["question_id" => 3, "person_id" => 15, "answer" => 1],
            ["question_id" => 3, "person_id" => 16, "answer" => 1],

            // Była kobietą?
            ["question_id" => 4, "person_id" => 9, "answer" => 1],
            ["question_id" => 4, "person_id" => 18, "answer" => 1],

            // Był królem elekcyjnym?
            ["question_id" => 5, "person_id" => 17, "answer" => 1],
            ["question_id" => 5, "person_id" => 18, "answer" => 1],
            ["question_id" => 5, "person_id" => 19, "answer" => 1],
            ["question_id" => 5, "person_id" => 20, "answer" => 1],
            ["question_id" => 5, "person_id" => 21, "answer" => 1],
            ["question_id" => 5, "person_id" => 22, "answer" => 1],
            ["question_id" => 5, "person_id" => 23, "answer" => 1],
            ["question_id" => 5, "person_id" => 24, "answer" => 1],
            ["question_id" => 5, "person_id" => 25, "answer" => 1],
            ["question_id" => 5, "person_id" => 26, "answer" => 1],
            ["question_id" => 5, "person_id" => 27, "answer" => 1],
            ["question_id" => 5, "person_id" => 28, "answer" => 1],

            // Nie był Polakiem?
            ["question_id" => 6, "person_id" => 5, "answer" => 1],
            ["question_id" => 6, "person_id" => 8, "answer" => 1],
            ["question_id" => 6, "person_id" => 9, "answer" => 1],
            ["question_id" => 6, "person_id" => 17, "answer" => 1],
            ["question_id" => 6, "person_id" => 19, "answer" => 1],
            ["question_id" => 6, "person_id" => 20, "answer" => 1],
            ["question_id" => 6, "person_id" => 25, "answer" => 1],
            ["question_id" => 6, "person_id" => 27, "answer" => 1],

            // Nie zmarł w Polsce?
            ["question_id" => 7, "person_id" => 5, "answer" => 1],
            ["question_id" => 7, "person_id" => 8, "answer" => 1],
            ["question_id" => 7, "person_id" => 11, "answer" => 1],
            ["question_id" => 7, "person_id" => 17, "answer" => 1],
            ["question_id" => 7, "person_id" => 22, "answer" => 1],
            ["question_id" => 7, "person_id" => 26, "answer" => 1],
            ["question_id" => 7, "person_id" => 27, "answer" => 1],
            ["question_id" => 7, "person_id" => 28, "answer" => 1],

            // Rządził przez długi okres czasu (ponad 30 lat)?
            ["question_id" => 8, "person_id" => 7, "answer" => 1],
            ["question_id" => 8, "person_id" => 10, "answer" => 1],
            ["question_id" => 8, "person_id" => 12, "answer" => 1],
            ["question_id" => 8, "person_id" => 15, "answer" => 1],
            ["question_id" => 8, "person_id" => 20, "answer" => 1],
            ["question_id" => 8, "person_id" => 25, "answer" => 1],
            ["question_id" => 8, "person_id" => 27, "answer" => 1],
            ["question_id" => 8, "person_id" => 28, "answer" => 1],

            // Panował przez ponad połowę swojego życia?
            ["question_id" => 9, "person_id" => 7, "answer" => 1],
            ["question_id" => 9, "person_id" => 10, "answer" => 1],
            ["question_id" => 9, "person_id" => 11, "answer" => 1],
            ["question_id" => 9, "person_id" => 12, "answer" => 1],
            ["question_id" => 9, "person_id" => 15, "answer" => 1],
            ["question_id" => 9, "person_id" => 16, "answer" => 1],
            ["question_id" => 9, "person_id" => 20, "answer" => 1],
            ["question_id" => 9, "person_id" => 25, "answer" => 1],

            // Władał również innym krajem (poza Polską i Litwą)?
            ["question_id" => 10, "person_id" => 1, "answer" => 1],
            ["question_id" => 10, "person_id" => 5, "answer" => 1],
            ["question_id" => 10, "person_id" => 8, "answer" => 1],
            ["question_id" => 10, "person_id" => 11, "answer" => 1],
            ["question_id" => 10, "person_id" => 17, "answer" => 1],
            ["question_id" => 10, "person_id" => 20, "answer" => 1],
            ["question_id" => 10, "person_id" => 21, "answer" => 1],
            ["question_id" => 10, "person_id" => 25, "answer" => 1],
            ["question_id" => 10, "person_id" => 26, "answer" => 1],

            // Dokładna data śmierci jest nieznana?
            ["question_id" => 11, "person_id" => 3, "answer" => 1],

            // Był bezpośrednim potomkiem króla/królowej?
            ["question_id" => 12, "person_id" => 2, "answer" => 1],
            ["question_id" => 12, "person_id" => 7, "answer" => 1],
            ["question_id" => 12, "person_id" => 9, "answer" => 1],
            ["question_id" => 12, "person_id" => 11, "answer" => 1],
            ["question_id" => 12, "person_id" => 12, "answer" => 1],
            ["question_id" => 12, "person_id" => 13, "answer" => 1],
            ["question_id" => 12, "person_id" => 14, "answer" => 1],
            ["question_id" => 12, "person_id" => 15, "answer" => 1],
            ["question_id" => 12, "person_id" => 16, "answer" => 1],

            // Należał do dynsatii Wazów?
            ["question_id" => 13, "person_id" => 20, "answer" => 1],
            ["question_id" => 13, "person_id" => 21, "answer" => 1],
            ["question_id" => 13, "person_id" => 22, "answer" => 1],

            // Przejął koronę po bracie?
            ["question_id" => 14, "person_id" => 12, "answer" => 1],
            ["question_id" => 14, "person_id" => 14, "answer" => 1],
            ["question_id" => 14, "person_id" => 15, "answer" => 1],

            // Urodził się w stolicy?
            ["question_id" => 15, "person_id" => 11, "answer" => 1],
            ["question_id" => 15, "person_id" => 12, "answer" => 1],
            ["question_id" => 15, "person_id" => 13, "answer" => 1],
            ["question_id" => 15, "person_id" => 14, "answer" => 1],
            ["question_id" => 15, "person_id" => 16, "answer" => 1],
            ["question_id" => 15, "person_id" => 18, "answer" => 1],
            ["question_id" => 15, "person_id" => 22, "answer" => 1],

            // Na jego cześć powstała marka wódki i papierosów?
            ["question_id" => 16, "person_id" => 24, "answer" => 1],
        ];

        foreach($roles as $role) {
            Answer::firstOrCreate($role);
        }
    }

}
