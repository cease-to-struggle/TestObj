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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('realname')->nullable();
            $table->enum('sex',['0','1'])->default('0');
            $table->string('age')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('question_id')->nullable()->unsigned();
            $table->foreign('question_id')->references('id')->on('security_questions')->onDelete('cascade')->onUpdate('cascade');
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
