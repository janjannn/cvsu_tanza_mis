<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'cvsu_id' => 1,
                'email' => 'admin@cvsu.edu.ph',
                'email_verified_at' => '2022-04-20 01:14:20',
                'role' => 'admin',
                'password' => bcrypt('admin1234'),
                'department' => 'Admin',
                'designation' => 'Admin',
                'created_at' => '2022-04-11 00:43:36',
                'updated_at' => '2022-04-11 00:43:36'
            ],
            [
                'id' => 11,
                'name' => 'Jeffrey Delgado',
                'cvsu_id' => 2,
                'email' => 'jeffrey.delgado@cvsu.edu.ph',
                'email_verified_at' => '2022-04-20 01:14:20',
                'role' => 'user',
                'password' => bcrypt('user1234'),
                'department' => 'DIT',
                'designation' => 'Curriculum',
                'created_at' => '2022-04-18 23:21:19',
                'updated_at' => '2022-04-20 01:14:20'
            ],
            [
                'id' => 12,
                'name' => 'User',
                'cvsu_id' => 3,
                'email' => 'user@cvsu.edu.ph',
                'email_verified_at' => '2022-04-20 01:14:20',
                'role' => 'user',
                'password' => bcrypt('user1234'),
                'department' => 'DIT',
                'designation' => 'Registrar',
                'created_at' => '2022-04-19 20:59:13',
                'updated_at' => '2022-04-19 20:59:13'
            ],
            [
                'id' => 13,
                'name' => 'OSAS',
                'cvsu_id' => 4,
                'email' => 'osas@cvsu.edu.ph',
                'email_verified_at' => '2022-04-20 01:14:20',
                'role' => 'user',
                'password' => bcrypt('user1234'),
                'department' => 'DOM',
                'designation' => 'OSAs',
                'created_at' => '2022-06-15 21:38:39',
                'updated_at' => '2022-06-15 21:38:39'
            ],
            [
                'id' => 14,
                'name' => 'Extension',
                'cvsu_id' => 5,
                'email' => 'extension@cvsu.edu.ph',
                'email_verified_at' => '2022-04-20 01:14:20',
                'role' => 'user',
                'password' => bcrypt('user1234'),
                'department' => 'DOM',
                'designation' => 'Extension',
                'created_at' => '2022-06-22 00:42:47',
                'updated_at' => '2022-06-22 00:42:47'
            ]
        ]);
    }
}
