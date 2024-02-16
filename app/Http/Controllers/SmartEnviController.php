<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartEnviController extends Controller
{
    public function index()
    {
        return view('SmartEnv_layout.SmrEnv');
    }
}
