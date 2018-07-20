<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->index();
            $table->string('email')->unique()->index();
            $table->string('telephone')->unique()->index();
            $table->string('password')->index();
            $table->rememberToken()->default('');
            $table->integer('login_amount')->unsigned()->default(0);
            $table->integer('failed_amount')->unsigned()->default(0);
            $table->enum('is_active',[0,1])->default('0');
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
        Schema::dropIfExists('users');
    }
}
