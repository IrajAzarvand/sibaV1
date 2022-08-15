<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'Fname' => 'ایرج',
                'Lname' => 'آذروند',
                'PersonnelCode' => '6105',
                'MobileNumber' => '09012841853',
                'LocalNumber' => '284',
                'password' => Hash::make('1234'),
            ],
            [

                'Fname' => 'احمد',
                'Lname' => 'محمودی',
                'PersonnelCode' => '6950',
                'MobileNumber' => '09370681228',
                'LocalNumber' => '284',
                'password' => Hash::make('1234'),
            ],
            [

                'Fname' => 'محمد',
                'Lname' => 'نصرالهی لکی',
                'PersonnelCode' => '1610',
                'MobileNumber' => '09144946192',
                'LocalNumber' => '284',
                'password' => Hash::make('1234'),
            ],
            [

                'Fname' => 'جعفرآقا',
                'Lname' => 'روحی',
                'PersonnelCode' => '1',
                'MobileNumber' => '09141141806',
                'LocalNumber' => '207',
                'password' => Hash::make('1234'),
            ],

        ];


        foreach ($users as $user) {

            DB::table('users')->insert([
                'Fname' => $user['Fname'],
                'Lname' => $user['Lname'],
                'PersonnelCode' => $user['PersonnelCode'],
                'password' => $user['password'],
                'MobileNumber' => $user['MobileNumber'],
                'LocalNumber' => $user['LocalNumber'],
            ]);
        }
    }
}