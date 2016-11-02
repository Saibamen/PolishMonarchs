<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        // People
        $this->command->info("Creating sample people...");
        $this->call(PeopleTableSeeder::class);

        // Questions
        $this->command->info("Creating sample questions...");
        $this->call(QuestionsTableSeeder::class);

        // Answers
        $this->command->info("Creating sample answers...");
        $this->call(AnswersTableSeeder::class);
    }

}
