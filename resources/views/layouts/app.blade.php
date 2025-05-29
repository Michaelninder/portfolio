<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="{{ session('theme', 'auto') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fabian Ternis')</title>
	
	<style>
	  /* Preloader overlay */
	  #preloader {
	    position: fixed;
	    inset: 0;
	    z-index: 9999;
	    background: white;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    transition: opacity 0.3s ease;
	  }
	
	  html.dark #preloader {
	    background: #111827; /* Tailwind gray-900 */
	  }
	
	  /* Spinner styling */
	  .spinner {
	    width: 40px;
	    height: 40px;
	    border: 4px solid rgba(0, 0, 0, 0.1);
	    border-left-color: #333;
	    border-radius: 50%;
	    animation: spin 1s linear infinite;
	  }
	
	  html.dark .spinner {
	    border-left-color: #fff;
	    border: 4px solid rgba(255, 255, 255, 0.2);
	  }
	
	  @keyframes spin {
	    to {
	      transform: rotate(360deg);
	    }
	  }
	</style>

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

	<div id="preloader">
	  <div class="spinner"></div>
	</div>
	
    @include('components.announcements')
    @include('components.navbar')

    <main class="p-4">
        @include('components.alert')
        @include('components.errors')
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
	
	<script>
	  window.addEventListener('DOMContentLoaded', () => {
	    const preloader = document.getElementById('preloader');
	    if (preloader) {
	      preloader.remove();
	    }
	  });
	</script>
</body>
</html>
