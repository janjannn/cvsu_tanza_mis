<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designation')->insert([
            [
                'id' => 1,
                'name' => 'Curriculum',
                'value' => 'Curriculum'
            ],
            [
                'id' => 2,
                'name' => 'Extension',
                'value' => 'Extension'
            ],
            [
                'id' => 3,
                'name' => 'Human Resource',
                'value' => 'HR'
            ],
            [
                'id' => 4,
                'name' => 'Office of Student Affairs',
                'value' => 'OSAs'
            ],
            [
                'id' => 5,
                'name' => 'Registrar',
                'value' => 'Registrar'
            ],
            [
                'id' => 6,
                'name' => 'External Business Affairs',
                'value' => 'EBA'
            ],
            [
                'id' => 7,
                'name' => 'Property Custodian',
                'value' => 'Custodian'
            ],
            [
                'id' => 8,
                'name' => 'Research Coordinator',
                'value' => 'Research'
            ],
        ]);
    }
}
