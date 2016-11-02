<?php

use App\Models\Person;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder {

    public function run() {
        $roles = [
            ["id" => 1, "name" => "Bolesław I Chrobry", "file" => "Bolesław I Chrobry.jpg"],
            ["id" => 2, "name" => "Mieszko II Lambert", "file" => "Mieszko II Lambert.jpg"],
            ["id" => 3, "name" => "Bolesław II Szczodry", "file" => "Bolesław II Szczodry.jpg"],
            ["id" => 4, "name" => "Przemysł II", "file" => "Przemysł II.jpg"],
            ["id" => 5, "name" => "Wacław II", "file" => "Wacław II.jpg"],
            ["id" => 6, "name" => "Władysław I Łokietek", "file" => "Władysław I Łokietek.jpg"],
            ["id" => 7, "name" => "Kazimierz III Wielki", "file" => "Kazimierz III Wielki.jpg"],
            ["id" => 8, "name" => "Ludwik Węgierski", "file" => "Ludwik Węgierski.jpg"],
            ["id" => 9, "name" => "Jadwiga Andegaweńska", "file" => "Jadwiga Andegaweńska.jpg"],
            ["id" => 10, "name" => "Władysław II Jagiełło", "file" => "Władysław II Jagiełło.jpg"],
            ["id" => 11, "name" => "Władysław III Warneńczyk", "file" => "Władysław III Warneńczyk.jpg"],
            ["id" => 12, "name" => "Kazimierz IV Jagiellończyk", "file" => "Kazimierz IV Jagiellończyk.jpg"],
            ["id" => 13, "name" => "Jan I Olbracht", "file" => "Jan I Olbracht.jpg"],
            ["id" => 14, "name" => "Aleksander Jagiellończyk", "file" => "Aleksander Jagiellończyk.jpg"],
            ["id" => 15, "name" => "Zygmunt I Stary", "file" => "Zygmunt I Stary.jpg"],
            ["id" => 16, "name" => "Zygmunt II August", "file" => "Zygmunt II August.jpg"],
            ["id" => 17, "name" => "Henryk Walezy", "file" => "Henryk Walezy.jpg"],
            ["id" => 18, "name" => "Anna Jagiellonka", "file" => "Anna Jagiellonka.jpg"],
            ["id" => 19, "name" => "Stefan Batory", "file" => "Stefan Batory.jpg"],
            ["id" => 20, "name" => "Zygmunt III Waza", "file" => "Zygmunt III Waza.jpg"],
            ["id" => 21, "name" => "Władysław IV Waza", "file" => "Władysław IV Waza.jpg"],
            ["id" => 22, "name" => "Jan II Kazimierz Waza", "file" => "Jan II Kazimierz Waza.jpg"],
            ["id" => 23, "name" => "Michał Korybut Wiśniowiecki", "file" => "Michał Korybut Wiśniowiecki.jpg"],
            ["id" => 24, "name" => "Jan III Sobieski", "file" => "Jan III Sobieski.jpg"],
            ["id" => 25, "name" => "August II Mocny", "file" => "August II Mocny.jpg"],
            ["id" => 26, "name" => "Stanisław I Leszczyński", "file" => "Stanisław I Leszczyński.jpg"],
            ["id" => 27, "name" => "August III Sas", "file" => "August III Sas.jpg"],
            ["id" => 28, "name" => "Stanisław II August Poniatowski", "file" => "Stanisław II August Poniatowski.jpg"],
        ];

        foreach($roles as $role) {
            Person::firstOrCreate($role);
        }
    }

}
