<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUp - Locations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling for the location page */
        .location-page {
            padding: 2rem;
            text-align: center;
        }

        .location-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .location-address {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }

        .location-image img {
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 1rem;
        }

        .map-button {
            font-weight: bold;
            padding: 0.5rem 2rem;
            border: 2px solid #000;
            border-radius: 25px;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
            color: #000;
        }

        .map-button:hover {
            background-color: #000;
            color: #fff;
        }

        .help-section {
            margin-top: 2rem;
            font-size: 1rem;
        }

        .contact-link {
            color: #dc3545;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-link:hover {
            color: #a71d2a;
        }
    </style>
</head>
<body>
@include('layout.navbar')

<div class="location-page">
    <!-- Title -->
    <div class="location-title">Jakarta</div>
    <div class="location-address">Silkwood Apartment</div>

    <!-- Location Image -->
    <div class="location-image">
        <img src="image/location.jpg" alt="GearUp Location in Jakarta">
    </div>

    <!-- Map Button -->
    <a href="https://www.google.com/maps" target="_blank" class="map-button">See On Maps</a>

    <!-- Help Section -->
    <div class="help-section">
        <p><strong>Need Help?</strong></p>
        <p>Contact our customer service team for more details about in-store visits or rentals.</p>
        <a href="{{ route('contact') }}" class="contact-link">[Contact Us]</a>
    </div>
</div>
@include('layout.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
