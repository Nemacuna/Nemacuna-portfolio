<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', $profile['name']) — Portfolio</title>
    <meta name="description" content="Personal portfolio of {{ $profile['name'] }} — web developer.">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="container navbar-inner">
            <a href="#home" class="brand">{{ $profile['name'] }}</a>

            <button class="nav-toggler" id="navToggler" aria-label="Toggle navigation" aria-expanded="false">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link"><i class="fas fa-house"></i> Home</a></li>
                <li><a href="#about" class="nav-link"><i class="fas fa-user"></i> About</a></li>
                <li><a href="#education" class="nav-link"><i class="fas fa-graduation-cap"></i> Education</a></li>
                <li><a href="#certificates" class="nav-link"><i class="fas fa-award"></i> Certificates</a></li>
                <li><a href="#projects" class="nav-link"><i class="fas fa-folder-open"></i> Projects</a></li>
                <li><a href="#contact" class="nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>

            <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                <i class="fas fa-sun icon-sun"></i>
                <i class="fas fa-moon icon-moon"></i>
            </button>
        </div>
    </nav>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>{{ $profile['name'] }}</h4>
                    <p>{{ $profile['role'] }}</p>
                    <p>{{ $profile['location'] }}</p>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <p><a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></p>
                    <p><a href="tel:{{ $profile['phone'] }}">{{ $profile['phone'] }}</a></p>
                    <p>{{ $profile['location'] }}</p>
                </div>
                <div class="footer-col">
                    <h4>Follow</h4>
                    <div class="social-icons">
                        @foreach ($socials as $social)
                            <a href="{{ $social['url'] }}" target="_blank" rel="noopener" aria-label="{{ $social['name'] }}" class="social-icon">
                                @include('partials.icon-' . $social['icon'])
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
