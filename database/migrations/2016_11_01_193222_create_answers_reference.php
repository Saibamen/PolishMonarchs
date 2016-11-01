<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersReference extends Migration {

    public function up() {
    	Schema::table("answers", function (Blueprint $table) {
	        $table->foreign("question_id")->references("id")->on("questions");
	        $table->foreign("person_id")->references("id")->on("people");
        });
    }

    public function down() {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
        Schema::dropIfExists("questions");
        Schema::dropIfExists("people");
        Schema::dropIfExists("answers");
        DB::statement("SET FOREIGN_KEY_CHECKS = 1");
    }

}
