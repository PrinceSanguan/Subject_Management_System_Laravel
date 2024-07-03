<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    public function index()
    {
        return view ('signup');
    }

    public function verify()
    {
        return view ('verify');
    }

    public function register(Request $request)
    {
        // Validate the request data with custom error messages
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'studentNumber' => [
                'required',
                'unique:users',
                'regex:/^TUPC-\d{2}-\d{4}$/'
            ],
            'section' => 'required|alpha',
            'email' => [
                'required',
                'email',
                'unique:users',
                'regex:/^[a-zA-Z0-9._%+-]+@gsfe\.tupcavite\.edu\.ph$/'
            ],
            'year' => 'required|digits:4',
            'course' => 'required',
            'password' => [
                'required',
                'confirmed'
            ],
        ], [
            // Custom error messages (optional)
            'firstName.required' => 'First name is required.',
            'lastName.required' => 'Last name is required.',
            'studentNumber.required' => 'Student number is required.',
            'studentNumber.unique' => 'Student number has already been taken.',
            'studentNumber.regex' => 'Student number format must be TUPC-XX-XXXX.',
            'section.required' => 'Section is required.',
            'section.alpha' => 'Section must only contain letters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email has already been taken.',
            'email.regex' => 'Email must be a valid gsfe.tupcavite.edu.ph address.',
            'year.required' => 'Year is required.',
            'year.digits' => 'Year must be a 4-digit number.',
            'course.required' => 'Course is required.',
            'password.required' => 'Password is required.',
            'password.confirmed' => 'Password confirmation does not match.',
        ]);

        // Saving in the database
        $user = User::create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'studentNumber' => $request->input('studentNumber'),
            'section' => $request->input('section'),
            'email' => $request->input('email'),
            'year' => $request->input('year'),
            'course' => $request->input('course'),
            'password' => bcrypt($request->input('password')),
            'status' => 'inactive',
            'otp' => rand(100000, 999999),
        ]);

        // Send OTP
        Mail::raw("Your OTP is: " . $user->otp, function ($message) use ($user) {
            $message->to($user->email)
                ->subject('OTP Verification');
        });

        return redirect()->route('verify', ['email' => $user->email]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'otp' => 'required|numeric|digits:6',
        ]);

        $user = User::where('email', $request->email)
                    ->where('otp', $request->otp)
                    ->first();

        if ($user) {
            $user->otp = null; // Clear OTP after verification
            $user->status = "active";
            $user->save();

            return redirect()->route('login')->with('success', 'You have successfully created an Account!');
        }

        return redirect()->route('login')->with('error', 'You encode Wrong OTP');
    }
}
