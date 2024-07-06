<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
USe Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $user = auth()->user(); 

        return view('student.profile', [
            'user' => $user, 
        ]);
    }

    public function changeInfo(Request $request)
    {
        $user = auth()->user();

        // Update user information based on form inputs
        $user->course = $request->input('course');
        $user->year = $request->input('year');
        $user->section = $request->input('section');
        
        $user->save(); // Save the updated user data
        
        return redirect()->back()->with('success', 'User information updated successfully!');
    }

    public function changePassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        // Get the current user
        $user = Auth::user();

        // Check if the current password matches the user's password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->route('student.profile')->with('error', 'The current password is incorrect.');
        }

        // Check if new password is different from current password
        if ($request->current_password === $request->new_password) {
            return redirect()->route('student.profile')->with('error', 'The new password must be different from the current password.');
        }

        // Check if new password and confirm password match
        if ($request->new_password !== $request->confirm_password) {
            return redirect()->route('student.profile')->with('error', 'The new and confirmed passwords do not match.');
        }

        // Change the user's password
        $user->password = Hash::make($request->new_password);
        $user->update();

        // Redirect with success message
        return redirect()->route('student.profile')->with('success', 'Password changed successfully.');
    }

    public function adding()
    {
        $user = auth()->user(); 

        return view('student.adding', [
            'user' => $user, 
        ]);
    }

    public function dropping()
    {
        $user = auth()->user(); 

        return view('student.dropping', [
            'user' => $user, 
        ]);
    }

    public function transfer()
    {
        $user = auth()->user(); 

        return view('student.transfer', [
            'user' => $user, 
        ]);
    }
}
