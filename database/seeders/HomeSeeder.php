<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        DB::table('homes')->insert([
            'smartIco' => "envIcn.png",
            'smartImg' => "environment.jpg",
            'routes' => 'SmartEnv',
            'judulSmart' => 'Smart Environment',
            'subJudulSmart' => 'Wisata Edukasi & Edu Sampah Cipta Kerja',
            'smartDesc' => 'Penerapan proyek untuk mengelola energi, pengurangan limbah, pengawasan kualitas udara,
            dan pengembangan kota cerdas.',
        ]);

        // 2
        DB::table('homes')->insert([
            'smartIco' => "govIcn.png",
            'smartImg' => "gov.jpg",
            'routes' => 'SmartGov',
            'judulSmart' => 'Smart Governance',
            'subJudulSmart' => 'DESAKU TUNTAS',
            'smartDesc' => 'Konsep pemerintahan berbasis Teknologi yang membahas suatu tata kelola serta pelayanan.',
        ]);

        // 3
        DB::table('homes')->insert([
            'smartIco' => "brndIcn.png",
            'smartImg' => "bran.jpg",
            'routes' => 'SmartBrand',
            'judulSmart' => 'Smart Branding',
            'subJudulSmart' => 'MATIC',
            'smartDesc' => 'Menampilkan identitas kota dengan mengoptimalkan pemasaran melalui teknologi
            untuk lingkup regional dan global.',
        ]);

        // 4
        DB::table('homes')->insert([
            'smartIco' => "ecoIcn.png",
            'smartImg' => "eco.jpg",
            'routes' => 'SmartEco',
            'judulSmart' => 'Smart Economy',
            'subJudulSmart' => 'E-AGRIPROP',
            'smartDesc' => 'Perekonomian berdasarkan inovasi teknologi berkonsep sumber daya, daya saing,
            pembayaran dan infrastruktur informasi teknologi.',
        ]);

        // 5
        DB::table('homes')->insert([
            'smartIco' => "livIcn.png",
            'smartImg' => "living.jpg",
            'routes' => 'SmartLiv',
            'judulSmart' => 'Smart Living',
            'subJudulSmart' => 'Smart health',
            'smartDesc' => 'Mewujudkan tempat tinggal yang nyaman, layak dan efisien dengan mengkolaborasikan
            penggunaan teknologi dan akses fasilitas yang memadai.',
        ]);

        // 6
        DB::table('homes')->insert([
            'smartIco' => "socIcn.png",
            'smartImg' => "p.jpg",
            'routes' => 'SmartSoc',
            'judulSmart' => 'Smart Society',
            'subJudulSmart' => 'CONTRA WAR',
            'smartDesc' => 'Pemanfaatan penggunaan teknologi untuk menghubungkan masyarakat dengan fokus
            ekonomi, kesejahteraan dan efektivitas institusi.',
        ]);
    }
}
