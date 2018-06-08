<?php

use Illuminate\Database\Seeder;

class SecurityQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('security_questions')->delete();
        \DB::table('security_questions')->insert(array(
        	'0' =>array (
                'id' => 1,
                'questions_zh' => '最喜欢吃的水果？',
                'questions_en' => 'what\'s your favourate fruit?',
            ),
            '1' =>array (
                'id' => 2,
                'questions_zh' => '初中老师名字？',
                'questions_en' => 'who is your junior high school teacher?',
            ),
            '2' =>array (
                'id' => 3,
                'questions_zh' => '高中老师名字？',
                'questions_en' => 'who is your high school teacher?',
            ),
            '3' =>array (
                'id' => 4,
                'questions_zh' => '最好的朋友是谁？',
                'questions_en' => 'who is your best friend?',
            ),
            '4' =>array (
                'id' => 5,
                'questions_zh' => '最爱的运动是什么？',
                'questions_en' => 'what is your favourate sport?',
            ),

        	));
    }
}
