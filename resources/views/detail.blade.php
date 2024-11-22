<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles */
        .product-detail {
            padding: 50px;
            position: relative;
        }
        .back-button {
            position: absolute;
            top: 50%;
            left: -30px;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
        .product-image {
            width: 80%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .rent-duration-btn {
            padding: 5px 15px;
            border: 1px solid #ddd;
            margin: 0 5px;
            cursor: pointer;
            display: inline-block;
            border-radius: 5px;
        }
        .rent-duration-btn.active {
            background-color: #ddd;
            font-weight: bold;
        }
        .rent-button {
            background-color: #800000;
            color: white;
            padding: 10px 30px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }
        .rent-button:hover {
            background-color: #660000;
        }
    </style>
</head>
<body>
@include('layout.navbar')

<div class="container product-detail">
    <!-- Back Button -->
    <button onclick="goBack()" class="back-button">&lt;</button>

    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h1 class="mb-3">{{ $product->name }}</h1>
            <p class="text-muted mb-3">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
            <p class="mb-4">{{ $product->description }}</p>

            <!-- Rent Info -->
            <p><strong>3 products rented this week</strong></p>

            <!-- Rent Duration -->
            <div class="mb-3">
                <label for="duration">Rent Duration:</label>
                <div id="duration" class="d-flex">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="rent-duration-btn" onclick="updatePrice({{ $i }}, this)">{{ $i }} Day{{ $i > 1 ? 's' : '' }}</span>
                    @endfor
                </div>
            </div>

            <!-- Total Price -->
            <p class="mb-2"><strong>Total Price: <span id="total-price">Rp{{ number_format($product->price, 0, ',', '.') }}</span></strong></p>

            <!-- Stock Info -->
            <p class="mb-4"><strong>Stock: 1</strong></p>

            <!-- Rent Button -->
            <a id="rent-button" href="{{ route('payment.page') }}?productId={{ $product->id }}&rentDuration=1" class="rent-button">
                Rent
            </a>
        </div>
    </div>
</div>

<script>
    // Define the base price from the server-side PHP variable
    const basePrice = {{ $product->price }};

    function updateRentButtonUrl(duration) {
        const rentButton = document.getElementById("rent-button");
        rentButton.href = `{{ route('payment.page') }}?productId={{ $product->id }}&rentDuration=${duration}`;
    }

    function updatePrice(duration, element) {
        // Calculate the total price based on selected duration
        const totalPrice = basePrice * duration;
        document.getElementById("total-price").textContent = `Rp${totalPrice.toLocaleString('id-ID')}`;

        // Update active class for duration buttons
        document.querySelectorAll('.rent-duration-btn').forEach(btn => btn.classList.remove('active'));
        element.classList.add('active');

        // Update the rent button URL
        updateRentButtonUrl(duration);
    }
</script>

@include('layout.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
