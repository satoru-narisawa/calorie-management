<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Calories extends Migration
{

    public function up()
    {
        Schema::create('calories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned()->index();
            $table->date("date");
            $table->integer("basis_use_calorie");
            $table->string("caption");
            $table->string("exercise_name1");
            $table->string("exercise_name2");
            $table->string("exercise_name3");
            $table->string("exercise_name4");
            $table->string("exercise_name5");
            $table->integer("exercise_calorie1");
            $table->integer("exercise_calorie2");
            $table->integer("exercise_calorie3");
            $table->integer("exercise_calorie4");
            $table->integer("exercise_calorie5");
            $table->string("food_name1");
            $table->string("food_name2");
            $table->string("food_name3");
            $table->string("food_name4");
            $table->string("food_name5");
            $table->string("food_name6");
            $table->string("food_name7");
            $table->string("food_name8");
            $table->string("food_name9");
            $table->string("food_name10");
            $table->integer("food_calorie1");
            $table->integer("food_calorie2");
            $table->integer("food_calorie3");
            $table->integer("food_calorie4");
            $table->integer("food_calorie5");
            $table->integer("food_calorie6");
            $table->integer("food_calorie7");
            $table->integer("food_calorie8");
            $table->integer("food_calorie9");
            $table->integer("food_calorie10");
            $table->timestamps();
            
            //外部キー制約
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    public function down()
    {
        Schema::dropIfExists('calories');
    }
}
