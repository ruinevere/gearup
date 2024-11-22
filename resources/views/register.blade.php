<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - GearUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }
        .left-section {
            background: url('/image/login.jpg') no-repeat center center;
            background-size: cover;
            position: relative;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
            width: 50%;
        }
        /* .text-overlay {
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
            /* padding: 20px; */
            /* border-radius: 10px; */
        /* } */ 
        .left-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .left-section p {
            font-size: 1rem;
            line-height: 1.5;
        }
        .right-section {
            background: white;
            padding: 40px 30px;
            border-radius: 0;
            box-shadow: -4px 0 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-container {
            max-width: 400px;
            width: 100%;
        }
        .auth-heading {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        .auth-subtext {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 8px;
            height: 45px;
            margin-bottom: 15px;
            font-size: 1rem;
        }
        .btn {
            border-radius: 8px;
            height: 45px;
            font-size: 1rem;
        }
        .register-btn {
            background-color: #333;
            color: white;
            border: none;
        }
        .register-btn:hover {
            background-color: #444;
        }
        .google-btn {
            background-color: #fff;
            border: 1px solid #ddd;
            color: #333;
            font-weight: 600;
        }
        .google-btn:hover {
            background-color: #f1f1f1;
        }
        .extra-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
        }
        .extra-link a {
            color: #007bff;
            text-decoration: none;
        }
        .extra-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="left-section">
    <div class="text-overlay">
        <h1>Join GearUp and Start Playing Today!</h1>
        <p>
            GearUp gives you access to premium sports gear, so you're always ready to play, without the cost and hassle of ownership.
        </p>
    </div>
</div>

<div class="right-section">
    <div class="register-container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h3 class="auth-heading">Create Your Account</h3>
        <p class="auth-subtext">Sign up now to rent premium sports equipment, enjoy flexible rental periods, and get exclusive offers.</p>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Name" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="text" name="address" class="form-control" placeholder="Address">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            <button type="submit" class="btn register-btn w-100">Create Account</button>
            <button type="button" class="btn google-btn w-100 mt-3">Sign up with Google</button>
        </form>
        <div class="extra-link">
            <p>Already have an account? <a href="{{route('sign-in.form')}}">Sign in</a></p>
        </div>
    </div>
</div>

</body>
</html>
