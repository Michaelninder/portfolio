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
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl font-extrabold text-center text-sky-400 mb-12" data-aos="fade-up">My Professional Journey & Projects</h1>

        <div class="space-y-12">
            <!-- Experience Item: Owner – XP Systems & EuropeHost -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-xl border-t-4 border-indigo-500 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-3xl font-bold text-white mb-2">Owner & Lead Developer</h2>
                <p class="text-xl text-indigo-300 mb-4">XP Systems & EuropeHost</p>
                <p class="text-md text-gray-400 mb-6">2025 – Present</p>
                <ul class="list-disc list-inside text-lg text-gray-300 space-y-2">
                    <li>Managing product strategy, team development, and deployment of custom software and hosting platforms.</li>
                    <li>Specializing in scalable Laravel web apps: REST APIs, custom modules, and UUID-based databases.</li>
                    <li>Focused on database design and optimization (MySQL), ensuring fast, reliable data access and structural integrity.</li>
                    <li>Developing and releasing multiple open-source Laravel projects.</li>
                    <li>Launched MTEX.dev, a platform offering minimal, powerful, and free tools for software planning and development.</li>
                    <li>Registered xpsystems.eu and officially began building open-source Laravel tools, hosting solutions, and backend services (Jan 15, 2025).</li>
                </ul>
            </div>

            <!-- Experience Item: Web Developer – MadGrower.de -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-xl border-t-4 border-purple-500 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-3xl font-bold text-white mb-2">Web Developer</h2>
                <p class="text-xl text-purple-300 mb-4">MadGrower.de</p>
                <p class="text-md text-gray-400 mb-6">May 2024 – Present</p>
                <ul class="list-disc list-inside text-lg text-gray-300 space-y-2">
                    <li>Joined the MadGrower.de team, focusing on custom PHP development and server integration.</li>
                </ul>
            </div>

            <!-- Experience Item: XP-Host.de – Minecraft Hosting Platform -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-xl border-t-4 border-green-500 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-3xl font-bold text-white mb-2">Founder & Developer</h2>
                <p class="text-xl text-green-300 mb-4">XP-Host.de (Minecraft Hosting Platform)</p>
                <p class="text-md text-gray-400 mb-6">Oct 2024</p>
                <ul class="list-disc list-inside text-lg text-gray-300 space-y-2">
                    <li>Launched a Pterodactyl (Laravel)-based free Minecraft hosting platform.</li>
                </ul>
            </div>

            <!-- Experience Item: HHGkl.de/FahraApp – Carpooling WebApp -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-xl border-t-4 border-yellow-500 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="400">
                <h2 class="text-3xl font-bold text-white mb-2">Co-Developer & Maintainer</h2>
                <p class="text-xl text-yellow-300 mb-4">HHGkl.de/FahraApp (Carpooling WebApp)</p>
                <p class="text-md text-gray-400 mb-6">2023 – 2025</p>
                <ul class="list-disc list-inside text-lg text-gray-300 space-y-2">
                    <li>Collaborated on a school-based carpooling web app using PHP, MySQL, Bootstrap, Bootstrap Icons, and FontAwesome.</li>
                    <li>Integrated GraphHopper's Routing API, Maps.co geocoding API, and OpenStreetMap.</li>
                    <li>Hosted and maintained the platform over multiple years as part of the Telekom Foundation-funded JIA (Junior Engineer Academy).</li>
                </ul>
            </div>

            <!-- Experience Item: Early Web Projects (Grouped) -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-xl border-t-4 border-red-500 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="500">
                <h2 class="text-3xl font-bold text-white mb-2">Early Web Development Endeavors</h2>
                <p class="text-xl text-red-300 mb-4">Self-Initiated Projects</p>
                <p class="text-md text-gray-400 mb-6">2023 – 2024</p>
                <ul class="list-disc list-inside text-lg text-gray-300 space-y-2">
                    <li>**2024:** Registered <span class="text-orange-300">xp-craft.de</span> and developed a custom PHP website for my Minecraft server.</li>
                    <li>**Early 2024:** Built the XP-Craft Minecraft server website on <span class="text-orange-300">GitHub Pages</span>, later deploying to a custom domain.</li>
                    <li>**2023:** Created my first web project in school during Informatik-Unterricht, sparking my interest in web development.</li>
                </ul>
            </div>

        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="600">
            <a href="{{ route('projects') }}" class="inline-block bg-gradient-to-r from-green-500 to-teal-500 text-white text-lg px-8 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                See My Projects <i class="bi bi-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endsection