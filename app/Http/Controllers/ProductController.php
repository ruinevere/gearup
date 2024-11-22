<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products grouped by category
        $categories = Product::select('category')
            ->distinct()
            ->get()
            ->pluck('category');

        $productsByCategory = [];
        foreach ($categories as $category) {
            $productsByCategory[$category] = Product::where('category', $category)->get();
        }

        return view('home', compact('productsByCategory'));
    }

    public function filterByCategory($category = null)
    {
        // Fetch all products if no category is provided
        if (!$category) {
            $products = Product::all()->groupBy('category');
        } else {
            $products = Product::where('category', $category)->get()->groupBy('category');
        }

        return view('loginhome', compact('products'));
    }

    public function show($id)
{
    $product = Product::findOrFail($id); // Fetch product by ID or throw a 404 if not found
    return view('detail', compact('product'));
}


}

