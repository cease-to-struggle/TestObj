<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('realname')->nullable();
            $table->enum('sex',['0','1'])->default('0');
            $table->string('birthday')->nullable();
            $table->integer('question_id')->nullable();
            $table->string('answer')->nullable();
            $table->string('address_province')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_region')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('user_info');
    }
}
