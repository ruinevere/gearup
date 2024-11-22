<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

// Splash Screen Route
Route::get('/', function () {
    return view('splash'); // Ensure there is a 'splash.blade.php' in the views folder
})->name('splash');

// Home Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/loginhome', [UserController::class, 'loginhome'])->name('loginhome'); // Navbar "Home" link directs here

// Product Routes
Route::prefix('product')->group(function () {
    Route::get('/{id}', [ProductController::class, 'show'])->name('product.detail'); // Product detail page
    Route::get('/products/{category?}', [ProductController::class, 'filterByCategory'])->name('products.filter'); // Filter products by category
});

// User Authentication & Profile Routes
Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.form');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');

    Route::get('/sign-in', [UserController::class, 'showSignInForm'])->name('sign-in.form');
    Route::post('/sign-in', [UserController::class, 'signIn'])->name('sign-in.process');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

// Payment Routes
Route::prefix('payment')->group(function () {
    Route::get('/', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
    Route::post('/confirm', [PaymentController::class, 'confirmPayment'])->name('payment.confirm');
    Route::get('/waiting', [PaymentController::class, 'showPaymentWaitingPage'])->name('payment.waiting');
});

// Static Pages
Route::get('/location', function () {
    return view('location'); // Ensure a 'location.blade.php' file exists in the views folder
})->name('location');

Route::get('/contact', function () {
    return view('contact'); // Ensure a 'contact.blade.php' file exists in the views folder
})->name('contact');

// Contact Form Submission
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('sign-in.form');
})->name('logout');
