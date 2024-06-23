<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentHeadController extends Controller
{
    public function index()
    {
        return view ('department-head.profile');
    }

    public function subject()
    {
        return view('department-head.subject');
    }

    public function logs()
    {
        return view('department-head.logs');
    }

    public function adding()
    {
        return view('department-head.adding');
    }

    public function dropping()
    {
        return view('department-head.dropping');
    }

    public function transfer()
    {
        return view('department-head.transfer');
    }
}
