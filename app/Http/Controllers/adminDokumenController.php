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
}
