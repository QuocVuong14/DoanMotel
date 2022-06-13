<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'name' => 'Created',
            ],
            [
                'name' => 'Confirmed',
            ],
            [
                'name' => 'Shipped',
            ],
            [
                'name' => 'Finished',
            ],
            [
                'name' => 'Cart',
            ]
        ]);
    }
}
