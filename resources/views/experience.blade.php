@extends('layouts.app')
@section('title', 'Experience')

@section('meta_title', 'Fabian Ternis - Professional Experience & Projects')
@section('meta_description', 'Detailed overview of Fabian Ternis\'s professional experience in web development, focusing on Laravel, PHP, and impactful projects like XP Systems and MTEX.dev.')
@section('meta_keywords', 'Fabian Ternis experience, Laravel developer jobs, PHP projects, Web development career, XP Systems, MTEX.dev, MadGrower.de, Pterodactyl hosting')

@section('og_title', 'Fabian Ternis\'s Professional Experience')
@section('og_description', 'Explore Fabian Ternis\'s journey in web development, from early projects to owning XP Systems and contributing to key platforms.')
@section('twitter_title', 'Fabian Ternis | My Experience')
@section('twitter_description', 'A timeline of my professional work and projects in backend and Laravel development.')

@section('content')
<section class="py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="mb-16" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                Professional Journey
            </h1>
            <p class="text-xl text-gray-400 max-w-3xl">
                A structured overview of my professional growth, key roles, and impactful projects that define my expertise in web development.
            </p>
        </div>

        @php
            $experiences = [
                [
                    'title' => 'Owner & Lead Developer',
                    'company' => 'XP Systems & EuropeHost',
                    'duration' => 'January 2025 – Present',
                    'description' => [
                        'Spearheaded product strategy, team leadership, and deployment of innovative custom software and hosting solutions.',
                        'Developed scalable Laravel web applications, including robust REST APIs and custom modules utilizing UUID-based database architectures.',
                        'Designed and optimized MySQL databases, ensuring high performance, reliability, and data integrity across all platforms.',
                        'Initiated and released multiple open-source Laravel projects, fostering community contribution and demonstrating best practices.',
                        'Launched MTEX.dev, a platform dedicated to providing minimal, powerful, and free tools for streamlined software planning and development.',
                        'Established xpsystems.eu to formally house open-source Laravel tools, specialized hosting services, and comprehensive backend solutions.',
                    ],
                    'delay' => '100',
                ],
                [
                    'title' => 'Web Developer',
                    'company' => 'MadGrower.de',
                    'duration' => 'May 2024 – Present',
                    'description' => [
                        'Contributed to the MadGrower.de development team, focusing on bespoke PHP solutions and seamless server integrations.',
                    ],
                    'delay' => '200',
                ],
                [
                    'title' => 'Founder & Developer',
                    'company' => 'XP-Host.de (Minecraft Hosting Platform)',
                    'duration' => 'October 2024',
                    'description' => [
                        'Engineered and launched a free Minecraft hosting platform, leveraging the Laravel-based Pterodactyl panel for advanced game server management.',
                    ],
                    'delay' => '300',
                ],
                [
                    'title' => 'Co-Developer & Maintainer',
                    'company' => 'HHGkl.de/FahraApp (Carpooling WebApp)',
                    'duration' => '2023 – 2025',
                    'description' => [
                        'Collaborated on the development of a school-centric carpooling web application, utilizing PHP, MySQL, Bootstrap, Bootstrap Icons, and FontAwesome for a robust user experience.',
                        'Integrated advanced third-party APIs including GraphHopper\'s Routing API, Maps.co geocoding API, and OpenStreetMap for comprehensive navigation and location services.',
                        'Managed and maintained the platform over several years, a project proudly supported by the Telekom Foundation\'s Junior Engineer Academy (JIA) program.',
                    ],
                    'delay' => '400',
                ],
                [
                    'title' => 'Early Web Development Endeavors',
                    'company' => 'Self-Initiated Projects',
                    'duration' => '2023 – 2024',
                    'description' => [
                        '**2024:** Established <span class="text-blue-300">xp-craft.de</span> and developed a customized PHP website to enhance the user experience of my Minecraft server.',
                        '**Early 2024:** Designed and implemented the XP-Craft Minecraft server website on <span class="text-blue-300">GitHub Pages</span>, later transitioning to a dedicated custom domain for professional hosting.',
                        '**2023:** Developed my foundational web project during an Informatik-Unterricht course, marking the inception of my profound interest in web development.',
                    ],
                    'delay' => '500',
                ],
            ];
        @endphp

        <div class="space-y-8">
            @foreach ($experiences as $experience)
                <div class="group bg-slate-800 p-8 rounded-lg shadow-md border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-lg flex flex-col"
                    data-aos="fade-up" data-aos-delay="{{ $experience['delay'] }}">
                    <h2 class="text-3xl font-bold text-white mb-1">
                        {{ $experience['title'] }}
                    </h2>
                    <p class="text-xl text-blue-400 mb-3">
                        {{ $experience['company'] }}
                    </p>
                    <p class="text-base text-gray-400 mb-6">
                        {{ $experience['duration'] }}
                    </p>
                    <ul class="list-disc list-inside text-lg text-gray-300 space-y-2">
                        @foreach ($experience['description'] as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-20 border-t border-slate-800 pt-16" data-aos="fade-up" data-aos-delay="600">
            <h3 class="text-3xl font-bold text-white mb-4">Ready to explore my work?</h3>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
                These experiences have provided a robust foundation and shaped my expertise in web development. Explore my diverse portfolio to see how these skills translate into tangible results.
            </p>
            <a href="{{ route('projects') }}"
               class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg">
                View My Projects
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
@endsection