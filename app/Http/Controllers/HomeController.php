<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Fetch products grouped by category
        $productsByCategory = Product::all()->groupBy('category');

        return view('home', compact('productsByCategory'));
    }
}
