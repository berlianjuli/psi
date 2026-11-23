<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            'name' => 'Pemeliharaan Komputer dan Jaringan',
            'short_name' => 'PKJ',
        ]);
        DB::table('programs')->insert([
            'name' => 'Tatalaksana Studio Produksi',
            'short_name' => 'TSP',
        ]);
        DB::table('programs')->insert([
            'name' => 'Pemeliharaan Kendaraan Ringan',
            'short_name' => 'PKR',
        ]);
    }
}
