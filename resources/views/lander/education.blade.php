@php
    $educationItems = [
        [
            'institution' => 'Heinrich-Heine-Gymnasium Kaiserslautern',
            'location' => 'Kaiserslautern, Germany',
            'duration' => '2021 – 2025',
            'description' => 'Transferred into the gifted education track ("Hochbegabtenklasse"). Repeated grade 6 for alignment, then completed grades 7 and 8. Skipped grade 9 due to academic advancement, completed grade 10, and promoted to grade 11 in 2025.',
            'aos_direction' => 'fade-right',
            'delay' => '300',
        ],
    ];
@endphp

<div class="relative space-y-12">
    <!-- Timeline Line -->
    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full border-l border-slate-700"></div>

    @foreach ($educationItems as $index => $item)
        @php
            $isEven = ($index % 2 == 0);
        @endphp
        <div class="flex flex-col items-center md:flex-row {{ $isEven ? 'md:justify-start' : 'md:justify-end' }}"
            data-aos="{{ $item['aos_direction'] }}" data-aos-delay="{{ $item['delay'] }}">

            <!-- Timeline Dot (always centered on mobile, on line on desktop) -->
            <div class="z-10 flex items-center justify-center bg-blue-600 w-8 h-8 rounded-full mb-4 md:mb-0 md:absolute md:left-1/2 md:transform md:-translate-x-1/2 text-white text-sm font-semibold">
                {{ $index + 1 }}
            </div>

            <!-- Content Card -->
            <div class="group bg-slate-800 p-8 rounded-lg shadow-md border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-lg w-full max-w-xl flex flex-col
                {{ $isEven ? 'md:mr-auto md:pr-12' : 'md:ml-auto md:pl-12' }}
                ">
                <h3 class="font-bold text-white text-2xl mb-1">
                    {{ $item['institution'] }}
                </h3>
                <p class="text-lg text-blue-400 mb-2">
                    {{ $item['location'] }}
                </p>
                <p class="text-base text-gray-400 mb-4">
                    {{ $item['duration'] }}
                </p>
                <p class="text-base text-gray-300 leading-relaxed">
                    {{ $item['description'] }}
                </p>
            </div>
        </div>
    @endforeach
</div>
<div class="text-center mt-12">
    <a href="{{ route('education') }}"
        class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg">
        View Full Education
        <i class="bi bi-arrow-right"></i>
    </a>
</div>
