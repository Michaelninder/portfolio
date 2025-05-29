@php
    $locale = app()->getLocale();
    $langFolders = collect(File::directories(resource_path('lang')))
        ->map(fn($path) => basename($path));
@endphp

<nav class="bg-gray-100 dark:bg-gray-800 p-4">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <a href="{{ route('home') }}" class="flex items-center space-x-2 font-bold text-lg">
      <i data-lucide="home" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
      <span>Fabian Ternis</span>
    </a>

    <!-- Hamburger Button (Mobile) -->
    <button id="nav-toggle" aria-label="Toggle menu" class="md:hidden focus:outline-none">
      <svg class="w-7 h-7 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Desktop + Mobile Menu -->
    <div id="nav-menu" class="hidden md:flex md:items-center md:space-x-8 w-full md:w-auto mt-4 md:mt-0">
      <a href="{{ route('about') }}" class="flex items-center space-x-1 hover:underline text-gray-700 dark:text-gray-300 px-3 py-2 rounded-md">
        <i data-lucide="user" class="w-5 h-5"></i>
        <span>{{ __('pages.about.title') }}</span>
      </a>
      <a href="{{ route('contact') }}" class="flex items-center space-x-1 hover:underline text-gray-700 dark:text-gray-300 px-3 py-2 rounded-md">
        <i data-lucide="mail" class="w-5 h-5"></i>
        <span>{{ __('pages.contact.title') }}</span>
      </a>

      {{-- Language Dropdown --}}
      <div class="relative inline-block text-left">
        <button id="lang-button" aria-haspopup="true" aria-expanded="false" aria-label="Language menu" class="flex items-center focus:outline-none px-3 py-2 rounded-md text-gray-700 dark:text-gray-300">
          <img src="{{ asset("img/SetLocale/$locale.png") }}" alt="{{ $locale }} flag" class="w-6 h-4 rounded mr-2">
          <i data-lucide="chevron-down" class="w-4 h-4"></i>
        </button>

        <div id="lang-menu" class="absolute right-0 mt-2 w-24 rounded shadow-lg bg-white dark:bg-gray-700 hidden z-50">
          <ul>
            @foreach ($langFolders as $lang)
              <li>
                <a href="{{ route('lang.set', ['locale' => $lang]) }}"
                  class="flex items-center px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 {{ $locale === $lang ? 'bg-gray-200 dark:bg-gray-600 font-semibold' : '' }}">
                  <img src="{{ asset("img/SetLocale/$lang.png") }}" alt="{{ $lang }} flag" class="w-6 h-4 mr-2 rounded">
                  {{ strtoupper($lang) }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

      {{-- Theme Dropdown --}}
      <div class="relative inline-block text-left ml-2">
        <button id="theme-button" aria-haspopup="true" aria-expanded="false" aria-label="Theme menu" class="flex items-center space-x-1 focus:outline-none px-3 py-2 rounded-md text-gray-700 dark:text-gray-300">
          <span id="theme-icon"></span>
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <div id="theme-menu" class="absolute right-0 mt-2 w-28 rounded shadow-lg bg-white dark:bg-gray-700 hidden z-50">
          <ul>
            @foreach (['auto' => 'monitor', 'light' => 'sun', 'dark' => 'moon'] as $theme => $icon)
              <li>
                <button data-theme="{{ $theme }}" class="flex items-center px-4 py-2 w-full text-left hover:bg-gray-200 dark:hover:bg-gray-600">
                  <i data-lucide="{{ $icon }}" class="w-4 h-4 mr-2"></i> {{ __('menu.theme.' . $theme) }}
                </button>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/lucide@latest"></script>

<script>
  tailwind.config = { darkMode: 'class' };
  lucide.createIcons();

  // Elements
  const navToggle = document.getElementById('nav-toggle');
  const navMenu = document.getElementById('nav-menu');
  const themeBtn = document.getElementById('theme-button');
  const themeMenu = document.getElementById('theme-menu');
  const themeIcon = document.getElementById('theme-icon');
  const langBtn = document.getElementById('lang-button');
  const langMenu = document.getElementById('lang-menu');

  // Mobile menu toggle
  navToggle.addEventListener('click', () => navMenu.classList.toggle('hidden'));

  // Dropdown toggles
  themeBtn.addEventListener('click', () => themeMenu.classList.toggle('hidden'));
  langBtn.addEventListener('click', () => langMenu.classList.toggle('hidden'));

  function applyTheme(theme) {
    document.documentElement.classList.toggle('dark', theme === 'dark');
  }

  function setIcon(theme) {
    const icons = { auto: 'monitor', light: 'sun', dark: 'moon' };
    themeIcon.innerHTML = `<i data-lucide="${icons[theme] || 'monitor'}" class="w-5 h-5"></i>`;
    lucide.createIcons();
  }

  themeMenu.querySelectorAll('button').forEach(btn => {
    btn.addEventListener('click', e => {
      const theme = e.currentTarget.dataset.theme;
      localStorage.setItem('theme', theme);
      applyTheme(theme);
      setIcon(theme);
      themeMenu.classList.add('hidden');
    });
  });

  document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || 'auto';
    applyTheme(savedTheme);
    setIcon(savedTheme);
  });

  document.addEventListener('click', e => {
    if (!themeBtn.contains(e.target) && !themeMenu.contains(e.target)) themeMenu.classList.add('hidden');
    if (!langBtn.contains(e.target) && !langMenu.contains(e.target)) langMenu.classList.add('hidden');
    if (!navToggle.contains(e.target) && !navMenu.contains(e.target) && window.innerWidth < 768) navMenu.classList.add('hidden');
  });
</script>
