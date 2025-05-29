@php
    $locale = app()->getLocale();
    $langFolders = collect(File::directories(resource_path('lang')))
        ->map(fn($path) => basename($path));
@endphp

<nav class="bg-gray-100 dark:bg-gray-800 p-4 flex justify-between items-center">
    <div>
        <a href="{{ route('home') }}" class="font-bold text-lg">Fabian Ternis</a>
    </div>

    <div class="flex items-center space-x-6">
        <a href="{{ route('about') }}" class="hover:underline">{{ __('pages.about.title') }}</a>
        <a href="{{ route('contact') }}" class="hover:underline">{{ __('pages.contact.title') }}</a>
        <a href="{{ route('imprint') }}" class="hover:underline">{{ __('legal.imprint.title') }}</a>

        {{-- Language Dropdown --}}
        <div class="relative inline-block text-left">
            <button id="lang-button" class="focus:outline-none" aria-haspopup="true" aria-expanded="false" aria-label="Language menu">
                <img src="{{ asset("img/SetLocale/$locale.png") }}" class="w-5 h-5 rounded" alt="{{ $locale }} flag">
            </button>

            <div id="lang-menu" class="absolute right-0 mt-2 w-28 rounded shadow-lg bg-white dark:bg-gray-700 hidden z-50">
                <ul>
                    @foreach ($langFolders as $lang)
                        <li>
                            <a href="{{ route('lang.set', ['locale' => $lang]) }}"
                               class="w-full flex items-center px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 {{ $locale === $lang ? 'bg-gray-200 dark:bg-gray-600 font-semibold' : '' }}">
                                <img src="{{ asset("img/SetLocale/$lang.png") }}" class="w-4 h-4 mr-2 rounded" alt="{{ $lang }} flag">
                                {{ strtoupper($lang) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Theme Dropdown --}}
        <div class="relative inline-block text-left">
            <button id="theme-button" class="flex items-center space-x-1 focus:outline-none" aria-haspopup="true" aria-expanded="false" aria-label="Theme menu">
                <span id="theme-icon"></span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div id="theme-menu" class="absolute right-0 mt-2 w-32 rounded shadow-lg bg-white dark:bg-gray-700 hidden z-50">
                <ul>
                    <li>
                        <button class="w-full text-left px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center" data-theme="auto">
                            <i data-lucide="monitor" class="w-4 h-4 mr-2"></i> Auto
                        </button>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center" data-theme="light">
                            <i data-lucide="sun" class="w-4 h-4 mr-2"></i> Light
                        </button>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center" data-theme="dark">
                            <i data-lucide="moon" class="w-4 h-4 mr-2"></i> Dark
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdn.tailwindcss.com"></script>

<script>
    tailwind.config = {
        darkMode: 'class',
    }

    lucide.createIcons();

    const themeBtn = document.getElementById('theme-button');
    const themeMenu = document.getElementById('theme-menu');
    const themeIcon = document.getElementById('theme-icon');

    const langBtn = document.getElementById('lang-button');
    const langMenu = document.getElementById('lang-menu');

    // Toggle dropdowns
    themeBtn.addEventListener('click', () => themeMenu.classList.toggle('hidden'));
    langBtn.addEventListener('click', () => langMenu.classList.toggle('hidden'));

    function applyTheme(theme) {
        const html = document.documentElement;
        if (theme === 'dark') {
            html.classList.add('dark');
        } else if (theme === 'light') {
            html.classList.remove('dark');
        } else {
            html.classList.remove('dark');
        }
    }

    function setIcon(theme) {
        let svg = '';
        if (theme === 'light') svg = '<i data-lucide="sun" class="w-5 h-5"></i>';
        else if (theme === 'dark') svg = '<i data-lucide="moon" class="w-5 h-5"></i>';
        else svg = '<i data-lucide="monitor" class="w-5 h-5"></i>';
        themeIcon.innerHTML = svg;
        lucide.createIcons();
    }

    themeMenu.querySelectorAll('button').forEach(btn => {
        btn.addEventListener('click', e => {
            const theme = e.currentTarget.getAttribute('data-theme');
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

    // Close both dropdowns on outside click
    document.addEventListener('click', (e) => {
        if (!themeBtn.contains(e.target) && !themeMenu.contains(e.target)) {
            themeMenu.classList.add('hidden');
        }
        if (!langBtn.contains(e.target) && !langMenu.contains(e.target)) {
            langMenu.classList.add('hidden');
        }
    });
</script>
