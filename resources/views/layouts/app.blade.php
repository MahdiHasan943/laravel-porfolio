<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') | Mahdi Hasan</title>

    <!-- Bootstrap & Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Rubik', sans-serif;
            background-color: #f9f9f9;
        }

        /* Navbar styles */
        .navbar {
            background-color: #1e1e2f;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand img {
            height: 35px;
        }

        .nav-link {
            color: #ddd !important;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .nav-link.active,
        .nav-link:hover {
            color: #00bcd4 !important;
        }

        /* Remove default spacing below fixed navbar */
        main {
            padding-top: 0 !important;
            margin-bottom: 0;
        }

        /* Footer */
        footer {
            background-color: #1e1e2f;
            color: #aaa;
            font-size: 14px;
        }

        footer a {
            color: #aaa;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #00bcd4;
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Mahdi Hasan Logo" />
                Mahdi Hasan
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a
                          class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                          href="{{ route('home') }}"
                          >Home</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                          class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                          href="{{ route('about') }}"
                          >About</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                          class="nav-link {{ request()->is('services') ? 'active' : '' }}"
                          href="{{ route('services') }}"
                          >Services</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                          class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}"
                          href="{{ route('portfolio') }}"
                          >Portfolio</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                          class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                          href="{{ route('contact') }}"
                          >Contact</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4 mt-5 border-top">
        <div
          class="container d-flex justify-content-between align-items-center flex-wrap"
        >
            <p class="mb-0">&copy; {{ date('Y') }} Mahdi Hasan. All rights reserved.</p>
            <div>
                <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('scripts')
</body>
</html>
