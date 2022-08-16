<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Posts = [
            [
                'Name' => 'مسئول',
                'unit_id' => '1',
            ],
            [
                'Name' => 'کارشناس',
                'unit_id' => '1',
            ],
            [
                'Name' => 'مسئول',
                'unit_id' => '2',
            ],
            [
                'Name' => 'کارشناس',
                'unit_id' => '2',
            ],

        ];

        foreach ($Posts as $Post) {

            DB::table('posts')->insert([
                'PostName' => $Post['Name'],
                'unit_id' => $Post['unit_id'],
            ]);
        }
    }
}
