<?php

use Illuminate\Database\Seeder;

class cat_foodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ct = [[
        'cfood_category' => 'Canned',
        'cfood_quantity' => '10',
        'cfood_expiry' => '18-10-10'
        ],
        [
        'cfood_category' => 'Dry',
        'cfood_quantity' => '20',
        'cfood_expiry' => '18-08-13'
        ],
        [
        'cfood_category' => 'Semi-Moist',
        'cfood_quantity' => '9',
        'cfood_expiry' => '18-08-13'
        ],
        [
        'cfood_category' => 'Semi-Moist',
        'cfood_quantity' => '5',
        'cfood_expiry' => '18-08-13'
        ],
        [
        'cfood_category' => 'Dry',
        'cfood_quantity' => '10',
        'cfood_expiry' => '18-08-03'
        ],
        [
        'cfood_category' => 'Canned',
        'cfood_quantity' => '19',
        'cfood_expiry' => '18-07-10'
        ]];

        DB::table('cat_food')->insert($ct);
    }
}
