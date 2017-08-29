<?php

use Illuminate\Database\Seeder;

class impounding_requestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $impreq = [[
        'impounding_category' => '2',
        'impounding_name' => '',
        'impounding_age' => '3',
        'impounding_gender' => 'Male',
        'impounding_species' => 'Cat',
        'impounding_breed' => '',
        'impounding_color' => 'white',
        'place_found' => 'Basak',
        'impounded_by' => '3',
        'imp_requestDate' => '2017-08-07 12:00:45'
        ]];

        DB::table('impounding_request')->insert($impreq);
    }
}
