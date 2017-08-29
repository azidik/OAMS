<?php

use Illuminate\Database\Seeder;

class user_accountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[[
        'username' => 'Unknown',
        'password' => 'unknown',
        'first_name' => 'Unknown',
        'last_name' => 'Unknown',
        'email' => '',
        'address' => 'Unknown',
        'contact_no' => 'Unknown'
        ],
        [
        'username' => 'sham',
        'password' => bcrypt('thisisasample'),
        'first_name' => 'Shamesse',
        'last_name' => 'Delda',
        'email' => 'deldashamesseann@gmail.com',
        'address' => 'Banawa, Cebu City',
        'contact_no' => '12345'
        ],
        [
        'username' => 'diza',
        'password' => bcrypt('thisisasample2'),
        'first_name' => 'Diza',
        'last_name' => 'Maitem',
        'email' => 'dizamaitem@gmail.com',
        'address' => 'Escario, Cebu City',
        'contact_no' => '67890'
        ],
        [
        'username' => 'jenny',
        'password' => bcrypt('thisisasample3'),
        'first_name' => 'Jenny',
        'last_name' => 'Placer',
        'email' => 'jennyplacer@gmail.com',
        'address' => 'Basak, Cebu City',
        'contact_no' => '09876'
        ],
        [
        'username' => 'rey',
        'password' => bcrypt('thisisasample4'),
        'first_name' => 'Rey',
        'last_name' => 'Abellana',
        'email' => 'reyabellana@gmail.com',
        'address' => 'guadalupe, Cebu City',
        'contact_no' => '54321'
        ]];

        DB::table('user_account')->insert($user);
    }
}
