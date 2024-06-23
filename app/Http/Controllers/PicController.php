<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicController extends Controller
{
    public function index()
    {
        return view ('pic.profile');
    }

    public function adding()
    {
        return view ('pic.adding');
    }

    public function request()
    {
        return view ('pic.request');
    }
}

