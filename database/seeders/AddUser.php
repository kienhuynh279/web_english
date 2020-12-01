<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddUser extends Seeder
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
                'email'=>'admin@gmail.com',
                'username'=>'Admin',
                'avatar'=>'Ngọc Lập',
                'password'=>bcrypt('123'),
                'level'=>2
            ]
            ];
            DB::table('users')->insert($data);
    }
}
