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

<div class="text-center mt-12">
    <a href="{{ route('experience') }}"
        class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg">
        View Full Experience
        <i class="bi bi-arrow-right"></i>
    </a>
</div>
