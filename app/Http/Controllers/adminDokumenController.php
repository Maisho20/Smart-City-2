<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDokumen;

class adminDokumenController extends Controller
{
    public function index()
    {
        $dokumenDatas = DataDokumen::all();

        // dd($homeDatas);

        return view('Admin_view.dokumen', compact('dokumenDatas'));
    }

    public function create()
    {
        return view('Admin_view.dokumen_create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|mimes:pdf|max:8192',
        ]);

        $dokumen = new DataDokumen();

        $file = $request->file('file');
        $fileName = 'file/dokumen/' . time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('/public/', $fileName);

        $dokumen->judul = $request->judul;
        $dokumen->deskripsi = $request->deskripsi;
        $dokumen->file = $fileName;
        $dokumen->save();

        return redirect()->route('admin_dokumen')->with('Berhasil tambah dokumen!');
    }
}
