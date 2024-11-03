<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun - @yield('title')</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }
        
        footer {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
        }

        .nav-link {
            font-weight: 500;
            color: #333333;
            margin-right: 1rem;
        }

        .nav-link:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">EF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('categories.dataScience') }}">Data Science</a></li>
                            <li><a class="dropdown-item" href="{{ route('categories.networkSecurity') }}">Network Security</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('writer') }}">Writers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('popular') }}">Popular</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="text-center py-4">
        © 2024 EduFun | Web Programming | Thevid Oswald Berrius | 2602075415
    </footer>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
