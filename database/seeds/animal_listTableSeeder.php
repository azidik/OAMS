<?php

use Illuminate\Database\Seeder;

class animal_listTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $anilist = [[
        'list_name' => '1',
        'list_owner' => '2'
        ],
        [
        'list_name' => '2',
        'list_owner' => '2'
        ],
        [
        'list_name' => '3',
        'list_owner' => '4'
        ],
        [
        'list_name' => '4',
        'list_owner' => '3'
        ],
        [
        'list_name' => '5',
        'list_owner' => '5'
        ],
        [
        'list_name' => '6',
        'list_owner' => '2'
        ],
        [
        'list_name' => '7',
        'list_owner' => '5'
        ],
        [
        'list_name' => '8',
        'list_owner' => '3'
        ],
        [
        'list_name' => '9',
        'list_owner' => '4'
        ],
        [
        'list_name' => '10',
        'list_owner' => '4'
        ],
        [
        'list_name' => '11',
        'list_owner' => '3'
        ],
        [
        'list_name' => '12',
        'list_owner' => '2'
        ],
        [
        'list_name' => '13',
        'list_owner' => '5'
        ],
        [
        'list_name' => '14',
        'list_owner' => '3'
        ],
        [
        'list_name' => '15',
        'list_owner' => '1'
        ],
        [
        'list_name' => '16',
        'list_owner' => '5'
        ]];

        DB::table('animal_list')->insert($anilist);
    }
}
