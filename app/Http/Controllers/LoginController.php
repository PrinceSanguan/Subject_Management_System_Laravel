<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Authentication
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Check user status
            if ($user->status == "active") {
                return redirect()->route('student.profile');
            } else {
                // User is not activated, inform the user and log them out
                Auth::logout();
                return redirect()->route('login')->with(['error' => 'You didn\'t type the valid OTP']);
            }
        } else {
            // Authentication failed, redirect back with errors
            return redirect()->route('login')->with(['error' => 'Invalid email or password']);
        }
    }
}
