<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the incoming request with unique email validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', 'unique:admins,email', 'regex:/^[a-zA-Z0-9._%+-]+@diu\.edu\.bd$/'],
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Create a new admin (user)
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Log the user in
        Auth::login($admin);
    
        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Registration successful! Welcome to the dashboard.');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
             'email' => 'required|email',
             'password' => 'required|string',
        ]);
    
        // Find the user by email
        $admin = Admin::where('email', $request->email)->first();
    
        // Check if the user exists
        if ($admin) {
            // Check if the password matches the stored hash
            if (Hash::check($request->password, $admin->password)) {
                Auth::login($admin);
                return redirect()->intended(route('dashboard'))->with('success', 'Login successful! Welcome back.');

            } else {
                // Return to login with error
                return back()->withErrors([
                    'password' => 'Invalid password. Please try again.',
                ]);
            }
        } else {
            // Log failed login attempt
            Log::warning('No user found with this email:', ['email' => $request->email]);
    
            // Return to login with error
            return back()->withErrors([
                'email' => 'No user found with this email.',
            ]);
        }
    }
    

    // Handle the logout request
    public function logout()
    {
        Auth::logout();  // Log out the user
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
