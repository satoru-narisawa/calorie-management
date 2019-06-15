<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foods extends Migration
{

    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("date_id")->unsigned()->index();
            $table->string("food_name1",15)->nullable();;
            $table->string("food_name2",15)->nullable();;
            $table->string("food_name3",15)->nullable();;
            $table->string("food_name4",15)->nullable();;
            $table->string("food_name5",15)->nullable();;
            $table->string("food_name6",15)->nullable();;
            $table->string("food_name7",15)->nullable();;
            $table->string("food_name8",15)->nullable();;
            $table->string("food_name9",15)->nullable();;
            $table->string("food_name10",15)->nullable();;
            $table->integer("food_calorie1")->nullable();;
            $table->integer("food_calorie2")->nullable();;
            $table->integer("food_calorie3")->nullable();;
            $table->integer("food_calorie4")->nullable();;
            $table->integer("food_calorie5")->nullable();;
            $table->integer("food_calorie6")->nullable();;
            $table->integer("food_calorie7")->nullable();;
            $table->integer("food_calorie8")->nullable();;
            $table->integer("food_calorie9")->nullable();;
            $table->integer("food_calorie10")->nullable();;
            $table->timestamps();
            
            //外部キー制約
            $table->foreign("date_id")->references("id")->on("dates");
        });
    }


    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
