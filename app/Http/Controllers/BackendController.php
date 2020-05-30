<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function cities()
    {
        return view('backend.cities');
    }

    public function myobjects()
    {
        return view('backend.myobjects');
    }

    public function profile()
    {
        return view('backend.profile');
    }

    public function saveobject()
    {
        return view('backend.saveobject');
    }

    public function saveroom()
    {
        return view('backend.saveroom');
    }

}
