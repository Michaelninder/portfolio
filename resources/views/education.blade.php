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

<section class="py-20 bg-gray-900">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-center text-blue-400 mb-12" data-aos="fade-up">My
            Educational Journey</h1>

        <div class="relative">
            <!-- Timeline Line -->
            <div
                class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-gray-700 border-opacity-20">
            </div>

            <!-- Education Item 1 -->
            <div class="mb-12 flex flex-col items-center md:flex-row justify-center md:items-stretch"
                data-aos="fade-right">
                <!-- Timeline Dot for Mobile (Order 1 on mobile) -->
                <div
                    class="order-1 md:order-none z-20 flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-500 shadow-xl w-10 h-10 rounded-full mb-4 md:mb-0 md:absolute md:left-1/2 md:transform md:-translate-x-1/2">
                    <span class="font-semibold text-white">1</span>
                </div>
                <!-- Content for Mobile (Order 2 on mobile) -->
                <div class="order-2 md:order-none md:w-1/2 md:pr-10 flex justify-end">
                    <div
                        class="bg-gray-800 rounded-lg shadow-xl px-6 py-4 w-full max-w-md border-t-4 md:border-t-0 md:border-r-4 border-blue-500">
                        <h3 class="mb-2 font-bold text-white text-xl">Heinrich von Gagern Primary School</h3>
                        <p class="text-md text-blue-300">Monsheim, Germany</p>
                        <p class="text-sm text-gray-400 mb-2">2016 – 2019</p>
                        <p class="text-base text-gray-300 leading-relaxed">
                            Attended primary school. Skipped grade 2 due to giftedness (Hochbegabung).
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2 hidden md:block"></div>
            </div>

            <!-- Education Item 2 -->
            <div class="mb-12 flex flex-col items-center md:flex-row-reverse justify-center md:items-stretch"
                data-aos="fade-left">
                <!-- Timeline Dot for Mobile (Order 1 on mobile) -->
                <div
                    class="order-1 md:order-none z-20 flex items-center justify-center bg-gradient-to-r from-purple-500 to-fuchsia-500 shadow-xl w-10 h-10 rounded-full mb-4 md:mb-0 md:absolute md:left-1/2 md:transform md:-translate-x-1/2">
                    <span class="font-semibold text-white">2</span>
                </div>
                <!-- Content for Mobile (Order 2 on mobile) -->
                <div class="order-2 md:order-none md:w-1/2 md:pl-10 flex justify-start">
                    <div
                        class="bg-gray-800 rounded-lg shadow-xl px-6 py-4 w-full max-w-md border-t-4 md:border-t-0 md:border-l-4 border-purple-500 md:text-left">
                        <h3 class="mb-2 font-bold text-white text-xl">Gauß-Gymnasium Worms</h3>
                        <p class="text-md text-purple-300">Worms, Germany</p>
                        <p class="text-sm text-gray-400 mb-2">2019 – 2021</p>
                        <p class="text-base text-gray-300 leading-relaxed">
                            Completed grades 5 and 6.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2 hidden md:block"></div>
            </div>

            <!-- Education Item 3 -->
            <div class="mb-12 flex flex-col items-center md:flex-row justify-center md:items-stretch"
                data-aos="fade-right">
                <!-- Timeline Dot for Mobile (Order 1 on mobile) -->
                <div
                    class="order-1 md:order-none z-20 flex items-center justify-center bg-gradient-to-r from-red-500 to-orange-500 shadow-xl w-10 h-10 rounded-full mb-4 md:mb-0 md:absolute md:left-1/2 md:transform md:-translate-x-1/2">
                    <span class="font-semibold text-white">3</span>
                </div>
                <!-- Content for Mobile (Order 2 on mobile) -->
                <div class="order-2 md:order-none md:w-1/2 md:pr-10 flex justify-end">
                    <div
                        class="bg-gray-800 rounded-lg shadow-xl px-6 py-4 w-full max-w-md border-t-4 md:border-t-0 md:border-r-4 border-red-500">
                        <h3 class="mb-2 font-bold text-white text-xl">Heinrich-Heine-Gymnasium Kaiserslautern</h3>
                        <p class="text-md text-red-300">Kaiserslautern, Germany</p>
                        <p class="text-sm text-gray-400 mb-2">2021 – 2025</p>
                        <p class="text-base text-gray-300 leading-relaxed">
                            Transferred into the gifted education track ("Hochbegabtenklasse"). Repeated grade 6 for
                            alignment, then completed grades 7 and 8. Skipped grade 9 due to academic advancement,
                            completed grade 10, and promoted to grade 11 in 2025.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2 hidden md:block"></div>
            </div>
        </div>
    </div>
</section>
@endsection