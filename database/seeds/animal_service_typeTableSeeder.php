<?php

use Illuminate\Database\Seeder;

class animal_service_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $service = [[
        'service_type' => 'Deworming'
        ],
        [
        'service_type' => 'Spay and Neuter'
        ],
        [
        'service_type' => 'Mange Treatment'
        ],
        [
        'service_type' => 'Basic Medical Treatment'
        ],
        [
        'service_type' => 'Rabies Vaccination'
        ]];

        DB::table('animal_service_type')->insert($service);
    }
}
