<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dates extends Migration
{

    public function up()
    {
        Schema::create('calories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned()->index();
            $table->date("date");
            $table->string("caption")->nullable();;
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
