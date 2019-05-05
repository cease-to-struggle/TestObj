<?php

use Illuminate\Database\Seeder;

class SecurityQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('security_questions')->delete();
        
        \DB::table('security_questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => '你最爱吃的水果是什么？',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => '你最爱的人是谁?',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => '你最爱的运动是什么?',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => '你伴侣的生日是哪一天?',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => '你高中的班主任是谁?',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => '你初中的班主任是谁?',
            ),
        ));
        
        
    }
}