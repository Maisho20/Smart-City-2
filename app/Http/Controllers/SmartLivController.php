<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartLivController extends Controller
{
    public function index()
    {
        return view('liv');
    }
}
