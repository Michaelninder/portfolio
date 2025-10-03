@extends('layouts.app')
@section('title', 'Tools')

@section('meta_title', 'Fabian Ternis - Development Tools & Technologies')
@section('meta_description', 'Explore the comprehensive toolkit of Fabian Ternis, including expertise in PHP, Laravel, front-end technologies, database management, and more.')
@section('meta_keywords', 'Fabian Ternis tools, PHP, Laravel, HTML, CSS, JavaScript, MySQL, API development, Python, Django, Git, Tailwind CSS, Bootstrap, VS Code, Plesk, Docker')

@section('og_title', 'Fabian Ternis\'s Tech Stack')
@section('og_description', 'A detailed look at the programming languages, frameworks, and tools Fabian Ternis uses to build robust web applications.')
@section('twitter_title', 'Fabian Ternis | My Tech Stack')
@section('twitter_description', 'The essential tools and technologies in my web development arsenal.')

@section('content')
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <h1 class="text-5xl font-extrabold text-center text-blue-300 mb-12" data-aos="fade-up">My Toolbox</h1>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">

            <!-- Tool Item: PHP -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="100">
                <i class="bi bi-filetype-php text-6xl text-purple-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">PHP</h3>
                <p class="text-gray-400 text-sm">Backend Language</p>
            </div>

            <!-- Tool Item: Laravel -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="150">
                <i class="bi bi-stack text-6xl text-red-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Laravel</h3>
                <p class="text-gray-400 text-sm">PHP Framework</p>
            </div>

            <!-- Tool Item: HTML -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="200">
                <i class="bi bi-filetype-html text-6xl text-orange-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">HTML</h3>
                <p class="text-gray-400 text-sm">Markup Language</p>
            </div>

            <!-- Tool Item: CSS -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="250">
                <i class="bi bi-filetype-css text-6xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">CSS</h3>
                <p class="text-gray-400 text-sm">Styling Language</p>
            </div>

            <!-- Tool Item: JavaScript -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="300">
                <i class="bi bi-filetype-js text-6xl text-yellow-300 mb-4"></i>
                <h3 class="text-xl font-bold text-white">JavaScript</h3>
                <p class="text-gray-400 text-sm">Scripting Language</p>
            </div>

            <!-- Tool Item: MySQL -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="350">
                <i class="bi bi-database text-6xl text-indigo-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">MySQL</h3>
                <p class="text-gray-400 text-sm">Database Management</p>
            </div>

            <!-- Tool Item: API Development & Integration -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="400">
                <i class="bi bi-broadcast text-6xl text-pink-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">API Dev & Integration</h3>
                <p class="text-gray-400 text-sm">Connectivity</p>
            </div>

            <!-- Tool Item: Python -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="450">
                <i class="bi bi-filetype-py text-6xl text-blue-300 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Python</h3>
                <p class="text-gray-400 text-sm">Programming Language</p>
            </div>

            <!-- Tool Item: Django -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="500">
                <i class="bi bi-lightning-charge text-6xl text-green-400 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Django</h3>
                <p class="text-gray-400 text-sm">Python Framework</p>
            </div>

            <!-- Tool Item: Git -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="550">
                <i class="bi bi-git text-6xl text-red-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Git</h3>
                <p class="text-gray-400 text-sm">Version Control</p>
            </div>

            <!-- Tool Item: Tailwind CSS -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="600">
                <i class="bi bi-magic text-6xl text-cyan-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Tailwind CSS</h3>
                <p class="text-gray-400 text-sm">CSS Framework</p>
            </div>

            <!-- Tool Item: Bootstrap -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="650">
                <i class="bi bi-bootstrap text-6xl text-violet-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Bootstrap</h3>
                <p class="text-gray-400 text-sm">CSS Framework</p>
            </div>

            <!-- Tool Item: VS Code -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="700">
                <i class="bi bi-code-slash text-6xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">VS Code</h3>
                <p class="text-gray-400 text-sm">Code Editor</p>
            </div>

            <!-- Tool Item: Plesk -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 tool-card" data-aos="zoom-in" data-aos-delay="750">
                <i class="bi bi-cloud-arrow-up text-6xl text-lime-500 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Plesk</h3>
                <p class="text-gray-400 text-sm">Server Panel</p>
            </div>

            <!-- Placeholder Card -->
            <div class="bg-gray-800 p-6 rounded-lg text-center shadow-xl opacity-50 cursor-not-allowed">
                <i class="bi bi-question-circle text-6xl text-gray-500 mb-4"></i>
                <h3 class="text-xl font-bold text-gray-400">More Coming Soon</h3>
                <p class="text-gray-500 text-sm">Continue Learning!</p>
            </div>
        </div>
    </div>
</section>
@endsection