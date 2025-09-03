@extends('layouts.app')

@section('title', __('pages.home.title'))

@section('content')
    <div class="mx-auto px-4 md:px-8 lg:px-16">
        @yield('main')
    </div>
@endsection
