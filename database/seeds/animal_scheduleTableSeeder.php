<?php

use Illuminate\Database\Seeder;

class animal_scheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sched = [[
        'owner' => '3',
        'animal_name' => '4',
        'type_of_service' => '5',
        'schedule_date' => '17-08-11'
        ],
        [
        'owner' => '5',
        'animal_name' => '7',
        'type_of_service' => '1',
        'schedule_date' => '17-08-11'
        ],
        [
        'owner' => '4',
        'animal_name' => '10',
        'type_of_service' => '4',
        'schedule_date' => '17-08-11'
        ],
        [
        'owner' => '2',
        'animal_name' => '6',
        'type_of_service' => '3',
        'schedule_date' => '17-08-11'
        ],
        [
        'owner' => '5',
        'animal_name' => '13',
        'type_of_service' => '2',
        'schedule_date' => '17-08-11'
        ]];

        DB::table('animal_schedule')->insert($sched);
    }
}
