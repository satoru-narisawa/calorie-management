<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exercises extends Migration
{

    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("date_id")->unsigned()->index();
            $table->integer("basis_use_calorie");
            $table->string("exercise_name1",15)->nullable();;
            $table->string("exercise_name2",15)->nullable();;
            $table->string("exercise_name3",15)->nullable();;
            $table->string("exercise_name4",15)->nullable();;
            $table->string("exercise_name5",15)->nullable();;
            $table->integer("exercise_calorie1")->nullable();;
            $table->integer("exercise_calorie2")->nullable();;
            $table->integer("exercise_calorie3")->nullable();;
            $table->integer("exercise_calorie4")->nullable();;
            $table->integer("exercise_calorie5")->nullable();;
            $table->timestamps();
            
            $table->foreign("date_id")->references("id")->on("dates");
        });
    }


    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
