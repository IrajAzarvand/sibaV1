<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Branches = [
            [
                'Code' => '41',
                'Name' => 'تبریز',
            ],
            [
                'Code' => '211',
                'Name' => 'تهران',
            ],
        ];

        foreach ($Branches as $Branch) {

            DB::table('branches')->insert([
                'BranchCode' => $Branch['Code'],
                'BranchName' => $Branch['Name'],
            ]);
        }
    }
}
