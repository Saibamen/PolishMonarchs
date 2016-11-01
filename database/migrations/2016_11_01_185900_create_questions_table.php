<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

    public function up() {
        Schema::create("questions", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->timestamps();
        });
    }

    public function down() {
    }
}
