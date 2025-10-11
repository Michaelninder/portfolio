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
    {{-- Hero Section --}}
    <section class="relative py-24 bg-gradient-to-br from-gray-900 via-purple-900/20 to-gray-900 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse delay-1000"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-4xl mx-auto" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                    Featured <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400">Projects</span>
                </h1>
                <p class="text-xl text-gray-300 leading-relaxed">
                    A curated collection of web development projects showcasing expertise in Laravel, backend systems, and modern web technologies.
                </p>
            </div>
        </div>
    </section>

    {{-- Projects Grid Section --}}
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            @php
                $projects = [
                    [
                        'name' => 'MTEX.dev',
                        'image' => 'mtex.png',
                        'tech_stack' => 'Laravel, Custom Tools, Custom API',
                        'description' => 'A platform offering minimal, powerful, and free tools for software planning and development. MTEX focuses on reducing friction in early development from intuitive database modeling to intelligent dev utilities.',
                        'url' => 'https://mtex.dev',
                        'badge' => 'Platform',
                        'color_class' => 'from-pink-500 to-rose-500',
                        'delay' => '100',
                    ],
                    [
                        'name' => 'getmy.name',
                        'image' => 'getmy_name.png',
                        'tech_stack' => 'API, Laravel, Portfolio',
                        'description' => 'A free and open-source API by MTEX.dev to fetch and display your personal portfolio data, perfect for dynamic "about me" sections or custom portfolio sites.',
                        'url' => 'https://getmy.name',
                        'badge' => 'API',
                        'color_class' => 'from-orange-500 to-amber-500',
                        'delay' => '200',
                    ],
                    [
                        'name' => 'gimy.site',
                        'image' => 'gimy-site.png',
                        'tech_stack' => 'Free Website Host, Laravel',
                        'description' => 'Gimy.site is a rapid-deployment platform by MTEX.dev for static websites. Write HTML, CSS, and JS for multiple pages and publish your sites instantly.',
                        'url' => 'https://gimy.site',
                        'badge' => 'Hosting',
                        'color_class' => 'from-violet-500 to-purple-500',
                        'delay' => '300',
                    ],
                    [
                        'name' => 'XP Systems',
                        'image' => 'xpsystems.png',
                        'tech_stack' => 'Laravel, Hosting Solutions',
                        'description' => 'The official launch of XPsystems.eu, building open-source Laravel tools, custom hosting solutions, and robust backend services.',
                        'url' => 'https://xpsystems.eu',
                        'badge' => 'Enterprise',
                        'color_class' => 'from-indigo-500 to-blue-500',
                        'delay' => '400',
                    ],
                    [
                        'name' => 'EuropeHost.eu',
                        'image' => 'europehost.png',
                        'tech_stack' => 'Hosting Platform, Backend',
                        'description' => "Part of XP Systems' offerings, providing custom hosting solutions with a focus on robust backend infrastructure.",
                        'url' => 'https://europehost.eu',
                        'badge' => 'Hosting',
                        'color_class' => 'from-purple-500 to-indigo-500',
                        'delay' => '500',
                    ],
                    [
                        'name' => 'XP-Host.de',
                        'image' => 'xphost.png',
                        'tech_stack' => 'Linux, Pterodactyl (Laravel-based)',
                        'description' => 'Launched a free Minecraft hosting platform built on Pterodactyl, showcasing experience with game server management and custom web interfaces.',
                        'url' => 'https://gamepanel.xp-host.de',
                        'url_text' => 'Visit Gamepanel',
                        'badge' => 'Gaming',
                        'color_class' => 'from-green-500 to-emerald-500',
                        'delay' => '600',
                    ],
                    [
                        'name' => 'yourlink.app',
                        'image' => 'yourlink.png',
                        'tech_stack' => 'Link Management, SaaS, Analytics',
                        'description' => 'A simple, privacy-friendly link management platform with short links, statistics, and custom branding for personal or business use.',
                        'url' => 'https://yourlink.app',
                        'badge' => 'SaaS',
                        'color_class' => 'from-blue-500 to-cyan-500',
                        'delay' => '700',
                    ],
                    [
                        'name' => 'dsc.pics',
                        'image' => 'dscpics.png',
                        'tech_stack' => 'Image Hosting, Direct Links',
                        'description' => 'A fast, no-nonsense image hosting platform focused on Discord and forum-friendly sharing with direct link support.',
                        'url' => 'https://dsc.pics',
                        'badge' => 'Media',
                        'color_class' => 'from-pink-500 to-fuchsia-500',
                        'delay' => '800',
                    ],
                    [
                        'name' => 'anlink.eu',
                        'image' => 'anlink.png',
                        'tech_stack' => 'Shortlink Platform, Analytics',
                        'description' => 'A minimalistic and efficient shortlink service with optional analytics, designed for personal use and privacy-focused sharing.',
                        'url' => 'https://anlink.eu',
                        'badge' => 'Utilities',
                        'color_class' => 'from-green-500 to-teal-500',
                        'delay' => '900',
                    ],
                    [
                        'name' => 'MoodFood',
                        'image' => 'moodfood.png',
                        'tech_stack' => 'Healthy Recipes Platform',
                        'description' => 'A platform dedicated to healthy recipes, focusing on nutrition and well-being through curated meal ideas and cooking tips.',
                        'url' => 'https://moodfood.hhgkl.de',
                        'badge' => 'Lifestyle',
                        'color_class' => 'from-blue-400 to-sky-500',
                        'delay' => '1000',
                    ],
                    [
                        'name' => 'Kaufenhof.de',
                        'image' => 'kaufenhof.png',
                        'tech_stack' => 'Onlineshop',
                        'description' => 'An online shop system with cash payment and in-person pickup for students of a school.',
                        'url' => 'https://kaufenhof.de',
                        'badge' => 'E-commerce',
                        'color_class' => 'from-purple-500 to-violet-500',
                        'delay' => '1100',
                    ],
                    [
                        'name' => 'FahraApp (Carpooling)',
                        'image' => null,
                        'tech_stack' => 'PHP, MySQL, Bootstrap, APIs',
                        'description' => 'Collaborated on a school-based carpooling web app, integrating routing/geocoding APIs. A multi-year project showcasing teamwork and full-stack development.',
                        'url' => null,
                        'url_text' => 'School Project',
                        'badge' => 'Education',
                        'color_class' => 'from-yellow-500 to-orange-400',
                        'delay' => '1200',
                    ],
                    [
                        'name' => 'Django & Python Web App',
                        'image' => null,
                        'tech_stack' => 'Python, Django',
                        'description' => 'My first real project with Python and the Django framework, exploring backend capabilities beyond PHP for diverse development.',
                        'url' => null,
                        'url_text' => 'Private Repository',
                        'badge' => 'Learning',
                        'color_class' => 'from-cyan-500 to-blue-400',
                        'delay' => '1300',
                    ],
                    [
                        'name' => 'MadGrower.de',
                        'image' => null,
                        'tech_stack' => 'MinecraftServer, Forum, Support',
                        'description' => 'Joined the MadGrower.de team as a Web Developer, contributing to custom PHP development and seamless server integrations.',
                        'url' => null,
                        'url_text' => 'Archived',
                        'badge' => 'Gaming',
                        'color_class' => 'from-orange-500 to-red-400',
                        'delay' => '1400',
                    ],
                    [
                        'name' => 'XP-Craft.de',
                        'image' => null,
                        'tech_stack' => 'Minecraft Server, Custom PHP',
                        'description' => 'Developed a custom PHP website for my Minecraft server after migrating from GitHub Pages, enhancing the user experience.',
                        'url' => null,
                        'url_text' => 'Archived',
                        'badge' => 'Gaming',
                        'color_class' => 'from-lime-500 to-green-400',
                        'delay' => '1500',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    <article class="group bg-gradient-to-br from-gray-800/50 to-gray-800/30 backdrop-blur-sm rounded-2xl overflow-hidden border border-gray-700/50 hover:border-purple-500/50 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-500/10 hover:-translate-y-2"
                        data-aos="fade-up" data-aos-delay="{{ $project['delay'] }}">
                        
                        {{-- Image or Gradient Placeholder --}}
                        <div class="relative h-48 overflow-hidden bg-gradient-to-br {{ $project['color_class'] }}">
                            @if ($project['image'])
                                <img src="{{ asset('img/projects/' . $project['image']) }}" 
                                     alt="{{ $project['name'] }}"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                            @else
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="bi bi-code-square text-6xl text-white/20"></i>
                                </div>
                            @endif
                            
                            {{-- Badge --}}
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 text-xs font-semibold bg-white/90 backdrop-blur-sm text-gray-900 rounded-full">
                                    {{ $project['badge'] }}
                                </span>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="p-6 space-y-4">
                            <div class="space-y-2">
                                <h3 class="text-2xl font-bold text-white group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r {{ $project['color_class'] }} transition-all duration-300">
                                    {{ $project['name'] }}
                                </h3>
                                <p class="text-sm font-medium text-gray-400">
                                    {{ $project['tech_stack'] }}
                                </p>
                            </div>

                            <p class="text-gray-300 text-sm leading-relaxed line-clamp-3">
                                {{ $project['description'] }}
                            </p>

                            {{-- Action Button/Link --}}
                            <div class="pt-4 border-t border-gray-700/50">
                                @if ($project['url'])
                                    <a href="{{ $project['url'] }}" 
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="inline-flex items-center gap-2 text-sm font-semibold text-transparent bg-clip-text bg-gradient-to-r {{ $project['color_class'] }} hover:gap-3 transition-all duration-300 group/link">
                                        {{ $project['url_text'] ?? 'Visit Website' }}
                                        <i class="bi bi-arrow-right text-purple-400 group-hover/link:translate-x-1 transition-transform"></i>
                                    </a>
                                @else
                                    <span class="inline-flex items-center gap-2 text-sm text-gray-500 italic">
                                        <i class="bi bi-lock-fill text-xs"></i>
                                        {{ $project['url_text'] }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Call to Action Section --}}
    <section class="py-20 bg-gradient-to-br from-purple-900/20 to-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-white mb-6">
                    Interested in Collaborating?
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Let's work together to bring your next project to life with cutting-edge web technologies.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold rounded-full hover:shadow-2xl hover:shadow-purple-500/50 hover:scale-105 transition-all duration-300">
                    Get in Touch
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection