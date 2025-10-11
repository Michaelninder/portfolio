@extends('layouts.app')
@section('title', 'Education')

@section('meta_title', 'Fabian Ternis - Educational Journey & Academic Achievements')
@section('meta_description', 'Explore the academic journey of Fabian Ternis, highlighting his gifted education track and key milestones at Heinrich-Heine-Gymnasium and prior schools.')
@section('meta_keywords', 'Fabian Ternis education, Hochbegabung, gifted education, Heinrich-Heine-Gymnasium, IT studies, academic background')

@section('og_title', 'Fabian Ternis\'s Education Timeline')
@section('og_description', 'A detailed timeline of Fabian Ternis\'s academic path, including his specialized gifted education.')
@section('twitter_title', 'Fabian Ternis | Education')
@section('twitter_description', 'My academic journey and educational highlights.')

@section('content')
<section class="py-20 bg-slate-900 min-h-screen">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="mb-16" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                Educational Journey
            </h1>
            <p class="text-xl text-gray-400 max-w-3xl">
                A detailed timeline of my academic path, highlighting key institutions, programs, and milestones.
            </p>
        </div>

        @php
            $educationItems = [
                [
                    'institution' => 'Heinrich von Gagern Primary School',
                    'location' => 'Monsheim, Germany',
                    'duration' => '2016 – 2019',
                    'description' => 'Attended primary school. Skipped grade 2 due to giftedness (Hochbegabung).',
                    'aos_direction' => 'fade-right',
                    'delay' => '100',
                ],
                [
                    'institution' => 'Gauß-Gymnasium Worms',
                    'location' => 'Worms, Germany',
                    'duration' => '2019 – 2021',
                    'description' => 'Completed grades 5 and 6.',
                    'aos_direction' => 'fade-left',
                    'delay' => '200',
                ],
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

        <div class="text-center mt-20 border-t border-slate-800 pt-16" data-aos="fade-up" data-aos-delay="400">
            <h3 class="text-3xl font-bold text-white mb-4">Questions about my background?</h3>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
                My educational path has been foundational to my development journey. Feel free to reach out if you'd like to discuss my academic experiences further.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg">
                Get in Touch
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
@endsection