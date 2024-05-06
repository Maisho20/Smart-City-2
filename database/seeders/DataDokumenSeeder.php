<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        // DB::table('data_dokumens')->insert([
        //     'judul' => 'Smart Environment',
        //     'file' => "asset('img/portfolio/envIcn.png')",
        //     'rute' => 'SmartEnv',
        //     'kategori' => 'Smart Environment',
        //     'tahun' => '2021',
        //     'upload_at' => now(),
        // ]);

        // 2
        // DB::table('data_dokumens')->insert([
        //     'judul' => 'Smart Governance',
        //     'file' => "asset('img/portfolio/govIcn.png')",
        //     'rute' => 'SmartGov',
        //     'kategori' => 'Smart Governance',
        //     'tahun' => '2021',
        //     'upload_at' => now(),
        // ]);

        // 3
        // DB::table('data_dokumens')->insert([
        //     'judul' => 'Smart Branding',
        //     'file' => "asset('img/portfolio/brndIcn.png')",
        //     'rute' => 'SmartBrand',
        //     'kategori' => 'Smart Branding',
        //     'tahun' => '2021',
        //     'upload_at' => now(),
        // ]);

        // 4
        // DB::table('data_dokumens')->insert([
        //     'judul' => 'Smart Economy',
        //     'file' => "asset('img/portfolio/ecoIcn.png')",
        //     'rute' => 'SmartEco',
        //     'kategori' => 'Smart Economy',
        //     'tahun' => '2021',
        //     'upload_at' => now(),
        // ]);
    }
}
