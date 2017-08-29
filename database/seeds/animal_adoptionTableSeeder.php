<?php

use Illuminate\Database\Seeder;

class animal_adoptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adopt = [[
        'adopt_first_name' => '1',
        'adopt_last_name' => '1',
        'adopted' => '3',
        'adopted_at' => '2017-08-19 11:34:20'
        ]];

        DB::table('animal_adoption')->insert($adopt);
    }
}
