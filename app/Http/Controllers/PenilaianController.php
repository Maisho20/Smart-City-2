<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index_2022(){
        return view('pen_2022');
    }

    public function index_2023(){
        return view('pen_2023');
    }
}
