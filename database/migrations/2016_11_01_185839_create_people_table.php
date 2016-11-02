<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

    public function up() {
        Schema::create("people", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("file")->nullable();
            $table->timestamps();
        });
    }

    public function down() {
    }

}
