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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('img/projects/mtex.png') }}" alt="MTEX.dev"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">MTEX.dev</h3>
                    <p class="text-md text-pink-300 mb-4">Laravel, Custom Tools, Custom API</p>
                    <p class="text-gray-300 text-base mb-4">
                        A platform offering minimal, powerful, and free tools for software planning and development.
                        MTEX focuses on reducing friction in early development from intuitive database modeling to
                        intelligent dev utilities.
                    </p>
                    <a href="https://mtex.dev" target="_blank"
                        class="text-pink-400 hover:text-pink-300 font-semibold flex items-center">
                        Visit Platform <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('img/projects/getmy_name.png') }}" alt="getmy.name"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">getmy.name</h3>
                    <p class="text-md text-orange-300 mb-4">API, Laravel, Portfolio</p>
                    <p class="text-gray-300 text-base mb-4">
                        A free and open-source API by MTEX.dev to fetch and display your personal portfolio data,
                        perfect for dynamic "about me" sections or custom portfolio sites.
                    </p>
                    <a href="https://getmy.name" target="_blank"
                        class="text-orange-400 hover:text-orange-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('img/projects/gimy-site.png') }}" alt="gimy.site"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">gimy.site</h3>
                    <p class="text-md text-violet-500 mb-4">Free Website Host, Laravel</p>
                    <p class="text-gray-300 text-base mb-4">
                        Gimy.site is a rapid-deployment platform by MTEX.dev for static websites. Write HTML, CSS, and
                        JS for multiple pages and publish your sites instantly.
                    </p>
                    <a href="https://gimy.site" target="_blank"
                        class="text-violet-400 hover:text-violet-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="400">
                <img src="{{ asset('img/projects/xpsystems.png') }}" alt="XP Systems"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">XP Systems</h3>
                    <p class="text-md text-indigo-300 mb-4">Laravel, Hosting Solutions</p>
                    <p class="text-gray-300 text-base mb-4">
                        The official launch of XPsystems.eu, building open-source Laravel tools, custom hosting
                        solutions, and robust backend services.
                    </p>
                    <a href="https://xpsystems.eu" target="_blank"
                        class="text-indigo-400 hover:text-indigo-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('img/projects/europehost.png') }}" alt="EuropeHost.eu"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">EuropeHost.eu</h3>
                    <p class="text-md text-purple-300 mb-4">Hosting Platform, Backend</p>
                    <p class="text-gray-300 text-base mb-4">
                        Part of XP Systems' offerings, providing custom hosting solutions with a focus on robust backend
                        infrastructure.
                    </p>
                    <a href="https://europehost.eu" target="_blank"
                        class="text-purple-400 hover:text-purple-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="600">
                <img src="{{ asset('img/projects/xphost.png') }}" alt="XP-Host.de"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">XP-Host.de</h3>
                    <p class="text-md text-green-300 mb-4">Linux, Pterodactyl (Laravel-based)</p>
                    <p class="text-gray-300 text-base mb-4">
                        Launched a free Minecraft hosting platform built on Pterodactyl, showcasing experience with game
                        server management and custom web interfaces.
                    </p>
                    <a href="https://gamepanel.xp-host.de" target="_blank"
                        class="text-green-400 hover:text-green-300 font-semibold flex items-center">
                        Visit Gamepanel <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="700">
                <img src="{{ asset('img/projects/yourlink.png') }}" alt="yourlink.app"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">yourlink.app</h3>
                    <p class="text-md text-blue-300 mb-4">Link Management, SaaS, Analytics</p>
                    <p class="text-gray-300 text-base mb-4">
                        A simple, privacy-friendly link management platform with short links, statistics, and custom
                        branding for personal or business use.
                    </p>
                    <a href="https://yourlink.app" target="_blank"
                        class="text-blue-400 hover:text-blue-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="800">
                <img src="{{ asset('img/projects/dscpics.png') }}" alt="dsc.pics"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">dsc.pics</h3>
                    <p class="text-md text-pink-300 mb-4">Image Hosting, Direct Links</p>
                    <p class="text-gray-300 text-base mb-4">
                        A fast, no-nonsense image hosting platform focused on Discord and forum-friendly sharing with
                        direct link support.
                    </p>
                    <a href="https://dsc.pics" target="_blank"
                        class="text-pink-400 hover:text-pink-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="900">
                <img src="{{ asset('img/projects/anlink.png') }}" alt="anlink.eu"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">anlink.eu</h3>
                    <p class="text-md text-green-300 mb-4">Shortlink Platform, Analytics</p>
                    <p class="text-gray-300 text-base mb-4">
                        A minimalistic and efficient shortlink service with optional analytics, designed for personal
                        use and privacy-focused sharing.
                    </p>
                    <a href="https://anlink.eu" target="_blank"
                        class="text-green-400 hover:text-green-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="1000">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">FahraApp (Carpooling)</h3>
                    <p class="text-md text-yellow-300 mb-4">PHP, MySQL, Bootstrap, APIs</p>
                    <p class="text-gray-300 text-base mb-4">
                        Collaborated on a school-based carpooling web app, integrating routing/geocoding APIs. A
                        multi-year project showcasing teamwork and full-stack development.
                    </p>
                    <span class="text-gray-500 italic text-sm">School Project - Details available on request</span>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="1100">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">Django & Python Web App</h3>
                    <p class="text-md text-cyan-300 mb-4">Python, Django</p>
                    <p class="text-gray-300 text-base mb-4">
                        My first real project with Python and the Django framework, exploring backend capabilities
                        beyond PHP for diverse development.
                    </p>
                    <span class="text-gray-500 italic text-sm">Code available on request</span>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="1200">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">MadGrower.de</h3>
                    <p class="text-md text-orange-300 mb-4">MinecraftServer, Forum, Support</p>
                    <p class="text-gray-300 text-base mb-4">
                        Joined the MadGrower.de team as a Web Developer, contributing to custom PHP development and
                        seamless server integrations.
                    </p>
                    <!--a href="https://madgrower.de" target="_blank"
                        class="text-orange-400 hover:text-orange-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a-->
                    <span class="text-gray-500 italic text-sm">Site might be private or retired.</span>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="1300">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">XP-Craft.de</h3>
                    <p class="text-md text-lime-300 mb-4">Minecraft Server, Custom PHP</p>
                    <p class="text-gray-300 text-base mb-4">
                        Developed a custom PHP website for my Minecraft server after migrating from GitHub Pages,
                        enhancing the user experience.
                    </p>
                    <span class="text-gray-500 italic text-sm">Site might be private or retired.</span>
                </div>
            </div>

            {{--
            <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
                data-aos="fade-up" data-aos-delay="1400">
                <img src="{{ asset('img/projects/urlk.png') }}" alt="URLK.app"
                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-white mb-2">URLK.app</h3>
                    <p class="text-md text-red-300 mb-4">Link Shortener, URL Management</p>
                    <p class="text-gray-300 text-base mb-4">
                        A focused URL shortener for quick and efficient link management, offering a clean interface and
                        reliable redirects.
                    </p>
                    <a href="https://urlk.app" target="_blank"
                        class="text-red-400 hover:text-red-300 font-semibold flex items-center">
                        Visit Website <i class="bi bi-box-arrow-up-right ml-2"></i>
                    </a>
                </div>
            </div>
            --}}
        </div>
    </div>
</section>
@endsection