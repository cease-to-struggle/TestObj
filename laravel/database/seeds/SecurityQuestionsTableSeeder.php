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
           '0'=>array(
               'id'=>1,
               'questions'=>'你最爱吃的水果是什么？',
           ),
            '1'=>array(
                'id'=>2,
                'questions'=>'你最爱吃的人是谁？',
            ),
            '2'=>array(
                'id'=>3,
                'questions'=>'你最爱吃的运动是什么？',
            ),
            '3'=>array(
                'id'=>4,
                'questions'=>'你另一半的生日是哪天？',
            ),
            '4'=>array(
                'id'=>5,
                'questions'=>'你高中班主任是？',
            ),
            '5'=>array(
                'id'=>6,
                'questions'=>'你初中班主任是？',
            ),

        ));
    }
}
