<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Import the Session facade

class AuthController extends Controller
{
    public function index()
    {
        return view('register.login');
    }

    public function login(Request $request)
    {
        $validator = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/layout');
        }
        return redirect('/login')->withErrors('Login details are not valid.');
    }


    public function register()
    {

        return view('register.register');
    }

    public function store(Request $request)
    {
        $validator = $request->validate(
            [
                'fname' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ],
            [
                'fname.required' => 'Enter your name.',
                'email.required' => 'Enter your email.',
                'email.email' => 'Enter a valid email address.',
                'password.required' => 'Enter your password.',
                'password.confirmed' => 'Password confirmation does not match.'
            ]
        );

        // Create a new user with the validated data
        User::create([
            'name' => $request->fname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/layout')->withErrors('Error logging in.');
        }

        // Redirect back to the registration form with an error
        return redirect('/register')->withErrors('Error logging in.');
    }

    public function logout()
    {

        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
