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
    ];
@endphp

<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
    @foreach ($tools as $tool)
        <div class="group bg-slate-800 rounded-lg p-6 text-center border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-xl flex flex-col items-center justify-center"
            data-aos="zoom-in" data-aos-delay="{{ $tool['delay'] }}">
            <i class="bi bi-{{ $tool['icon'] }} text-6xl text-{{ $tool['color'] }} mb-4 transition-transform duration-300 group-hover:scale-110"></i>
            <h3 class="text-xl font-bold text-white mb-1">
                {{ $tool['name'] }}
            </h3>
            <p class="text-gray-400 text-sm">
                {{ $tool['category'] }}
            </p>
        </div>
    @endforeach

    <div class="group bg-slate-800 rounded-lg p-6 text-center border border-slate-700 opacity-70 cursor-not-allowed flex flex-col items-center justify-center"
        data-aos="zoom-in" data-aos-delay="900">
        <i class="bi bi-question-circle text-6xl text-slate-500 mb-4"></i>
        <h3 class="text-xl font-bold text-gray-400 mb-1">
            And many more...
        </h3>
        <a href="{{ route('tools') }}"
            class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-300">
            <i class="bi bi-arrow-right"></i>
            See all tools
        </a>
    </div>
</div>
