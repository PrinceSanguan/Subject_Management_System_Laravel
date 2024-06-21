<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('admin.dashboard');
    }

    public function account()
    {
        return view ('admin.account');
    }

    public function adding()
    {
        return view ('admin.adding');
    }

    public function dropping()
    {
        return view ('admin.dropping');
    }

    public function transfer()
    {
        return view ('admin.transfer');
    }
}
