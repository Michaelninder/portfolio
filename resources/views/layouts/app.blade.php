<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fabian Ternis - @yield('title', 'Portfolio')</title>

    <meta name="description" content="@yield('meta_description', 'Fabian Ternis is a Laravel & Backend Developer specializing in web applications, database optimization, and open-source software tools.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Fabian Ternis, Laravel, PHP, Backend Developer, MySQL, Web Development, Software Engineer, michaelninder, XP Systems, MTEX.dev, EuropeHost')">
    <meta name="author" content="Fabian Ternis">

    <meta property="og:title" content="@yield('og_title', 'Fabian Ternis - Laravel & Backend Developer Portfolio')">
    <meta property="og:description" content="@yield('og_description', 'Explore the portfolio of Fabian Ternis, a passionate Laravel & Backend Developer building robust web solutions and open-source tools.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('img/social-share.png'))">

	<meta property="og:image:width" content="@yield('og_image_width', '288')">
    <meta property="og:image:height" content="@yield('og_image_height', '288')">
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Fabian Ternis - Laravel & Backend Developer')">
    <meta name="twitter:description" content="@yield('twitter_description', 'A peek into the projects and expertise of Fabian Ternis, a dedicated Laravel and backend development specialist.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('img/social-share.png'))">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-text { background: linear-gradient(45deg, #a7b6ff, #5f5fbe); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        body { font-family: 'Inter', sans-serif; background-color: #0f172a; color: #e2e8f0; }
        .tool-card:hover i { animation: bounce-icon 0.6s ease-in-out; }
        @keyframes bounce-icon { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        .nav-menu-mobile { transform: translateX(100%); transition: transform 0.3s ease-out; z-index: 55; }
        .nav-menu-mobile.open { transform: translateX(0); }
        .nav-link.hover-effect:hover { background-color: rgba(255, 255, 255, 0.15); }
        .nav-link.active-state { background-color: rgba(0, 0, 0, 0.15); }
        .nav-link.active-state:hover { background-color: rgba(100, 100, 100, 0.25); }
    </style>
</head>
<body class="antialiased">
    <nav class="fixed w-full z-50 p-4 bg-gradient-to-r from-blue-900 to-purple-900 shadow-lg bg-opacity-80 backdrop-filter backdrop-blur-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-white tracking-wider">Fabian Ternis</a>
            <div class="hidden md:flex space-x-2 text-lg">
                <a href="{{ route('home') }}" class="px-3 py-1 rounded-xl nav-link hover-effect text-gray-300 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('home') ? 'active-state' : '' }}">Home</a>
                <a href="{{ route('experience') }}" class="px-3 py-1 rounded-xl nav-link hover-effect text-gray-300 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('experience') ? 'active-state' : '' }}">Experience</a>
                <a href="{{ route('education') }}" class="px-3 py-1 rounded-xl nav-link hover-effect text-gray-300 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('education') ? 'active-state' : '' }}">Education</a>
                <a href="{{ route('tools') }}" class="px-3 py-1 rounded-xl nav-link hover-effect text-gray-300 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('tools') ? 'active-state' : '' }}">Tools</a>
                <a href="{{ route('projects') }}" class="px-3 py-1 rounded-xl nav-link hover-effect text-gray-300 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('projects') ? 'active-state' : '' }}">Projects</a>
                <a href="{{ route('contact') }}" class="px-3 py-1 rounded-xl nav-link hover-effect text-gray-300 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('contact') ? 'active-state' : '' }}">Contact</a>
                <a href="{{ route('imprint') }}" class="px-3 py-1 rounded-xl nav-link hover-effect text-gray-300 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('imprint') ? 'active-state' : '' }}">Imprint</a>
            </div>
            <button id="nav-toggle" class="md:hidden text-white text-3xl focus:outline-none">
                <i id="nav-toggle-icon" class="bi bi-list"></i>
            </button>
        </div>
    </nav>

    <div id="nav-menu-mobile" class="nav-menu-mobile fixed top-0 right-0 w-full md:w-1/2 h-full bg-gradient-to-br from-blue-900 to-purple-900 p-8 shadow-xl flex flex-col justify-center items-center md:hidden">
        <button id="close-nav" class="absolute top-4 right-4 text-white text-4xl focus:outline-none">
            <i class="bi bi-x"></i>
        </button>
        <div class="space-y-8 text-3xl text-center">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-xl nav-link hover-effect text-gray-200 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('home') ? 'active-state' : '' }}">Home</a>
            <a href="{{ route('experience') }}" class="block px-3 py-2 rounded-xl nav-link hover-effect text-gray-200 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('experience') ? 'active-state' : '' }}">Experience</a>
            <a href="{{ route('education') }}" class="block px-3 py-2 rounded-xl nav-link hover-effect text-gray-200 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('education') ? 'active-state' : '' }}">Education</a>
            <a href="{{ route('tools') }}" class="block px-3 py-2 rounded-xl nav-link hover-effect text-gray-200 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('tools') ? 'active-state' : '' }}">Tools</a>
            <a href="{{ route('projects') }}" class="block px-3 py-2 rounded-xl nav-link hover-effect text-gray-200 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('projects') ? 'active-state' : '' }}">Projects</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-xl nav-link hover-effect text-gray-200 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('contact') ? 'active-state' : '' }}">Contact</a>
            <a href="{{ route('imprint') }}" class="block px-3 py-2 rounded-xl nav-link hover-effect text-gray-200 hover:text-white transition-colors duration-300 {{ Route::currentRouteNamed('imprint') ? 'active-state' : '' }}">Imprint</a>
        </div>
    </div>

    <main class="min-h-screen pt-5">
        @yield('content')
    </main>

    <footer class="bg-gradient-to-r from-blue-900 to-purple-900 text-gray-300 p-8 text-center mt-12">
        <div class="container mx-auto">
            <p>&copy; {{ date('Y') }} Fabian Ternis. All rights reserved.</p>
            <div class="mt-4 space-x-6">
                <a href="https://github.com/michaelninder" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-300"><i class="bi bi-github text-2xl"></i></a>
            </div>
            <div class="mt-4">
                <a href="{{ route('imprint') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Imprint</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
        const navToggle = document.getElementById('nav-toggle');
        const navToggleIcon = document.getElementById('nav-toggle-icon');
        const navMenu = document.getElementById('nav-menu-mobile');
        const closeNavButton = document.getElementById('close-nav');
        function openMobileMenu() {
            navMenu.classList.add('open');
            document.body.style.overflow = 'hidden';
            navToggleIcon.classList.remove('bi-list');
            navToggleIcon.classList.add('bi-x');
        }
        function closeMobileMenu() {
            navMenu.classList.remove('open');
            document.body.style.overflow = '';
            navToggleIcon.classList.remove('bi-x');
            navToggleIcon.classList.add('bi-list');
        }
        navToggle.addEventListener('click', openMobileMenu);
        closeNavButton.addEventListener('click', closeMobileMenu);
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => { closeMobileMenu(); });
        });
    </script>
    @yield('scripts')
</body>
</html>
