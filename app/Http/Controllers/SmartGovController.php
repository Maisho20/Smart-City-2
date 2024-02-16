<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartGovController extends Controller
{
    //
    public function index()
    {
        return view('SmartGov_layout.SmrGov');
    }
}
