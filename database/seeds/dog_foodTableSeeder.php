<?php

use Illuminate\Database\Seeder;

class dog_foodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dg = [[
        'dfood_category' => 'Dry',
        'dfood_quantity' => '6',
        'dfood_expiry' => '18-08-13'
        ],
        [
        'dfood_category' => 'Canned',
        'dfood_quantity' => '3',
        'dfood_expiry' => '18-07-13'
        ],
        [
        'dfood_category' => 'Semi-Moist',
        'dfood_quantity' => '9',
        'dfood_expiry' => '18-07-04'
        ],
        [
        'dfood_category' => 'Semi-Moist',
        'dfood_quantity' => '5',
        'dfood_expiry' => '18-06-13'
        ],
        [
        'dfood_category' => 'Dry',
        'dfood_quantity' => '10',
        'dfood_expiry' => '18-06-02'
        ],
        [
        'dfood_category' => 'Canned',
        'dfood_quantity' => '19',
        'dfood_expiry' => '18-05-30'
        ]];

        DB::table('dog_food')->insert($dg);
    }
}
