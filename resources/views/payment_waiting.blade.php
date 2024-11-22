<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation - GearUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .home-button {
            background-color: #800000;
            color: white;
            padding: 10px 20px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s ease;
            margin-top: 30px;
            text-decoration: none;
        }
        .home-button:hover {
            background-color: #660000;
            color: white;
        }
    </style>
</head>


<body>
@include('layout.navbar')

<div class="container text-center mt-5">
    <h2>Thank you for your payment!</h2>
    <p class="mt-3">Your payment is currently being processed. Please wait for confirmation.</p>
    <p>Once your payment is confirmed, we will send the package to your address and email you the delivery details.</p>
    <div class="alert alert-info mt-4" role="alert">
        You will receive an email with your payment confirmation and delivery details.
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
