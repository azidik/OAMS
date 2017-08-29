<?php

use Illuminate\Database\Seeder;

class reportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rpt = [[
        'report_id' => 'users-report',
        'report_category' => 'User',
        'report_count' => ''
        ],
        [
        'report_id' => 'registered-report',
        'report_category' => 'Registered',
        'report_count' => ''
        ],
        [
        'report_id' => 'adoption-report',
        'report_category' => 'Adoption',
        'report_count' => ''
        ],
        [
        'report_id' => 'impounding-report',
        'report_category' => 'Impounding',
        'report_count' => ''
        ],
        [
        'report_id' => 'dfood-report',
        'report_category' => 'D-Food',
        'report_count' => ''
        ],
        [
        'report_id' => 'cfood-report',
        'report_category' => 'C-Food',
        'report_count' => ''
        ],
        [
        'report_id' => 'donor-report',
        'report_category' => 'Donor',
        'report_count' => ''
        ],
        [
        'report_id' => 'service-report',
        'report_category' => 'Service',
        'report_count' => ''
        ]];

        DB::table('report')->insert($rpt);
    }
}
