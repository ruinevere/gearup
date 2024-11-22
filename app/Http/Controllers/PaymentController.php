<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class PaymentController extends Controller
{
    public function showPaymentPage(Request $request)
{
    // Retrieve the query parameters from the request
    $productId = $request->query('productId');
    $rentDuration = $request->query('rentDuration', 1);

    // Find the product by ID
    $product = Product::findOrFail($productId);

    // Calculate the total price based on the selected rent duration
    $basePrice = $product->price;
    $totalPrice = $basePrice * $rentDuration;
    $deliveryFee = 20000; // Fixed delivery fee

    // Fetch user details if necessary
    $user  = User::find(session('user_id'));; // Replace with dynamic user ID logic if needed

    // Pass all required data to the view
    return view('payment', [
        'product' => $product,
        'user' => $user,
        'rentDuration' => $rentDuration,
        'totalPrice' => $totalPrice,
        'deliveryFee' => $deliveryFee,
    ]);
}


    public function confirmPayment(Request $request)
    {
        // Validate the request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rent_duration' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        // You might want to save the payment data or transaction here for later confirmation
        // $payment = Payment::create([...]); // Example of saving payment info in a Payment model

        // Redirect to the waiting for confirmation page
        return redirect()->route('payment.waiting')->with('success', 'Your payment is being processed. Please wait for confirmation.');
}

public function showPaymentWaitingPage()
{
    return view('payment_waiting');
}

}