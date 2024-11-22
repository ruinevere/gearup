<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GearUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling for the contact page */
        .contact-page {
            padding: 2rem;
            max-width: 800px;
            margin: auto;
            text-align: left;
        }

        .contact-page h1 {
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .contact-page p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .contact-page .section-title {
            font-size: 1.1rem;
            font-weight: bold;
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 25px;
            font-size: 0.9rem;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }

        .form-check-label {
            font-size: 0.9rem;
        }

        .submit-btn {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            padding: 0.5rem 2rem;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #333;
        }

        .store-section {
            margin-top: 2rem;
            text-align: center;
        }

        .store-section p {
            font-size: 1rem;
        }

        .store-section .brand-name {
            font-weight: bold;
            color: #800000;
            font-size: 1.25rem;
        }
    </style>
</head>
<body>
@include('layout.navbar')
<div class="contact-page">
    <!-- Contact Header -->
    <h1>We’re Here to Help!</h1>
    <p>Have Questions or Need Assistance? Get in Touch with GearUp.</p>

    <!-- Customer Support Section -->
    <p><strong>Customer Support</strong></p>
    <p>Our team is available to assist you with any questions about your rentals, account, or services.
       Choose your preferred way to reach us.</p>

    <!-- Contact Form -->
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="section-title">Contact Form</div>
        
        <label for="name" class="form-label">Full Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>

        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="youremail@gmail.com" required>

        <label for="message" class="form-label">Message</label>
        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tell us what you need.." required></textarea>

        <!-- Agreement Checkbox -->
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="agreement" name="agreement" required>
            <label class="form-check-label" for="agreement">
                I accept the message copy agreement. I would also like to receive marketing information about GearUp Product.
            </label>
        </div>

        <!-- Privacy Policy Note -->
        <p>By submitting this form, I certify that I have agreed and accepted the privacy policy.</p>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Submit</button>
    </form>

    <!-- Store Section -->
    <div class="store-section">
        <p><strong>Visit Us In-Store</strong></p>
        <p>Prefer to stop by? Find us at: <span class="brand-name">GearUp</span></p>
    </div>
</div>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <h3></h3>
    <p></p>

</section>
@include('layout.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
