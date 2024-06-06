<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDokumen;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'deskripsi' => 'required',
            'file' => 'required|mimes:pdf|max:8192',
        ]);

        $dokumen = new DataDokumen();
        // image
        $files = $request->file('image');
        $fileNames = 'docs/' . time() . '.' . $files->getClientOriginalName();
        $files->storeAs($fileNames);

        // dokumen
        $file = $request->file('file');
        $fileName = 'docs/' . time() . '.' . $file->getClientOriginalName();
        $file->storeAs($fileName);

        $dokumen->judul = $request->judul;
        $dokumen->image = $fileNames;
        $dokumen->deskripsi = $request->deskripsi;
        $dokumen->file = $fileName;
        $dokumen->save();

        return redirect()->route('admin_dokumen')->with('Berhasil tambah dokumen!');
    }

    public function edit($id)
    {
        $dokumen = DataDokumen::find($id);

        return view('Admin_view.dokumen_edit', compact('dokumen'));
    }

    public function update(Request $request,int $id)
    {
        // @dd($request);
        $request->validate([
            'judul' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'deskripsi' => 'required',
            'file' => 'nullable|mimes:pdf|max:8192',
        ]);

        $dokumen = DataDokumen::where('id', $id)->first();
        // image
        if ($request->hasFile('image')) {
            Storage::delete($dokumen->image);
            $files = $request->file('image');
            $fileNames = 'docs/' . time() . '.' . $files->getClientOriginalName();
            $files->storeAs($fileNames);
            $dokumen->image = $fileNames;
        }

        // dokumen
        if ($request->hasFile('file')) {
            Storage::delete($dokumen->file);
            $file = $request->file('file');
            $fileName = 'docs/' . time() . '.' . $file->getClientOriginalName();
            $file->storeAs($fileName);
            $dokumen->file = $fileName;
        }

        $dokumen->judul = $request->judul;
        $dokumen->deskripsi = $request->deskripsi;
        $dokumen->save();

        return redirect()->route('admin_dokumen')->with('Berhasil update dokumen!');
    }

    public function delete($id)
    {
        $dokumen = DataDokumen::find($id);
        $dokumen->delete();

        return redirect()->route('admin_dokumen')->with('Berhasil hapus dokumen!');
    }
}
