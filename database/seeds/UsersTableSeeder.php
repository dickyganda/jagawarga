<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'created_at' => '2020-12-01 18:20:41',
                'email' => 'admin@jagawarga.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Admin',
                'password' => '$2y$10$a/i0BUm7pGVHqhwyC8um.eiuTvHhotqwkkyi/JaMy5L7pkJl2cZH.',
                'remember_token' => NULL,
                'role' => 'admin',
                'updated_at' => '2020-12-01 18:20:41',
            ),
            1 =>
            array (
                'created_at' => '2020-12-11 23:06:23',
                'email' => 'operator@jagawarga.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Operator',
                'password' => '$2y$10$deuqtHZJ/.Mb4exNN/Im/ulJz2IbmhSnpsAAj4XxBl7J1ZQjANmny',
                'remember_token' => NULL,
                'role' => 'operator',
                'updated_at' => '2020-12-11 23:06:23',
            ),
        ));


    }
}
