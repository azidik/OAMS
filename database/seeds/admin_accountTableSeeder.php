<?php

use Illuminate\Database\Seeder;

class admin_accountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ad = [[
        'username' => 'admin',
        'password' => bcrypt('administrator'),
        'email' => 'draliceutlang@gmail.com',
        'first_name' => 'Alice',
        'last_name' => 'Utlang',
        ]];

        DB::table('admin_account')->insert($ad);
    }
}
