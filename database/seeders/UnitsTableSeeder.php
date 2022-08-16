<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Units = [
            [
                'Name' => 'انفورماتیک',
                'branch_id' => '1',
            ],
            [
                'Name' => 'صادرات',
                'branch_id' => '1',
            ],
            [
                'Name' => 'مدیریت',
                'branch_id' => '1',
            ],
            [
                'Name' => 'بازرگانی',
                'branch_id' => '1',
            ],
            [
                'Name' => 'طراحی',
                'branch_id' => '1',
            ],

        ];

        foreach ($Units as $Unit) {

            DB::table('units')->insert([
                'UnitName' => $Unit['Name'],
                'branch_id' => $Unit['branch_id'],
            ]);
        }
    }
}
