<?php

use Illuminate\Database\Seeder;

class adoption_requestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adoptreq = [[
        'adopt_first_name' => '3',
        'adopt_last_name' => '3',
        'adopted' => '2',
        'adopt_requestDate' => '2017-08-19 11:34:20'
        ]];

        DB::table('adoption_request')->insert($adoptreq);
    }
}
