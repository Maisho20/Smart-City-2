<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartEcoController extends Controller
{
    public function index()
    {
        return view('SmartEco_layout.smrEco');
    }
}
