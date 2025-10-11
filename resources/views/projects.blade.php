@extends('layouts.app')
@section('title', 'Projects')

@section('meta_title', 'Fabian Ternis - Featured Web Development Projects')
@section('meta_description', 'Showcasing key web development projects by Fabian Ternis, including XP Systems, MTEX.dev, hosting platforms, and more.')
@section('meta_keywords', 'Fabian Ternis projects, Laravel portfolio, Backend development examples, XP Systems, xpsystems.eu, MTEX.dev, EuropeHost, XP-Host.de, yourlink.app, dsc.pics, anlink.eu, gimy.site, FahraApp, MadGrower.de, URLK.app, getmy.name')

@section('og_title', 'Fabian Ternis\'s Project Portfolio')
@section('og_description', 'A collection of impactful web development and software projects developed by Fabian Ternis.')
@section('twitter_title', 'Fabian Ternis | My Projects')
@section('twitter_description', 'Dive into my portfolio of web development and software engineering projects.')

@section('content')
    <section class="py-20 bg-slate-900 min-h-screen">
        <div class="container mx-auto px-6 max-w-7xl">
            <!-- Header Section -->
            <div class="mb-16" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                    Projects
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl">
                    A collection of web applications, platforms, and tools showcasing expertise in backend development, API design, and scalable system architecture.
                </p>
            </div>

            @php
                $projects = [
                    [
                        'name' => 'MTEX.dev',
                        'image' => 'mtex.png',
                        'tech_stack' => 'Laravel, Custom Tools, Custom API',
                        'description' => 'A platform offering minimal, powerful, and free tools for software planning and development. MTEX focuses on reducing friction in early development from intuitive database modeling to intelligent dev utilities.',
                        'url' => 'https://mtex.dev',
                        'accent_color' => 'blue',
                        'delay' => '100',
                    ],
                    [
                        'name' => 'getmy.name',
                        'image' => 'getmy_name.png',
                        'tech_stack' => 'API, Laravel, Portfolio',
                        'description' => 'A free and open-source API by MTEX.dev to fetch and display your personal portfolio data, perfect for dynamic "about me" sections or custom portfolio sites.',
                        'url' => 'https://getmy.name',
                        'accent_color' => 'blue',
                        'delay' => '200',
                    ],
                    [
                        'name' => 'gimy.site',
                        'image' => 'gimy-site.png',
                        'tech_stack' => 'Free Website Host, Laravel',
                        'description' => 'Gimy.site is a rapid-deployment platform by MTEX.dev for static websites. Write HTML, CSS, and JS for multiple pages and publish your sites instantly.',
                        'url' => 'https://gimy.site',
                        'accent_color' => 'blue',
                        'delay' => '300',
                    ],
                    [
                        'name' => 'XP Systems',
                        'image' => 'xpsystems.png',
                        'tech_stack' => 'Laravel, Hosting Solutions',
                        'description' => 'The official launch of XPsystems.eu, building open-source Laravel tools, custom hosting solutions, and robust backend services.',
                        'url' => 'https://xpsystems.eu',
                        'accent_color' => 'blue',
                        'delay' => '400',
                    ],
                    [
                        'name' => 'EuropeHost.eu',
                        'image' => 'europehost.png',
                        'tech_stack' => 'Hosting Platform, Backend',
                        'description' => "Part of XP Systems' offerings, providing custom hosting solutions with a focus on robust backend infrastructure.",
                        'url' => 'https://europehost.eu',
                        'accent_color' => 'blue',
                        'delay' => '500',
                    ],
                    [
                        'name' => 'XP-Host.de',
                        'image' => 'xphost.png',
                        'tech_stack' => 'Linux, Pterodactyl (Laravel-based)',
                        'description' => 'Launched a free Minecraft hosting platform built on Pterodactyl, showcasing experience with game server management and custom web interfaces.',
                        'url' => 'https://gamepanel.xp-host.de',
                        'url_text' => 'Visit Gamepanel',
                        'accent_color' => 'blue',
                        'delay' => '600',
                    ],
                    [
                        'name' => 'yourlink.app',
                        'image' => 'yourlink.png',
                        'tech_stack' => 'Link Management, SaaS, Analytics',
                        'description' => 'A simple, privacy-friendly link management platform with short links, statistics, and custom branding for personal or business use.',
                        'url' => 'https://yourlink.app',
                        'accent_color' => 'blue',
                        'delay' => '700',
                    ],
                    [
                        'name' => 'dsc.pics',
                        'image' => 'dscpics.png',
                        'tech_stack' => 'Image Hosting, Direct Links',
                        'description' => 'A fast, no-nonsense image hosting platform focused on Discord and forum-friendly sharing with direct link support.',
                        'url' => 'https://dsc.pics',
                        'accent_color' => 'blue',
                        'delay' => '800',
                    ],
                    [
                        'name' => 'anlink.eu',
                        'image' => 'anlink.png',
                        'tech_stack' => 'Shortlink Platform, Analytics',
                        'description' => 'A minimalistic and efficient shortlink service with optional analytics, designed for personal use and privacy-focused sharing.',
                        'url' => 'https://anlink.eu',
                        'accent_color' => 'blue',
                        'delay' => '900',
                    ],
                    [
                        'name' => 'MoodFood',
                        'image' => 'moodfood.png',
                        'tech_stack' => 'Healthy Recipes Platform',
                        'description' => 'A platform dedicated to healthy recipes, focusing on nutrition and well-being through curated meal ideas and cooking tips.',
                        'url' => 'https://moodfood.hhgkl.de',
                        'accent_color' => 'blue',
                        'delay' => '1000',
                    ],
                    [
                        'name' => 'Kaufenhof.de',
                        'image' => 'kaufenhof.png',
                        'tech_stack' => 'Onlineshop',
                        'description' => 'An online shop system with cash payment and in-person pickup for students of a school.',
                        'url' => 'https://kaufenhof.de',
                        'accent_color' => 'blue',
                        'delay' => '1100',
                    ],
                    [
                        'name' => 'FahraApp (Carpooling)',
                        'image' => null,
                        'tech_stack' => 'PHP, MySQL, Bootstrap, APIs',
                        'description' => 'Collaborated on a school-based carpooling web app, integrating routing/geocoding APIs. A multi-year project showcasing teamwork and full-stack development.',
                        'url' => null,
                        'url_text' => 'School Project - Details available on request',
                        'accent_color' => 'blue',
                        'delay' => '1200',
                    ],
                    [
                        'name' => 'Django & Python Web App',
                        'image' => null,
                        'tech_stack' => 'Python, Django',
                        'description' => 'My first real project with Python and the Django framework, exploring backend capabilities beyond PHP for diverse development.',
                        'url' => null,
                        'url_text' => 'Code available on request',
                        'accent_color' => 'blue',
                        'delay' => '1300',
                    ],
                    [
                        'name' => 'MadGrower.de',
                        'image' => null,
                        'tech_stack' => 'MinecraftServer, Forum, Support',
                        'description' => 'Joined the MadGrower.de team as a Web Developer, contributing to custom PHP development and seamless server integrations.',
                        'url' => null,
                        'url_text' => 'Site might be private or retired.',
                        'accent_color' => 'blue',
                        'delay' => '1400',
                    ],
                    [
                        'name' => 'XP-Craft.de',
                        'image' => null,
                        'tech_stack' => 'Minecraft Server, Custom PHP',
                        'description' => 'Developed a custom PHP website for my Minecraft server after migrating from GitHub Pages, enhancing the user experience.',
                        'url' => null,
                        'url_text' => 'Site might be private or retired.',
                        'accent_color' => 'blue',
                        'delay' => '1500',
                    ],
                ];
            @endphp

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($projects as $project)
                    <div class="group bg-slate-800 rounded-lg overflow-hidden border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-xl flex flex-col"
                        data-aos="fade-up" data-aos-delay="{{ $project['delay'] }}">
                        
                        @if ($project['image'])
                            <div class="relative h-48 overflow-hidden bg-slate-700">
                                <img src="{{ asset('img/projects/' . $project['image']) }}" 
                                     alt="{{ $project['name'] }}"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            </div>
                        @else
                            <div class="h-48 bg-slate-700 flex items-center justify-center">
                                <i class="bi bi-code-slash text-5xl text-slate-500"></i>
                            </div>
                        @endif
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <!-- Project Name -->
                            <h3 class="text-xl font-bold text-white mb-2">
                                {{ $project['name'] }}
                            </h3>
                            
                            <!-- Tech Stack -->
                            <p class="text-sm text-blue-400 mb-4 font-medium">
                                {{ $project['tech_stack'] }}
                            </p>
                            
                            <!-- Description -->
                            <p class="text-gray-400 text-sm leading-relaxed mb-6 flex-grow">
                                {{ $project['description'] }}
                            </p>
                            
                            <!-- Link/Button -->
                            <div class="pt-4 border-t border-slate-700">
                                @if ($project['url'])
                                    <a href="{{ $project['url'] }}" 
                                       target="_blank"
                                       class="inline-flex items-center gap-2 text-sm font-semibold text-gray-300 hover:text-blue-400 transition-colors duration-200">
                                        {{ $project['url_text'] ?? 'Visit Website' }}
                                        <i class="bi bi-arrow-right transition-transform duration-200 group-hover:translate-x-1"></i>
                                    </a>
                                @else
                                    <span class="text-xs text-gray-500 italic">
                                        {{ $project['url_text'] }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Contact Section -->
            <div class="mt-20 text-center border-t border-slate-800 pt-16" data-aos="fade-up" data-aos-delay="1600">
                <h3 class="text-3xl font-bold text-white mb-4">Interested in Working Together?</h3>
                <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
                    I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg">
                    Get in Touch
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection