<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        // People
        $this->command->info("Creating sample people...");
        $this->call(PeopleTableSeeder::class);
    }

}
