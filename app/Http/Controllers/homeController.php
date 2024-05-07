<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use App\Models\DataDokumen;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facecades\pdf;

class homeController extends Controller
{
    public function index()
    {
        $data = home::all();
        $dokumen = DataDokumen::all();

        foreach ($data as $item) {
            $item->smartIco = asset(substr($item->smartIco, 7, -2));
            $item->smartImg = asset(substr($item->smartImg, 7, -2));
        }

        foreach ($dokumen as $item) {
            $item->file = asset(substr($item->file, 7, -2));
        }
        // $pdf = app::loadView(compact('dokumen'));

        //  dd($dokumen, $data);

        return view('home', compact('data'), compact('dokumen'));
    }
}
