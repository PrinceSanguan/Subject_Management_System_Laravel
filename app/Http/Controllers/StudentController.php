<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view ('student.profile');
    }

    public function adding()
    {
        return view ('student.adding');
    }

    public function dropping()
    {
        return view ('student.dropping');
    }

    public function transfer()
    {
        return view ('student.transfer');
    }
}
