<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'root943',
                'email' => 'eexplicabo@example.net',
                'telephone' => '17011977526',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'UxMh4OkgEG',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'root109',
                'email' => 'eos41@example.net',
                'telephone' => '13300108666',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => '1clFVjGoJT',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'root913',
                'email' => 'qui_voluptas@example.net',
                'telephone' => '17000238325',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'm9YkDCikK4',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'root726',
                'email' => 'quo_voluptatem@example.com',
                'telephone' => '18289856252',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'daZzMou0Hx',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            4 => 
            array (
                'id' => 5,
                'username' => 'root110',
                'email' => 'ndolorum@example.net',
                'telephone' => '18465382735',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'qUwDnSmttr',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'root549',
                'email' => 'eveniet51@example.net',
                'telephone' => '13620078246',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'DP1CGC38Lc',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            6 => 
            array (
                'id' => 7,
                'username' => 'root457',
                'email' => 'quisquam.quia@example.net',
                'telephone' => '13270295189',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'qGiEt5Cel8',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            7 => 
            array (
                'id' => 8,
                'username' => 'root370',
                'email' => 'gmollitia@example.com',
                'telephone' => '17193064888',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'Yw2gWRDCKq',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            8 => 
            array (
                'id' => 9,
                'username' => 'root337',
                'email' => 'ducimus31@example.net',
                'telephone' => '15737386689',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'p0cutUbsO4',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
            9 => 
            array (
                'id' => 10,
                'username' => 'root150',
                'email' => 'molestias38@example.net',
                'telephone' => '15791244217',
                'password' => '$2y$10$EJpoOn2S0IEegIiR0UEv8e.0lDYz/hEA8PVs10mn0.X/hFxWZEgbu',
                'remember_token' => 'oXu2Tkcftq',
                'created_at' => '2018-06-07 07:30:37',
                'updated_at' => '2018-06-07 07:30:37',
            ),
        ));
        
        
    }
}