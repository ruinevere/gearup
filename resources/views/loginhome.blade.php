<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gear Up - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Global Font Styles */
    body {
        line-height: 1.6;
        color: #333;
    }

    /* Hero Section Font */
    .hero-content h1 {
        font-size: 2.5rem; /* Adjust for readability */
        color: white;
    }

    .hero-content p {
        font-size: 1.2rem; /* Slightly smaller than the title */
        color: #ddd;
    }

    /* Points & Voucher Section Fonts */
    .voucher-card h5, .points-card h5 {
        font-size: 1.2rem;
        color: #333; /* Darker color for titles */
    }

    .voucher-card p, .points-card p {
        font-size: 0.9rem;
        color: #666; /* Subtle font for details */
    }

    /* Category Filter Section Fonts */
    .category-filter-section h3 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 0px;
        color: #800000; /* Consistent header color */
    }

    .btn-category {
        font-size: 0.9rem;
        font-weight: 500; /* Medium weight for button text */
    }

    /* Product Section Fonts */
    .product-section h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .product-card h5 {
        font-size: 1rem;
        font-weight: bold;
        color: #800000; /* Consistent with theme */
        margin: 10px 0;
    }

    .product-price {
        font-size: 0.9rem;
        font-weight: 600;
        color: #333; /* Neutral color for price */
    }

    /* Rental Flow Section Fonts */
    .rental-flow-section h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #800000;
        margin-bottom: 30px;
    }

    .rental-flow-section .card-title {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
    }

    .rental-flow-section .card-text {
        font-size: 0.9rem;
        color: #666;
    }

        /* Hero Section */
        .hero-section {
            background-image: url('/image/home banner.jpeg'); /* Update path */
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: white;
            text-align: center;
        }
        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .hero-content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .hero-content .btn {
            padding: 12px 30px;
            background-color: #000;
            color: white;
            border-radius: 30px;
            font-weight: bold;
            border: none;
        }

        /* Points & Voucher Section */
        .points-voucher-section {
            display: flex;
            gap: 20px;
            justify-content: center;
            padding: 40px 20px;
            background-color: #f9f9f9;
        }
        .voucher-card, .points-card {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
            max-width: 300px;
            background-color: white;
        }
        .voucher-card:hover, .points-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .voucher-card img, .points-card img {
            width: 60px;
            margin-bottom: 15px;
        }
        .voucher-card h5, .points-card h5 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .voucher-card p, .points-card p {
            font-size: 0.9rem;
            color: #555;
        }

        /* Category Filter Section */
        .category-filter-section {
            padding: 20px 0;
            text-align: center;
            background-color: white;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }
        .category-filter-section h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-category {
    background-color: #800000; /* Default background color */
    color: white; /* Default text color */
    padding: 10px 20px;
    border-radius: 30px;
    font-size: 0.9rem;
    border: none; /* Remove border */
    transition: all 0.3s ease-in-out; /* Smooth transition */
}

.btn-category:hover {
    background-color: #660000; /* Darker background on hover */
    color: #fff; /* Ensure text remains visible */
    transform: translateY(-3px); /* Slight lift on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a shadow effect */
}

.btn-category.active {
    background-color: #550000; /* Even darker color when active */
    color: #fff; /* Ensure text remains visible */
    font-weight: bold; /* Emphasize the active button */
    border: 2px solid white; /* Optional border for active state */
}

/* Product Section */
.product-section {
    padding: 50px 0;
    display: flex;
    flex-direction: column;
    align-items: center; /* Center all the content in the section */
}

.product-section h4 {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
}

/* Row for Cards */
.product-section .row {
    display: flex;
    flex-wrap: wrap; /* Allow cards to wrap onto new rows */
    justify-content: center; /* Center the cards within the row */
    gap: 20px; /* Add spacing between cards */
    width: 100%; /* Ensure full-width alignment for rows */
    max-width: 1200px; /* Limit the row width for better centering */
}

/* Card Styling */
.product-card {
    text-align: center;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    max-width: 200px; /* Adjust card width */
    margin: 10px; /* Add margin for even spacing */
}

.product-card a {
    text-decoration: none; /* Removes the underline from links */
    color: inherit; /* Ensures the link text color matches the parent text color */
}

.product-card a:hover {
    text-decoration: none; /* Prevent underline on hover */
}



.product-card img {
    width: 100%; /* Ensure images scale with the card */
    height: auto;
    object-fit: cover;
    max-height: 150px; /* Limit image height */
}

.product-card h5 {
    font-size: 1.2rem;
    font-weight: bold;
    margin: 10px 0;
    color: black;
}

.product-price {
    font-size: 1rem;
    color: #000;
    margin-top: 10px;
}

/* Hover Effect for Cards */
.product-card:hover {
    transform: translateY(-5px); /* Slight lift effect */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Enhanced shadow */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 30px;
    height: 30px;
    background-color: #800000; /* Custom color */
    border-radius: 50%; /* Rounded shape */
}
.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background-color: #660000; /* Darker on hover */
}

    </style>
</head>
<body>

<!-- Navbar -->
@include('layout.navbar')

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>We Compare. You Play.</h1>
        <p>Discover premium sports gear rentals at unbeatable prices.</p>
        <a href="#products" class="btn">Explore Products</a>
    </div>
</section>

