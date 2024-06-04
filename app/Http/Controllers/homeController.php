<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use App\Models\DataDokumen;
// use App\Models\berita;
use App\Models\DataBerita;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facecades\pdf;

class homeController extends Controller
{
    public function index()
    {
        $data = home::get();
        $dokumen = DataDokumen::get();
        $news = DataBerita::get();
        // dd($data, $dokumen, $news);

        // foreach ($data as $item) {
        //     $item->smartIco = asset(substr($item->smartIco, 7, -2));
        //     $item->smartImg = asset(substr($item->smartImg, 7, -2));
        // }

        // foreach ($dokumen as $item) {
        //     $item->file = asset(substr($item->file, 7, -2));
        // }

        // foreach ($news as $item) {
        //     $item->gambar = asset(substr($item->gambar, 7, -2));
        // }

        return view('home', compact('data', 'news', 'dokumen'));
    }
}
