<?php

use Illuminate\Database\Seeder;

class donorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donor = [[
        'donor_first_name' => 'Randy',
        'donor_last_name' => 'Suzara',
        'donor_company' => 'Sixteen Degress Air Conditioning',
        'donated' => 'medicine',
        'donation_quantity' => '5',
        'donated_at' => '17-08-12'
        ],
        [
        'donor_first_name' => 'Arlene',
        'donor_last_name' => 'Suzara',
        'donor_company' => 'Sixteen Degress Air Conditioning',
        'donated' => 'food',
        'donation_quantity' => '9',
        'donated_at' => '17-08-12 08:01:01'
        ],
        [
        'donor_first_name' => 'Raquel',
        'donor_last_name' => 'Geortzen',
        'donor_company' => '',
        'donated' => 'medicine',
        'donation_quantity' => '10',
        'donated_at' => '17-08-09 02:30:54'
        ],
        [
        'donor_first_name' => 'Elvin',
        'donor_last_name' => 'Geortzen',
        'donor_company' => '',
        'donated' => 'food',
        'donation_quantity' => '7',
        'donated_at' => '17-08-09 06:31:31'
        ],
        [
        'donor_first_name' => '',
        'donor_last_name' => '',
        'donor_company' => 'Cebu Veterinary Doctors',
        'donated' => 'medicine',
        'donation_quantity' => '10',
        'donated_at' => '17-08-01 12:00:00'
        ],
        [
        'donor_first_name' => '',
        'donor_last_name' => '',
        'donor_company' => 'Cebu Veterinary Doctors',
        'donated' => 'food',
        'donation_quantity' => '10',
        'donated_at' => '17-08-01 06:49:22'
        ]];

        DB::table('donors')->insert($donor);
    }
}
