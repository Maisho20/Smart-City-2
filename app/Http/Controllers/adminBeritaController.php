<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBerita;
use Illuminate\Support\Facades\Storage;

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
        $fileName = 'berita/' . time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs($fileName);

        $berita->gambar = $fileName;
        $berita->deskripsi = $request->deskripsi;
        $berita->link = $request->link;
        $berita->save();

        return redirect()->route('admin_berita')->with('Berhasil tambah berita!');
    }

    public function edit($id)
    {
        $berita = DataBerita::find($id);

        return view('Admin_view.berita_edit', compact('berita'));
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'gambar' => 'nullable|mimes:jpg,png,jpeg|max:2048',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        $berita = DataBerita::where('id', $id)->first();

        if($request->hasFile('gambar')){
            Storage::delete($berita->gambar);
            $file = $request->file('gambar');
            $fileName = 'berita/' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs($fileName);
            $berita->gambar = $fileName;
        }

        $berita->deskripsi = $request->deskripsi;
        $berita->link = $request->link;
        $berita->save();

        return redirect()->route('admin_berita')->with('Berhasil update berita!');
    }

    public function delete($id)
    {
        $berita = DataBerita::find($id);
        $berita->delete();

        return redirect()->route('admin_berita')->with('Berhasil hapus berita!');
    }
}
