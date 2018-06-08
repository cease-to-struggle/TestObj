<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;
    $faker = Faker\Factory::create('zh_CN');
    return [
        'username' => 'root'.mt_rand(100,999),
        'email' => $faker->unique()->safeEmail,
        'telephone'=>$faker->phoneNumber,
        'password' => $password ? $password : $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
