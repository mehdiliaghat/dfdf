<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nejahController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function homeScan3d()
    {
        return view('homeScan3d');
    }
    public function homeContactUs()
    {
        return view('homeContactUs');

    }

}
