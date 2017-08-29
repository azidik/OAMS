<?php

use Illuminate\Database\Seeder;

class animal_for_adoptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $aniadopt = [[
        'adopt_animal_age' => '1',
        'adopt_animal_gender' => '1',
        'adopt_animal_species' => '1',
        'adopt_animal_breed' => '1',
        'adopt_animal_color' => '1'
        ],
        [
        'adopt_animal_age' => '2',
        'adopt_animal_gender' => '2',
        'adopt_animal_species' => '2',
        'adopt_animal_breed' => '2',
        'adopt_animal_color' => '2'
        ],
        [
        'adopt_animal_age' => '3',
        'adopt_animal_gender' => '3',
        'adopt_animal_species' => '3',
        'adopt_animal_breed' => '3',
        'adopt_animal_color' => '3'
        ]];

        DB::table('animal_for_adoption')->insert($aniadopt);
    }
}
