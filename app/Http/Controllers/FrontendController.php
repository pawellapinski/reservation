<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function article()
    {
        return view('frontend.article');
    }

    public function object()
    {
        return view('frontend.object');
    }

    public function person()
    {
        return view('frontend.person');
    }

    public function room()
    {
        return view('frontend.room');
    }

    public function roomsearch()
    {
        return view('frontend.roomsearch');
    }
}

