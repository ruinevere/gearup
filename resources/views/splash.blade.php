<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Splash Screen - GearUp</title>
    <style>
        /* Splash screen styles */
        body {
            font-family: 'Poppins', sans-serif;
        }
        .splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .splash-screen h1 {
            color: #ffffff;
            font-size: 3rem;
            font-weight: bold;
            margin: 0;
        }
    </style>
</head>
<body>

<!-- Splash Screen -->
<div class="splash-screen" id="splash-screen">
    <h1>Gear Up</h1>
</div>

<script>
    // Display the splash screen for 2 seconds, then redirect to the sign-in page
    setTimeout(function () {
        window.location.href = "{{ route('sign-in.form') }}"; // Update this to the desired route after splash
    }, 2000);
</script>

</body>
</html>
