<?php

use Illuminate\Database\Seeder;

class animal_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $anictgry = [[
        'category_type' => 'sheltered'
        ],
        [
        'category_type' => 'stray'
        ]];

        DB::table('animal_category')->insert($anictgry);
    }
}
