<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

    public function up() {
        Schema::create("answers", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("question_id")->unsigned();
            $table->integer("person_id")->unsigned();
            $table->boolean("answer");
            $table->timestamps();
        });
    }

    public function down() {
    }

}
