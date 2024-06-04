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
        // dd($request);
        $request->validate([
            'gambar' => 'required|mimes:jpg,png,jpeg|max:2048',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        $berita = new DataBerita();

        $file = $request->file('gambar');
        $fileName = 'img/berita/' . time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('/public/', $fileName);

        $berita->gambar = $fileName;
        $berita->deskripsi = $request->deskripsi;
        $berita->link = $request->link;
        $berita->save();

        return redirect()->route('admin_berita')->with('Berhasil tambah berita!');
    }
}
