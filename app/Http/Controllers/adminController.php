<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class adminController extends Controller
{
    public function index()
    {
        $homeDatas = home::all();

        // dd($homeDatas);

        return view('Admin_view.admin', compact('homeDatas'));
    }
}
