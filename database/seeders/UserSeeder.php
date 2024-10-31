<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        //
        DB::table('users')->insert([
            ['role_id' => '1', 'unit_id' => NULL, 'userName' => 'Badrul', 'userIC' => '111111111111', 'userEmail' => '1@gmail.com', 'userPassword' => bcrypt('11111'), 'userGender' => 'Man', 'userContact' => '0111111111', 'userStaffID' => 'ADMIN123', 'userPhoto' => 'badrul.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['role_id' => '2', 'unit_id' => '1', 'userName' => 'Rozita', 'userIC' => '222222222222', 'userEmail' => '2@gmail.com', 'userPassword' => bcrypt('22222'), 'userGender' => 'Woman', 'userContact' => '0222222222', 'userStaffID' => 'KI23001', 'userPhoto' => 'rozita.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['role_id' => '3', 'unit_id' => '3', 'userName' => 'Hannah', 'userIC' => '333333333333', 'userEmail' => '3@gmail.com', 'userPassword' => bcrypt('33333'), 'userGender' => 'Woman', 'userContact' => '0333333333', 'userStudentID' => '202310001', 'userPhoto' => 'hannah.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
