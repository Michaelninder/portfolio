@extends('layouts.main')

@section('main')
    <div class="mx-auto px-4 md:px-8 lg:px-16 max-w-7xl">
        <h1 class="text-3xl font-bold mb-4">{{ __('pages.home.welcome') }}</h1>
        <p class="mb-8 text-gray-600 dark:text-gray-300">{{ __('pages.home.intro') }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $cards = [
                    ['icon' => 'folder-open', 'title' => 'projects_title', 'desc' => 'projects_desc', 'link' => route('home'), 'label' => 'view_projects'],
                    ['icon' => 'code', 'title' => 'skills_title', 'desc' => 'skills_desc', 'link' => route('about') . '#skills', 'label' => 'view_skills'],
                    ['icon' => 'mail', 'title' => 'contact_title', 'desc' => 'contact_desc', 'link' => route('contact'), 'label' => 'get_in_touch'],
                    ['icon' => 'user', 'title' => 'about_title', 'desc' => 'about_desc', 'link' => route('about'), 'label' => 'view_about'],
                    ['icon' => 'list', 'title' => 'changelog_title', 'desc' => 'changelog_desc', 'link' => route('home'), 'label' => 'view_changelog'],
                    ['icon' => 'globe', 'title' => 'domains_title', 'desc' => 'domains_desc', 'link' => route('home'), 'label' => 'view_domains'],
                ];
            @endphp

            @foreach($cards as $card)
                <div class="group bg-white dark:bg-gray-800 shadow rounded-2xl p-6 transition-transform hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-4 space-x-3">
                        <div class="text-blue-600 dark:text-blue-400 transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                            <i data-lucide="{{ $card['icon'] }}" class="w-6 h-6"></i>
                        </div>
                        <h2 class="text-xl font-semibold">{{ __('pages.home.' . $card['title']) }}</h2>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('pages.home.' . $card['desc']) }}</p>
                    <a href="{{ $card['link'] }}" class="text-blue-600 dark:text-blue-400 hover:underline mt-2 inline-block">
                        {{ __('pages.home.' . $card['label']) }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
