<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        //
        DB::table('roles')->insert([
            ['roleName' => 'IPG Administrator', 'created_at' => $now, 'updated_at' => $now],
            ['roleName' => 'Lecturer', 'created_at' => $now, 'updated_at' => $now],
            ['roleName' => 'Student', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
