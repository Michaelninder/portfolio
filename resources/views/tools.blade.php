@extends('layouts.app')

@section('title', 'Tools')

@section('meta_title', 'Fabian Ternis - Development Tools & Technologies')
@section('meta_description', 'Explore the comprehensive toolkit of Fabian Ternis, including expertise in PHP, Laravel, front-end technologies, database management, and more.')
@section('meta_keywords', 'Fabian Ternis tools, PHP, Laravel, HTML, CSS, JavaScript, MySQL, API development, Python, Git, Tailwind CSS, Bootstrap, VS Code, Plesk')

@section('og_title', 'Fabian Ternis\'s Tech Stack')
@section('og_description', 'A detailed look at the programming languages, frameworks, and tools Fabian Ternis uses to build robust web applications.')
@section('twitter_title', 'Fabian Ternis | My Tech Stack')
@section('twitter_description', 'The essential tools and technologies in my web development arsenal.')

@section('content')
<section class="py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="mb-16" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">My Toolbox</h1>
            <p class="text-xl text-gray-400 max-w-3xl">A collection of programming languages, frameworks, and tools I leverage to build robust and scalable web applications.</p>
        </div>

        @php
            $tools = [
                ['name' => 'PHP', 'icon' => 'filetype-php', 'color' => 'purple-500', 'category' => 'Backend Language', 'delay' => '100'],
                ['name' => 'Laravel', 'icon' => 'stack', 'color' => 'red-500', 'category' => 'PHP Framework', 'delay' => '150'],
                ['name' => 'HTML', 'icon' => 'filetype-html', 'color' => 'orange-500', 'category' => 'Markup Language', 'delay' => '200'],
                ['name' => 'CSS', 'icon' => 'filetype-css', 'color' => 'blue-500', 'category' => 'Styling Language', 'delay' => '250'],
                ['name' => 'JavaScript', 'icon' => 'filetype-js', 'color' => 'yellow-300', 'category' => 'Scripting Language', 'delay' => '300'],
                ['name' => 'MySQL', 'icon' => 'database', 'color' => 'indigo-500', 'category' => 'Database Management', 'delay' => '350'],
                ['name' => 'API Dev & Integration', 'icon' => 'broadcast', 'color' => 'pink-500', 'category' => 'Connectivity', 'delay' => '400'],
                ['name' => 'Python', 'icon' => 'filetype-py', 'color' => 'blue-300', 'category' => 'Programming Language', 'delay' => '450'],
                ['name' => 'Git', 'icon' => 'git', 'color' => 'red-500', 'category' => 'Version Control', 'delay' => '500'],
                ['name' => 'Tailwind CSS', 'icon' => 'magic', 'color' => 'cyan-500', 'category' => 'CSS Framework', 'delay' => '550'],
                ['name' => 'Bootstrap', 'icon' => 'bootstrap', 'color' => 'violet-500', 'category' => 'CSS Framework', 'delay' => '600', 'muted' => true],
                ['name' => 'VS Code', 'icon' => 'code-slash', 'color' => 'blue-500', 'category' => 'Code Editor', 'delay' => '650'],
                ['name' => 'Plesk', 'icon' => 'cloud-arrow-up', 'color' => 'lime-500', 'category' => 'Server Panel', 'delay' => '700', 'muted' => true],
                ['name' => 'Linux', 'icon' => 'ubuntu', 'color' => 'orange-600', 'category' => 'Operating System', 'delay' => '750'],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach ($tools as $tool)
                @php $muted = $tool['muted'] ?? false; @endphp
                <div class="group bg-slate-800 rounded-lg p-6 text-center border flex flex-col items-center justify-center {{ $muted ? 'opacity-50 grayscale cursor-not-allowed border-slate-700' : 'border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-xl' }}" data-aos="zoom-in" data-aos-delay="{{ $tool['delay'] }}">
                    <div class="w-16 h-16 mb-4 rounded-xl flex items-center justify-center {{ $muted ? 'bg-slate-700' : 'bg-slate-900/50' }}">
                        <i class="bi bi-{{ $tool['icon'] }} text-4xl {{ $muted ? 'text-slate-500' : 'text-' . $tool['color'] }} {{ $muted ? '' : 'transition-transform duration-300 group-hover:scale-110' }}"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">{{ $tool['name'] }}</h3>
                    <p class="{{ $muted ? 'text-gray-500' : 'text-gray-400' }} text-sm">{{ $tool['category'] }}</p>
                </div>
            @endforeach

            <div class="group bg-slate-800 rounded-lg p-6 text-center border border-slate-700 opacity-40 cursor-not-allowed flex flex-col items-center justify-center" data-aos="zoom-in" data-aos-delay="800">
                <div class="w-16 h-16 mb-4 rounded-xl flex items-center justify-center bg-slate-900/50">
                    <i class="bi bi-question-circle text-4xl text-slate-500"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-400 mb-1">Coming Soon</h3>
                <p class="text-gray-500 text-sm">Always Learning!</p>
            </div>
        </div>

        <div class="mt-20 text-center border-t border-slate-800 pt-16" data-aos="fade-up" data-aos-delay="900">
            <h3 class="text-3xl font-bold text-white mb-4">Have a tool in mind?</h3>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto">My passion for learning drives me to constantly expand my toolkit. If you have an interesting technology you'd like to discuss, feel free to reach out.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg">Get in Touch <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</section>
@endsection