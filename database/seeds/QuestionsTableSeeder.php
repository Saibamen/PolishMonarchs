<?php

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder {

    public function run() {
        $roles = [
            ["id" => 1, "name" => "Należał do dynastii Piastów?"],
            ["id" => 2, "name" => "Miał przydomek?"],
            ["id" => 3, "name" => "Należał do dynastii Jagiellonów?"],
            ["id" => 4, "name" => "Była kobietą?"],
            ["id" => 5, "name" => "Był królem elekcyjnym?"],
            ["id" => 6, "name" => "Nie był Polakiem?"],
            ["id" => 7, "name" => "Nie zmarł w Polsce?"],
            ["id" => 8, "name" => "Rządził przez długi okres czasu (ponad 30 lat)?"],
            ["id" => 9, "name" => "Panował przez ponad połowę swojego życia?"],
            ["id" => 10, "name" => "Władał również innym krajem (poza Polską i Litwą)?"],
            ["id" => 11, "name" => "Dokładna data śmierci jest nieznana?"],
            ["id" => 12, "name" => "Był bezpośrednim potomkiem króla/królowej?"],
            ["id" => 13, "name" => "Należał do dynsatii Wazów?"],
            ["id" => 14, "name" => "Przejął koronę po bracie?"],
            ["id" => 15, "name" => "Urodził się w stolicy?"],
            ["id" => 16, "name" => "Na jego cześć powstała marka wódki i papierosów?"],

        ];

        foreach($roles as $role) {
            Question::firstOrCreate($role);
        }
    }

}
