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
    public function homeVR()
    {
        return view('homeVR');
    }
    public function homeAR()
    {
        return view('homeAR');
    }
    public function homeSeriousGames()
    {
        return view('homeSeriousGames');
    }
    public function homeBroadcast()
    {
        return view('homeBroadcast');
    }
    public function homeWeb3d()
    {
        return view('homeWeb3d');
    }
    public function HoloGraphics()
    {
        return view('homeHoloGraphics');
    }
    public function homeCourseContent()
    {
        return view('homeCourseContent');
    }

    public function homeContactUs()
    {
        return view('homeContactUs');

    }

}
