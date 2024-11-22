<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Store user data in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('register.form')->with('success', 'User registered successfully!');
    }

         // Show the sign-in form
    public function showSignInForm()
    {
        return view('signin');
    }

    // Process the sign-in form
    public function signIn(Request $request)
    {
        // Validate input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to find the user by email
        $user = User::where('email', $request->email)->first();

        // If user exists and password is correct
        if ($user && Hash::check($request->password, $user->password)) {
            // Store user data in the session (optional)
            session(['user_id' => $user->id, 'user_name' => $user->name]);

            // Redirect to the new home page (home with points and vouchers)
            return redirect()->route('loginhome')->with('success', 'Signed in successfully!');
        }

        // If user doesn't exist or password is incorrect
        return back()->withErrors(['login_error' => 'Invalid email or password.']);
    }

    // Show the home page with points and vouchers
    public function loginhome()
    {
        // Fetch products grouped by category
        $products = Product::all()->groupBy('category');
    
        // Pass the products to the view
        return view('loginhome', compact('products'));
    }

    public function profile()
    {
        // Assuming user is already logged in and user data is stored in session or fetched from database
        $user = User::find(session('user_id')); // Adjust based on your session handling or authentication

        return view('profile', compact('user'));
    }




}
