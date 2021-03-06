<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SecurityQuestionsTableSeeder::class);
        $this->call(UserInfoTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(FriendsTableSeeder::class);
    }
}
