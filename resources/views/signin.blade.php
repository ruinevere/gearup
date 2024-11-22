<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - GearUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }
        .left-section {
            background: url('/image/signup.jpg') no-repeat center center;
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
        .sign-in-container {
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
        .sign-in-btn {
            background-color: #333;
            color: white;
            border: none;
        }
        .sign-in-btn:hover {
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
        <h1>Log In and Get Back in the Game.</h1>
        <p>
            Don’t let a lack of gear stop you from playing your favorite sport. 
            Browse our range, reserve what you need, and get in the game with ease. 
            GearUp is here to keep you active and always ready.
        </p>
    </div>
</div>

<div class="right-section">
    <div class="sign-in-container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->has('login_error'))
            <div class="alert alert-danger">
                {{ $errors->first('login_error') }}
            </div>
        @endif
        <h3 class="auth-heading">Log in to Your Account</h3>
        <p class="auth-subtext">Access your rentals, reservations, and personalized recommendations.</p>
        <form action="{{ route('sign-in.process') }}" method="POST">
            @csrf
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button type="submit" class="btn sign-in-btn w-100">Sign In</button>
            <button type="button" class="btn google-btn w-100 mt-3">Sign in with Google</button>
        </form>
        <div class="extra-link">
            <p>Don't have an account? <a href="{{ route('register.form') }}">Sign up</a></p>
        </div>
    </div>
</div>

</body>
</html>
