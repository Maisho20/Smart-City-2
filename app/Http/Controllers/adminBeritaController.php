<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBerita;

class adminBeritaController extends Controller
{
    public function index()
    {
        $beritaDatas = DataBerita::all();

        // dd($homeDatas);

        return view('Admin_view.berita', compact('beritaDatas'));
    }

    public function create()
    {
        return view('Admin_view.berita_create');
    }
}
