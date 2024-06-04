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

    public function store(Request $request)
    {
        dd($request->all());
        // $request->validate([
        //     'judul' => 'required',
        //     'isi' => 'required',
        //     'gambar' => 'required',
        // ]);

        // $beritaDatas = new DataBerita;
        // $beritaDatas->judul = $request->judul;
        // $beritaDatas->isi = $request->isi;
        // $beritaDatas->gambar = $request->gambar;

        // $beritaDatas->save();

        // return redirect('/admin/berita')->with('status', 'Data Berhasil Ditambahkan!');
    }
}
