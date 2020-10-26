<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'email'=>'ngoclap858@gmail.com',
                'username'=>'Ngọc Lập',
                'avatar'=>'Ngọc Lập',
                'password'=>bcrypt('123'),
                'level'=>1
            ],
            [
                'email'=>'admin@gmail.com',
                'username'=>'Admin',
                'avatar'=>'Ngọc Lập',
                'password'=>bcrypt('123'),
                'level'=>1
            ]
            ];
            DB::table('user')->insert($data);
    }
}
