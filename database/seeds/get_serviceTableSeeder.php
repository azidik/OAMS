<?php

use Illuminate\Database\Seeder;

class get_serviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $get = [[
        'get_service_type' => '2',
        'get_owner' => '5',
        'get_animal_name' => '5'
        ],
        [
        'get_service_type' => '4',
        'get_owner' => '1',
        'get_animal_name' => '15'
        ],
        [
        'get_service_type' => '1',
        'get_owner' => '2',
        'get_animal_name' => '2'
        ],
        [
        'get_service_type' => '3',
        'get_owner' => '5',
        'get_animal_name' => '16'
        ],
        [
        'get_service_type' => '1',
        'get_owner' => '4',
        'get_animal_name' => '10'
        ],
        [
        'get_get_service_type' => '3',
        'get_owner' => '4',
        'get_animal_name' => '9'
        ],
        [
        'get_service_type' => '5',
        'get_owner' => '5',
        'get_animal_name' => '13'
        ]];

        DB::table('get_service')->insert($get);
    }
}
