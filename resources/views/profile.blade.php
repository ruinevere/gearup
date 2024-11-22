<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - GearUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .prof-container {
            padding: 40px;
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .prof-container h2 {
            text-align: center;
            font-size: 1.75rem;
            margin-bottom: 30px;
        }
        .prof-container .card {
            border: none;
            /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
        }
        .logout-button {
            background-color: #800000;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            display: block;
            margin: 20px auto 0;
            width: 100%;
            max-width: 300px;
        }
        .logout-button:hover {
            background-color: #660000;
        }
    </style>
</head>
<body>

@include('layout.navbar')

<div class="prof-container">
    <h2>User Profile</h2>
    <div class="card mt-3">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Address:</strong> {{ $user->address ?? 'No address provided' }}</p>
        </div>
    </div>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>
</div>

<section class="newsletter-section">
    <br><br><br><br><br><br>
</section>

@include('layout.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
