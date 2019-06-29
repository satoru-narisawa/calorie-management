<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dates extends Migration
{

    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned()->index();
            $table->date("date");
            $table->string("caption")->nullable();
            $table->timestamps();
            
            $table->string("food_name1",15)->nullable();
            $table->string("food_name2",15)->nullable();
            $table->string("food_name3",15)->nullable();
            $table->string("food_name4",15)->nullable();
            $table->string("food_name5",15)->nullable();
            $table->string("food_name6",15)->nullable();
            $table->string("food_name7",15)->nullable();
            $table->string("food_name8",15)->nullable();
            $table->string("food_name9",15)->nullable();
            $table->string("food_name10",15)->nullable();
            $table->integer("food_calorie1")->nullable();
            $table->integer("food_calorie2")->nullable();
            $table->integer("food_calorie3")->nullable();
            $table->integer("food_calorie4")->nullable();
            $table->integer("food_calorie5")->nullable();
            $table->integer("food_calorie6")->nullable();
            $table->integer("food_calorie7")->nullable();
            $table->integer("food_calorie8")->nullable();
            $table->integer("food_calorie9")->nullable();
            $table->integer("food_calorie10")->nullable();
            
            $table->integer("basis_use_calorie");
            $table->string("exercise_name1",15)->nullable();
            $table->string("exercise_name2",15)->nullable();
            $table->string("exercise_name3",15)->nullable();
            $table->string("exercise_name4",15)->nullable();
            $table->string("exercise_name5",15)->nullable();
            $table->integer("exercise_calorie1")->nullable();
            $table->integer("exercise_calorie2")->nullable();
            $table->integer("exercise_calorie3")->nullable();
            $table->integer("exercise_calorie4")->nullable();
            $table->integer("exercise_calorie5")->nullable();


            
            //外部キー制約
            $table->foreign("user_id")->references("id")->on("users");
            //user_idとdateの組み合わせの重複を許さない。
            $table->unique(["user_id","date"]);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
