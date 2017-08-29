<?php

use Illuminate\Database\Seeder;

class registration_requestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regreq = [[
        'reg_animal_name' => 'Sachi',
        'reg_animal_age' => '1',
        'reg_animal_gender' => 'Female',
        'reg_animal_species' => 'Dog',
        'reg_animal_breed' => 'Poodle',
        'reg_animal_color' => 'light brown',
        'reg_owner' => '2',
        'reg_requestDate' => '2017-08-19 09:01:00'
        ]];

        DB::table('registration_request')->insert($regreq);
    }
}
