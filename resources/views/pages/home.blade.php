@extends('layouts.main')

@section('main')
    <div class="mx-auto px-4 md:px-8 lg:px-16 max-w-7xl">
        <h1 class="text-3xl font-bold mb-4">{{ __('pages.home.welcome') }}</h1>
        <p class="mb-8 text-gray-600 dark:text-gray-300">{{ __('pages.home.intro') }}</p>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Projects Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-6 transition-transform hover:scale-105 hover:shadow-lg">
                <h2 class="text-xl font-semibold mb-2">{{ __('pages.home.projects_title') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('pages.home.projects_desc') }}</p>
                <a href="{{ route('home') }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 inline-block">
                    {{ __('pages.home.view_projects') }}
                </a>
            </div>

            <!-- Skills Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-6 transition-transform hover:scale-105 hover:shadow-lg">
                <h2 class="text-xl font-semibold mb-2">{{ __('pages.home.skills_title') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('pages.home.skills_desc') }}</p>
                <a href="{{ route('about') }}#skills" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 inline-block">
                    {{ __('pages.home.view_skills') }}
                </a>
            </div>

            <!-- Contact Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-6 transition-transform hover:scale-105 hover:shadow-lg">
                <h2 class="text-xl font-semibold mb-2">{{ __('pages.home.contact_title') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('pages.home.contact_desc') }}</p>
                <a href="{{ route('contact') }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 inline-block">
                    {{ __('pages.home.get_in_touch') }}
                </a>
            </div>

            <!-- About Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-6 transition-transform hover:scale-105 hover:shadow-lg">
                <h2 class="text-xl font-semibold mb-2">{{ __('pages.home.about_title') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('pages.home.about_desc') }}</p>
                <a href="{{ route('about') }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 inline-block">
                    {{ __('pages.home.view_about') }}
                </a>
            </div>

            <!-- Changelog Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-6 transition-transform hover:scale-105 hover:shadow-lg">
                <h2 class="text-xl font-semibold mb-2">{{ __('pages.home.changelog_title') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('pages.home.changelog_desc') }}</p>
                <a href="{{ route('home') }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 inline-block">
                    {{ __('pages.home.view_changelog') }}
                </a>
            </div>

            <!-- Domains Card -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-6 transition-transform hover:scale-105 hover:shadow-lg">
                <h2 class="text-xl font-semibold mb-2">{{ __('pages.home.domains_title') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('pages.home.domains_desc') }}</p>
                <a href="{{ route('home') }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 inline-block">
                    {{ __('pages.home.view_domains') }}
                </a>
            </div>
        </div>
    </div>
@endsection
