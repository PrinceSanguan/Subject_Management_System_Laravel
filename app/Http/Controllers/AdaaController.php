<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdaaController extends Controller
{
    public function index()
    {
        return view ('adaa.profile');
    }

    public function adding()
    {
        return view ('adaa.adding');
    }

    public function dropping()
    {
        return view ('adaa.dropping');
    }

    public function transfer()
    {
        return view ('adaa.transfer');
    }
}
