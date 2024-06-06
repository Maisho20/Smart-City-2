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
            'image' => 'docs/tampilan dokumen.jpg',
            'judul' => 'Dokumen 1',
            'deskripsi' => 'Deskripsi Dokumen 1',
            'file' => "docs/Dokumen berisikan tentang informasi Smart City.pdf",
        ]);

        DB::table('data_dokumens')->insert([
            'image' => 'docs/tampilan dokumen.jpg',
            'judul' => 'Dokumen 2',
            'deskripsi' => 'Deskripsi Dokumen 2',
            'file' => "docs/Dokumen berisikan tentang informasi Smart City.pdf",
        ]);

        DB::table('data_dokumens')->insert([
            'image' => 'docs/tampilan dokumen.jpg',
            'judul' => 'Dokumen 3',
            'deskripsi' => 'Deskripsi Dokumen 3',
            'file' => "docs/LAPORAN_EVALUASI_SC_2022_Kab Malang.pdf",
        ]);

        DB::table('data_dokumens')->insert([
            'image' => 'docs/tampilan dokumen.jpg',
            'judul' => 'Dokumen 4',
            'deskripsi' => 'Deskripsi Dokumen 4',
            'file' => "docs/LAPORAN_EVALUASI_SC_2022_Kab Malang.pdf",
        ]);
    }
}
