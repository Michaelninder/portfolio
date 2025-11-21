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
    ];
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    @foreach ($projects as $project)
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transform hover:scale-105 transition-all duration-300 project-card"
            data-aos="fade-up" data-aos-delay="{{ $project['delay'] }}">
            <img src="{{ asset('img/projects/' . $project['image']) }}" alt="{{ $project['name'] }}"
                class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-white mb-2">{{ $project['name'] }}</h3>
                <p class="text-md text-pink-300 mb-4">{{ $project['tech_stack'] }}</p>
                <p class="text-gray-300 text-base mb-4">
                    {{ $project['description'] }}
                </p>
                <a href="{{ $project['url'] }}" target="_blank"
                    class="text-pink-400 hover:text-pink-300 font-semibold flex items-center">
                    Visit Platform <i class="bi bi-box-arrow-up-right ml-2"></i>
                </a>
            </div>
        </div>
    @endforeach
</div>
<div class="text-center mt-12">
    <a href="{{ route('projects') }}"
        class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg">
        View All Projects
        <i class="bi bi-arrow-right"></i>
    </a>
</div>
