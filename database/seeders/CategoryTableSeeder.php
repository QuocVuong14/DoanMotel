<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            [
                'id' => 1,
                'name' => 'Dell',
            ],
            [
                'id' => 2,
                'name' => 'Acer',
            ],
            [
                'id' => 3,
                'name' => 'Asus',
            ],
            [
                'id' => 4,
                'name' => 'LG',
            ],
            [
                'id' => 5,
                'name' => 'Msi',
            ],
            [
                'id' => 6,
                'name' => 'Lenovo',
            ],
            [
                'id' => 7,
                'name' => 'PC',
            ]


        ]);
    }
}
