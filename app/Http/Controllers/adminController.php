<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use App\Models\DataBerita;
use App\Models\DataDokumen;

class adminController extends Controller
{
    public function index()
    {
        $homeDatas = home::all();
        $beritaDatas = DataBerita::all();
        $dataDokumens = DataDokumen::all();

        // dd($homeDatas);

        return view('Admin_view.admin', compact('homeDatas', 'beritaDatas', 'dataDokumens'));
    }
}
