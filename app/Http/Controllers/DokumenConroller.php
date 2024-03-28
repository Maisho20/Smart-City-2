<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenConroller extends Controller
{
    public function index(){
        return view('dokumen');
    }
}
