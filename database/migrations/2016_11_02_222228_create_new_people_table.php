<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewPeopleTable extends Migration {

    public function up() {
        Schema::create("new_people", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->text("description");
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists("new_people");
    }

}
