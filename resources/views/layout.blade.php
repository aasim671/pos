<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sudais Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-custom {
            background-color: #e3f2fd;
            /* Light blue background */
        }

        .navbar-brand-custom {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
            /* Blue color */
        }

        .nav-link-custom {
            color: #007bff;
            /* Blue color */
        }

        .nav-link-custom:hover {
            color: #0056b3;
            /* Darker blue on hover */
        }

        .content-container {
            text-align: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand navbar-brand-custom mx-auto" href="#">Sudais Shop</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="/categories">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="/brands">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="/sales">Sales</a>
                    </li>
                </ul>
            </div>

            <a class="btn btn-sm btn-primary mx-auto p-1px me-1" href="{{ url('/login') }}">Login</a>
            <a class="btn btn-sm btn-primary mx-auto me-1" href="{{ url('/register') }}">Register</a>
            <a class="btn btn-sm btn-primary mx-auto" href="{{ url('/logout') }}">LogOut</a>
        </div>
    </nav>

    <div class="container-fluid mt-3 content-container">
        @yield('content')
    </div>

    <div>
        @yield('script')
    </div>

</body>

</html>