<!-- Points and Vouchers Section -->
<section class="points-voucher-section">
    <div class="voucher-card" onclick="showVoucherList()">
        <img src="/image/coupon (2).png" alt="Voucher Icon">
        <h5>Exclusive Vouchers</h5>
        <p>Get 20% off on your first rental and enjoy great savings.</p>
    </div>
    <div class="voucher-card" onclick="showVoucherList()">
        <img src="/image/gift.png" alt="Voucher Icon">
        <h5>First-Time Offer</h5>
        <p>Unlock special discounts on your first rental.</p>
    </div>
    <div class="points-card">
        <img src="/image/star.png" alt="Points Icon">
        <h5>Your Points</h5>
        <p>Earn points with every rental and redeem exciting rewards!</p>
    </div>
</section>

<!-- Voucher Modal -->
<div class="modal fade" id="voucherModal" tabindex="-1" aria-labelledby="voucherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="voucherModalLabel">Available Vouchers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        25% Discount Voucher
                        <button class="btn btn-primary btn-sm" onclick="applyVoucher(25)">Apply</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        15% Discount Voucher
                        <button class="btn btn-primary btn-sm" onclick="applyVoucher(15)">Apply</button>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Rental Flow Section -->
<section class="container rental-flow-section my-5">
    <h2 class="text-center mb-5">Rental Flow</h2>
    <div id="rentalFlowCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center gap-4">
                    <!-- Step 1 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <img src="/image/delivery-truck.png" class="card-img-top" alt="Delivery">
                        <div class="card-body">
                            <h5 class="card-title">Step 1: Delivery</h5>
                            <p class="card-text">The rental product will be delivered to your address. Delivery details will be sent via email after payment.</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <img src="/image/id-card.png" class="card-img-top" alt="Identity Guarantee">
                        <div class="card-body">
                            <h5 class="card-title">Step 2: Identity Guarantee</h5>
                            <p class="card-text">Your Resident Identity Card (KTP) will be held as a guarantee during the rental period.</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <img src="/image/email (1).png" class="card-img-top" alt="Rental Details">
                        <div class="card-body">
                            <h5 class="card-title">Step 3: Rental Details</h5>
                            <p class="card-text">Rental date and time details will be sent via email after payment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Slide -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center gap-4">
                    <!-- Step 4 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <img src="/image/clock (1).png" class="card-img-top" alt="Late Returns">
                        <div class="card-body">
                            <h5 class="card-title">Step 4: Late Returns</h5>
                            <p class="card-text">Late returns will incur a fine of 5% of the product price for each day overdue.</p>
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <img src="/image/loupe (1).png" class="card-img-top" alt="Return and Inspection">
                        <div class="card-body">
                            <h5 class="card-title">Step 5: Return and Inspection</h5>
                            <p class="card-text">After the rental period ends, return the product. Your KTP will be returned upon product inspection.</p>
                        </div>
                    </div>
                    <!-- Step 6 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <img src="/image/faq.png" class="card-img-top" alt="Customer Support">
                        <div class="card-body">
                            <h5 class="card-title">Step 6: Need Help?</h5>
                            <p class="card-text">If you have any questions, feel free to contact our friendly support team!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#rentalFlowCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#rentalFlowCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>



<!-- Category Filter Section -->
<div class="category-filter-section">
    <h3>Browse by Category</h3>
    <div class="d-flex justify-content-center flex-wrap">
        <a href="{{ route('products.filter', ['category' => 'football']) }}" 
           class="btn btn-category mx-1 {{ request('category') == 'football' ? 'active' : '' }}">Football</a>
        <a href="{{ route('products.filter', ['category' => 'basketball']) }}" 
           class="btn btn-category mx-1 {{ request('category') == 'basketball' ? 'active' : '' }}">Basketball</a>
        <a href="{{ route('products.filter', ['category' => 'badminton']) }}" 
           class="btn btn-category mx-1 {{ request('category') == 'badminton' ? 'active' : '' }}">Badminton</a>
        <a href="{{ route('products.filter', ['category' => 'others']) }}" 
           class="btn btn-category mx-1 {{ request('category') == 'others' ? 'active' : '' }}">Others</a>
    </div>
</div>


<!-- Product Section -->
<section class="container product-section" id="products">
    <h2 class="text-center mb-5">Our Products</h2>

    
    @foreach ($products as $category => $products)
        <h4 class="text-center">{{ ucfirst($category) }}</h4>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <a href="{{ route('product.detail', $product->id) }}" style="text-decoration: none; color: inherit;">
                        <div class="card product-card">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
</section>

<!-- Footer -->
@include('layout.footer')

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showVoucherList() {
        const voucherModal = new bootstrap.Modal(document.getElementById('voucherModal'));
        voucherModal.show();
    }

    function applyVoucher(discount) {
        document.querySelectorAll('.product-price').forEach(priceElement => {
            const originalPrice = parseInt(priceElement.textContent.replace(/[^0-9]/g, ''));
            const discountedPrice = Math.floor(originalPrice * (1 - discount / 100));
            priceElement.innerHTML = `
                <span class="original-price text-muted" style="text-decoration: line-through;">Rp ${originalPrice.toLocaleString('id-ID')}</span>
                <span class="discounted-price text-danger">Rp ${discountedPrice.toLocaleString('id-ID')}</span>
            `;
        });
        const voucherModal = bootstrap.Modal.getInstance(document.getElementById('voucherModal'));
        voucherModal.hide();
    }
</script>
</body>
</html>
