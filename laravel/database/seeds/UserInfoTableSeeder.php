<?php

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_info')->delete();
        
        \DB::table('user_info')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'realname' => 'Lucy',
                'sex' => '0',
                'birthday' => '1-1',
                'age'=>20,
                'address_province' => '广东',
                'address_city' => '深圳',
                'address_region' => '南山',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}