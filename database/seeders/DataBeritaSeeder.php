<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_beritas')->insert([
            'gambar' => "berita/template.jpg",
            'deskripsi' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'link' => 'https://malangkab.go.id/Berita/index/malangkab-pusat-opd%203507-wakil-bupati-malang-hadiri-pelantikan-dan-pengambilan-sumpah-panitia-pemilihan-kecamatan-se-kabupaten-malang-pada-pemilihan-umum-tahun-2024',
        ]);
    }
}
