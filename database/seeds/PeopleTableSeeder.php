<?php

use App\Models\Person;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder {

    public function run() {
        $roles = [
            ["name" => "Władysław III Warneńczyk", "file" => NULL],
            ["name" => "Władysław IV Waza", "file" => "WladyslawIVWaza.jpg"],
            ["name" => "Michał Korybut Wiśniowiecki", "file" => NULL],
        ];

        foreach($roles as $role) {
            Person::firstOrCreate($role);
        }
    }

}
