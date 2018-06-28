<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('answers')->delete();
        
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'question_id' => 6,
                'answer' => 'Wang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'question_id' => 2,
                'answer' => 'fen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'question_id' => 1,
                'answer' => 'orange',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}