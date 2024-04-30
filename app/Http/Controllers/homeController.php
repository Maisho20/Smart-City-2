<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use Illuminate\Support\Facades\File;

class homeController extends Controller
{
    public function index()
    {
        $data = home::all();
        $dokumen = home::all();

        foreach ($data as $item) {
            $item->smartIco = asset(substr($item->smartIco, 7, -2));
            $item->smartImg = asset(substr($item->smartImg, 7, -2));
        }

        return view('home', compact('data'), compact('dokumen'));
    }
}
