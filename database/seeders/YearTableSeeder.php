<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('year')->insert([
            ['id' => 1, 'year' => '2000', 'quarter' => '1', 'status' => 'inactive'],
            ['id' => 2, 'year' => '2000', 'quarter' => '2', 'status' => 'inactive'],
            ['id' => 3, 'year' => '2000', 'quarter' => '3', 'status' => 'inactive'],
            ['id' => 4, 'year' => '2000', 'quarter' => '4', 'status' => 'inactive'],
            ['id' => 5, 'year' => '2001', 'quarter' => '1', 'status' => 'inactive'],
            ['id' => 6, 'year' => '2001', 'quarter' => '2', 'status' => 'inactive'],
            ['id' => 7, 'year' => '2001', 'quarter' => '3', 'status' => 'active'],
            ['id' => 8, 'year' => '2001', 'quarter' => '4', 'status' => 'inactive'],
            ['id' => 9, 'year' => '2002', 'quarter' => '1', 'status' => 'inactive'],
            ['id' => 10, 'year' => '2002', 'quarter' => '2', 'status' => 'inactive'],
            ['id' => 11, 'year' => '2002', 'quarter' => '3', 'status' => 'inactive'],
            ['id' => 12, 'year' => '2002', 'quarter' => '4', 'status' => 'inactive'],
        ]);
    }
}
