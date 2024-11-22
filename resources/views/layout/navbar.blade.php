<style>
    /* Navbar styling */
    .navbar {
        background-color: #000;
        padding: 1rem 2rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Brand styling */
    .navbar-brand {
        font-weight: bold;
        color: #f8f9fa;
        font-size: 1.8rem;
        transition: color 0.3s;
    }

    /* Hover effect for brand */
    .navbar-brand:hover {
        color: #ffffff;
    }

    /* Navbar links */
    .navbar-nav {
        display: flex;
        gap: 2rem;
    }

    /* Link styling */
    .navbar-nav .nav-link {
        color: #f8f9fa;
        font-weight: 500;
        padding: 0.5rem 1rem;
        transition: color 0.3s, background-color 0.3s;
        border-radius: 8px;
    }

    /* Hover effect for links */
    .navbar-nav .nav-link:hover {
        background-color: #333;
        color: #ffffff;
    }

    /* Profile dropdown styling */
    .nav-profile {
        position: relative;
    }

    .nav-profile img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 2px solid #f8f9fa;
        cursor: pointer;
        transition: border-color 0.3s;
    }

    .nav-profile img:hover {
        border-color: #ffffff;
    }

    /* Dropdown menu */
    .profile-dropdown {
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: none;
        min-width: 150px;
        z-index: 1000;
    }

    .profile-dropdown a {
        display: block;
        color: #000;
        padding: 10px;
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: background-color 0.3s;
    }

    .profile-dropdown a:hover {
        background-color: #f1f1f1;
    }

    .nav-profile:hover .profile-dropdown {
        display: block;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Brand with hover effect and link to loginhome -->
        <a class="navbar-brand" href="{{ route('loginhome') }}">GearUp</a>

        <!-- Navbar links aligned left -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginhome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('location') }}">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>

            <!-- Profile icon with dropdown aligned to the right -->
            <div class="nav-profile ms-auto">
                <img src="image/user (1).png" alt="Profile">
                <div class="profile-dropdown">
                    <a href="{{ route('profile') }}">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" style="background: none; border: none; padding: 10px; width: 100%; text-align: left; cursor: pointer; color: #000;">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
