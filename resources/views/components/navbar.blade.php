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

        {{-- Language Dropdown --}}
        <div class="relative inline-block text-left">
            <button id="lang-button" aria-haspopup="true" aria-expanded="false" aria-label="Language menu" class="flex items-center space-x-1 focus:outline-none">
                <i data-lucide="globe" class="w-5 h-5 text-gray-700 dark:text-gray-300"></i>
                <img src="{{ asset("img/SetLocale/$locale.png") }}" alt="{{ $locale }} flag" class="w-7 h-5 rounded">
            </button>

            <div id="lang-menu" class="absolute right-0 mt-2 w-28 rounded shadow-lg bg-white dark:bg-gray-700 hidden z-50">
                <ul>
                    @foreach ($langFolders as $lang)
                        <li>
                            <a href="{{ route('lang.set', ['locale' => $lang]) }}"
                               class="flex items-center px-4 py-2 w-full hover:bg-gray-200 dark:hover:bg-gray-600 {{ $locale === $lang ? 'bg-gray-200 dark:bg-gray-600 font-semibold' : '' }}">
                                <img src="{{ asset("img/SetLocale/$lang.png") }}" alt="{{ $lang }} flag" class="w-7 h-5 mr-2 rounded">
                                <span class="flex-grow">{{ strtoupper($lang) }}</span>
                                @if ($locale === $lang)
                                    <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Theme Dropdown --}}
        <div class="relative inline-block text-left">
            <button id="theme-button" aria-haspopup="true" aria-expanded="false" aria-label="Theme menu" class="flex items-center space-x-1 focus:outline-none">
                <span id="theme-icon"></span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div id="theme-menu" class="absolute right-0 mt-2 w-25 rounded shadow-lg bg-white dark:bg-gray-700 hidden z-50">
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
</nav>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/lucide@latest"></script>

<script>
    tailwind.config = { darkMode: 'class' };
    lucide.createIcons();

    const themeBtn = document.getElementById('theme-button');
    const themeMenu = document.getElementById('theme-menu');
    const themeIcon = document.getElementById('theme-icon');
    const langBtn = document.getElementById('lang-button');
    const langMenu = document.getElementById('lang-menu');

    themeBtn.addEventListener('click', () => themeMenu.classList.toggle('hidden'));
    langBtn.addEventListener('click', () => langMenu.classList.toggle('hidden'));

    function applyTheme(theme) {
        const html = document.documentElement;
        html.classList.toggle('dark', theme === 'dark');
    }

    function setIcon(theme) {
        const icons = { light: 'sun', dark: 'moon', auto: 'monitor' };
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
        lucide.createIcons();
    });

    document.addEventListener('click', e => {
        if (!themeBtn.contains(e.target) && !themeMenu.contains(e.target)) themeMenu.classList.add('hidden');
        if (!langBtn.contains(e.target) && !langMenu.contains(e.target)) langMenu.classList.add('hidden');
    });
</script>
