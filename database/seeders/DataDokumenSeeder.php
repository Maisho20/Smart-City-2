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
        DB::table('data_dokumens')->insert([
            'judul' => 'Dokumen 1',
            'deskripsi' => 'Deskripsi Dokumen 1',
            'file' => "asset('img/Dokumen berisikan tentang informasi Smart City.pdf')",
        ]);

        DB::table('data_dokumens')->insert([
            'judul' => 'Dokumen 2',
            'deskripsi' => 'Deskripsi Dokumen 2',
            'file' => "asset('img/Dokumen berisikan tentang informasi Smart City.pdf')",
        ]);

        DB::table('data_dokumens')->insert([
            'judul' => 'Dokumen 3',
            'deskripsi' => 'Deskripsi Dokumen 3',
            'file' => "asset('img/Dokumen berisikan tentang informasi Smart City.pdf')",
        ]);

        DB::table('data_dokumens')->insert([
            'judul' => 'Dokumen 4',
            'deskripsi' => 'Deskripsi Dokumen 4',
            'file' => "asset('img/Dokumen berisikan tentang informasi Smart City.pdf')",
        ]);
    }
}
