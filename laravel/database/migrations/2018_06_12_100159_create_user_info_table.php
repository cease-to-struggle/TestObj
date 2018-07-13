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
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('realname')->default('');
            $table->string('petname')->default('')->index();
            $table->enum('sex',['0','1'])->default('0')->commit('0 代表女;1 代表男');
            $table->string('age')->default('');
            $table->string('birthday')->default('');
            $table->string('address_province')->default('');
            $table->string('address_city')->default('');
            $table->string('address_region')->default('');
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
