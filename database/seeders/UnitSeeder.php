<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        //

        DB::table('units')->insert([
            ['unitName' => 'A1', 'created_at' => $now, 'updated_at' => $now],
            ['unitName' => 'A2', 'created_at' => $now, 'updated_at' => $now],
            ['unitName' => 'A3', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
