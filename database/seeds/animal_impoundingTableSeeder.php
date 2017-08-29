<?php

use Illuminate\Database\Seeder;

class animal_impoundingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $aniimpound = [[
        'impounding_category' => '1',
        'impounding_name' => 'Tom',
        'impounding_age' => '3',
        'impounding_gender' => 'Male',
        'impounding_species' => 'Cat',
        'impounding_breed' => 'Manx cat',
        'impounding_color' => 'black',
        'impounding_surrendered_at' => '17-08-11 17:48:20',
        'impounding_place_found' => 'Guadalupe',
        'impounded_by' => '4'
        ],
        [
        'impounding_category' => '2',
        'impounding_name' => '',
        'impounding_age' => '1',
        'impounding_gender' => 'Female',
        'impounding_species' => 'Dog',
        'impounding_breed' => 'AsPin',
        'impounding_color' => 'brown',
        'impounding_surrendered_at' => '17-08-11 17:51:16',
        'impounding_place_found' => 'Basak',
        'impounded_by' => '1'
        ],
        [
        'impounding_category' => '2',
        'impounding_name' => '',
        'impounding_age' => '1',
        'impounding_gender' => 'Female',
        'impounding_species' => 'Dog',
        'impounding_breed' => 'German Shepherd',
        'impounding_color' => 'black',
        'impounding_surrendered_at' => '17-08-11 18:57:05',
        'impounding_place_found' => 'Metro Colon',
        'impounded_by' => '1'
        ]];

        DB::table('animal_impounding')->insert($aniimpound);
    }
}
