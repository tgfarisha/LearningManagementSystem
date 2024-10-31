<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        //

        DB::table('subjects')->insert([
            ['subjectName' => 'Effective Public Speaking', 'subjectCode' => 'PEPS1112', 'subjectPhoto' => 'PEPS1112.jpg','created_at' => $now, 'updated_at' => $now],
            ['subjectName' => 'Grammer in Context', 'subjectCode' => 'TSLB1104', 'subjectPhoto' => 'TSLB1104.jpg','created_at' => $now, 'updated_at' => $now],
            ['subjectName' => 'Literacy Studies in English', 'subjectCode' => 'TSLB1124', 'subjectPhoto' => 'TSLB1124.jpg','created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
