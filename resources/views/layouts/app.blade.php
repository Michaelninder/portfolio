<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="{{ session('theme', 'auto') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fabian Ternis')</title>

	<!-- Lucide Icons CDN -->
	<script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind CSS CDN -->
	<script src="https://cdn.tailwindcss.com"></script>

    <!-- Theme Styles -->
    <script>
		function setTheme(theme) {
		    window.setTheme(theme);
		    document.getElementById('theme-menu').classList.add('hidden');
		}
    </script>

    @stack('head')
</head>
<body class="min-h-screen bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    @include('components.navbar')

    <main class="p-4">
        @yield('content')
    </main>

    @include('components.footer')
	
    @stack('scripts')
</body>
</html>
