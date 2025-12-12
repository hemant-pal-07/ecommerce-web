<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function  showsignup()
    {
        return view('sign-up');
    }


      public function signup(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // User create
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/sign-up')->with('success', 'User Registered Successfully!');
    }


    public function signin(){
        return view ('signin');
    }


      // Handle Login
    public function authenticate(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // secure session---->
             return redirect()->route('admin.dashboard')->with('success', 'signin successful!');

        }

        return back()->with('error', 'Invalid email or password')->withInput();
    }

        protected function authenticated(Request $request, $user)
    {
        return redirect()->intended(route('whistlist'));
    }


    // LOGOUT SYSTEM
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('signin');
    }

}






