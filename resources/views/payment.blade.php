<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - GearUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .payment-container {
            padding: 40px;
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .instructions {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .instructions h5 {
            font-weight: bold;
            margin-bottom: 15px;
        }
        .instructions ol {
            padding-left: 20px;
        }
        .instructions li {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        .section-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .product-info, .user-info, .voucher-section, .price-info, .payment-method, .id-card-upload {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .product-image {
            width: 100%;
            max-width: 150px;
            border-radius: 10px;
            margin-right: 20px;
        }
        .confirm-button {
            background-color: #800000;
            color: white;
            padding: 10px 20px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }
        .confirm-button:hover {
            background-color: #660000;
        }
        .total-amount {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .points-info {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
@include('layout.navbar')

<div class="container payment-container">
<h3 class="text-left mb-5">Rental Information</h3>
    <!-- Rental Instructions -->
    <div class="instructions">
        <h5>Read Before You Rent</h5>
        <ol>
            <li>Once payment is completed, our team will deliver the product to your address. Delivery details (date and time) will be sent via email.</li>
            <li>Your Resident Identity Card (KTP) will be held as a guarantee during the rental period.</li>
            <li>Rental details, including duration and return time, can be found in the confirmation email after payment.</li>
            <li>Late returns will incur a daily fine of 5% of the product's rental price.</li>
            <li>After the rental period ends, return the product to our team. Your KTP will be returned after the product passes inspection.</li>
            <li>If you have any questions or need assistance, feel free to <a href="{{ route('contact') }}">contact us</a>. We're here to help!</li>
        </ol>
    </div>

    <h3 class="text-left mb-5">Payment Details</h3>

    <!-- Product Information -->
    <div class="product-info d-flex align-items-center">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
        <div>
            <h4>{{ $product->name }}</h4>
            <p>{{ $product->description }}</p>
            <p><strong>Rent Duration:</strong> {{ $rentDuration }} Day{{ $rentDuration > 1 ? 's' : '' }}</p>
        </div>
    </div>

    <!-- User Information -->
    <div class="user-info">
        <h5 class="section-title">User Information</h5>
        <p><strong>Name:</strong> {{ $user->name ?? 'N/A' }}</p>
        <p><strong>Email:</strong> {{ $user->email ?? 'N/A' }}</p>
        <p><strong>Address:</strong> {{ $user->address ?? 'N/A' }}</p>
    </div>

    <!-- Voucher Section -->
    <div class="voucher-section">
        <h5 class="section-title">Apply Voucher</h5>
        <p>Choose a voucher to apply to your total:</p>
        <div class="form-group">
            <select id="voucher-select" class="form-control" onchange="applyVoucher()">
                <option value="">Select a voucher</option>
                <option value="25">First Payment Voucher - 25% off</option>
                <option value="20">20% Voucher off</option>
            </select>
        </div>
    </div>

    <!-- Price Information -->
    <div class="price-info">
        <h5 class="section-title">Price Details</h5>
        <p><strong>Rent Price:</strong> Rp{{ number_format($totalPrice, 0, ',', '.') }}</p>
        <p><strong>Delivery Fee:</strong> Rp{{ number_format($deliveryFee, 0, ',', '.') }}</p>
        <p class="total-amount">Total Amount: <span id="final-total">Rp{{ number_format($totalPrice + $deliveryFee, 0, ',', '.') }}</span></p>
    </div>

    <!-- Payment Method -->
    <div class="payment-method">
        <h5 class="section-title">Payment Method</h5>
        <p>Only available via bank transfer</p>
        <div class="form-group">
            <label for="bank-details" class="form-label">Bank Account Details:</label>
            <input type="text" id="bank-details" class="form-control" value="Bank BCA, Account Number: 527-502-3326 A/N KENHARDY LIM" readonly>
        </div>
    </div>



    <!-- Confirm and Pay Button -->
    <form action="{{ route('payment.confirm') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="rent_duration" value="{{ $rentDuration }}">
        <input type="hidden" id="total_price_input" name="total_price" value="{{ $totalPrice + $deliveryFee }}">

        <button type="submit" class="confirm-button w-100 mt-4">Confirm and Pay</button>
    </form>

    <!-- Points Information -->
    <p class="points-info">After this rent, you will earn 20 points. You can use them for your next rental!</p>
</div>

@include('layout.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // JavaScript to apply voucher and calculate final total
    const baseTotalPrice = {{ $totalPrice + $deliveryFee }};
    const finalTotalDisplay = document.getElementById("final-total");
    const totalPriceInput = document.getElementById("total_price_input");

    function applyVoucher() {
        const voucherSelect = document.getElementById("voucher-select");
        const discount = parseFloat(voucherSelect.value); // Get discount percentage

        if (discount) {
            // Calculate the discounted total price
            const discountedTotal = baseTotalPrice - (baseTotalPrice * (discount / 100));
            finalTotalDisplay.textContent = `Rp${discountedTotal.toLocaleString('id-ID')}`;
            totalPriceInput.value = discountedTotal; // Update hidden input with new total
        } else {
            // Reset to base price if no voucher is selected
            finalTotalDisplay.textContent = `Rp${baseTotalPrice.toLocaleString('id-ID')}`;
            totalPriceInput.value = baseTotalPrice;
        }
    }
</script>
</body>
</html>
