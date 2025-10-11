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
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-extrabold text-center text-purple-400 mb-12" data-aos="fade-up">My Key Projects &
                Works</h1>

            @php
                $projects = [
                    [
                        'name' => 'MTEX.dev',
                        'image' => 'mtex.png',
                        'tech_stack' => 'Laravel, Custom Tools, Custom API',
                        'description' => 'A platform offering minimal, powerful, and free tools for software planning and development. MTEX focuses on reducing friction in early development from intuitive database modeling to intelligent dev utilities.',
                        'url' => 'https://mtex.dev',
                        'color_class' => 'text-pink-400',
                        'delay' => '100',
                    ],
                    [
                        'name' => 'getmy.name',
                        'image' => 'getmy_name.png',
                        'tech_stack' => 'API, Laravel, Portfolio',
                        'description' => 'A free and open-source API by MTEX.dev to fetch and display your personal portfolio data, perfect for dynamic "about me" sections or custom portfolio sites.',
                        'url' => 'https://getmy.name',
                        'color_class' => 'text-orange-400',
                        'delay' => '200',
                    ],
                    [
                        'name' => 'gimy.site',
                        'image' => 'gimy-site.png',
                        'tech_stack' => 'Free Website Host, Laravel',
                        'description' => 'Gimy.site is a rapid-deployment platform by MTEX.dev for static websites. Write HTML, CSS, and JS for multiple pages and publish your sites instantly.',
                        'url' => 'https://gimy.site',
                        'color_class' => 'text-violet-400',
                        'delay' => '300',
                    ],
                    [
                        'name' => 'XP Systems',
                        'image' => 'xpsystems.png',
                        'tech_stack' => 'Laravel, Hosting Solutions',
                        'description' => 'The official launch of XPsystems.eu, building open-source Laravel tools, custom hosting solutions, and robust backend services.',
                        'url' => 'https://xpsystems.eu',
                        'color_class' => 'text-indigo-400',
                        'delay' => '400',
                    ],
                    [
                        'name' => 'EuropeHost.eu',
                        'image' => 'europehost.png',
                        'tech_stack' => 'Hosting Platform, Backend',
                        'description' => "Part of XP Systems' offerings, providing custom hosting solutions with a focus on robust backend infrastructure.",
                        'url' => 'https://europehost.eu',
                        'color_class' => 'text-purple-400',
                        'delay' => '500',
                    ],
                    [
                        'name' => 'XP-Host.de',
                        'image' => 'xphost.png',
                        'tech_stack' => 'Linux, Pterodactyl (Laravel-based)',
                        'description' => 'Launched a free Minecraft hosting platform built on Pterodactyl, showcasing experience with game server management and custom web interfaces.',
                        'url' => 'https://gamepanel.xp-host.de',
                        'url_text' => 'Visit Gamepanel',
                        'color_class' => 'text-green-400',
                        'delay' => '600',
                    ],
                    [
                        'name' => 'yourlink.app',
                        'image' => 'yourlink.png',
                        'tech_stack' => 'Link Management, SaaS, Analytics',
                        'description' => 'A simple, privacy-friendly link management platform with short links, statistics, and custom branding for personal or business use.',
                        'url' => 'https://yourlink.app',
                        'color_class' => 'text-blue-400',
                        'delay' => '700',
                    ],
                    [
                        'name' => 'dsc.pics',
                        'image' => 'dscpics.png',
                        'tech_stack' => 'Image Hosting, Direct Links',
                        'description' => 'A fast, no-nonsense image hosting platform focused on Discord and forum-friendly sharing with direct link support.',
                        'url' => 'https://dsc.pics',
                        'color_class' => 'text-pink-400',
                        'delay' => '800',
                    ],
                    [
                        'name' => 'anlink.eu',
                        'image' => 'anlink.png',
                        'tech_stack' => 'Shortlink Platform, Analytics',
                        'description' => 'A minimalistic and efficient shortlink service with optional analytics, designed for personal use and privacy-focused sharing.',
                        'url' => 'https://anlink.eu',
                        'color_class' => 'text-green-400',
                        'delay' => '900',
                    ],
                    [
                        'name' => 'MoodFood',
                        'image' => 'moodfood.png',
                        'tech_stack' => 'Healthy Recipes Platform',
                        'description' => 'A platform dedicated to healthy recipes, focusing on nutrition and well-being through curated meal ideas and cooking tips.',
                        'url' => 'https://moodfood.hhgkl.de',
                        'color_class' => 'text-blue-300',
                        'delay' => '1000',
                    ],
                    [
                        'name' => 'Kaufenhof.de',
                        'image' => 'kaufenhof.png',
                        'tech_stack' => 'Onlineshop',
                        'description' => 'An online shop system with cash payment and in-person pickup for students of a school.',
                        'url' => 'https://kaufenhof.de',
                        'color_class' => 'text-purple-500',
                        'delay' => '1100',
                    ],
                    [
                        'name' => 'FahraApp (Carpooling)',
                        'image' => null,
                        'tech_stack' => 'PHP, MySQL, Bootstrap, APIs',
                        'description' => 'Collaborated on a school-based carpooling web app, integrating routing/geocoding APIs. A multi-year project showcasing teamwork and full-stack development.',
                        'url' => null,
                        'url_text' => 'School Project - Details available on request',
                        'color_class' => 'text-yellow-300',
                        'delay' => '1200',
                    ],
                    [
                        'name' => 'Django & Python Web App',
                        'image' => null,
                        'tech_stack' => 'Python, Django',
                        'description' => 'My first real project with Python and the Django framework, exploring backend capabilities beyond PHP for diverse development.',
                        'url' => null,
                        'url_text' => 'Code available on request',
                        'color_class' => 'text-cyan-300',
                        'delay' => '1300',
                    ],
                    [
                        'name' => 'MadGrower.de',
                        'image' => null,
                        'tech_stack' => 'MinecraftServer, Forum, Support',
                        'description' => 'Joined the MadGrower.de team as a Web Developer, contributing to custom PHP development and seamless server integrations.',
                        'url' => null,
                        'url_text' => 'Site might be private or retired.',
                        'color_class' => 'text-orange-300',
                        'delay' => '1400',
                    ],
                    [
                        'name' => 'XP-Craft.de',
                        'image' => null,
                        'tech_stack' => 'Minecraft Server, Custom PHP',
                        'description' => 'Developed a custom PHP website for my Minecraft server after migrating from GitHub Pages, enhancing the user experience.',
                        'url' => null,
                        'url_text' => 'Site might be private or retired.',
                        'color_class' => 'text-lime-300',
                        'delay' => '1500',
                    ],
                    // Removed URLK.app as per previous comment
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($projects as $project)
                    <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                        data-aos="fade-up" data-aos-delay="{{ $project['delay'] }}">
                        @if ($project['image'])
                            <img src="{{ asset('img/projects/' . $project['image']) }}" alt="{{ $project['name'] }}"
                                class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        @endif
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $project['name'] }}</h3>
                            <p class="text-md {{ str_replace('text-', 'text-', $project['color_class']) }}-300 mb-4">
                                {{ $project['tech_stack'] }}</p>
                            <p class="text-gray-300 text-base mb-4">
                                {{ $project['description'] }}
                            </p>
                            @if ($project['url'])
                                <a href="{{ $project['url'] }}" target="_blank"
                                    class="{{ $project['color_class'] }} hover:{{ str_replace('text-', 'text-', $project['color_class']) }}-300 font-semibold flex items-center">
                                    {{ $project['url_text'] ?? 'Visit Website' }} <i class="bi bi-box-arrow-up-right ml-2"></i>
                                </a>
                            @else
                                <span class="text-gray-500 italic text-sm">{{ $project['url_text'] }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection