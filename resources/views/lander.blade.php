@extends('layouts.app')
@section('title', 'Home')

@section('meta_title', 'Fabian Ternis - Laravel Developer & Software Engineer')
@section('meta_description', 'Discover the portfolio of Fabian Ternis, a passionate Laravel Developer specializing in robust web applications, database optimization, and open-source tools.')
@section('meta_keywords', 'Fabian Ternis, Laravel Developer, PHP, Web Development, Software Engineer, Backend, MySQL, michaelninder, XP Systems, MTEX.dev')

@section('og_title', 'Fabian Ternis - Official Portfolio')
@section('og_description', 'Leading Laravel and Backend Development projects with a focus on clean code and scalable solutions.')
@section('twitter_title', 'Fabian Ternis | Laravel Developer')
@section('twitter_description', 'My professional portfolio showcasing projects in Laravel, backend development, and open-source contributions.')
@section('content')
<section class="relative h-screen flex items-center justify-center text-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/img/hero-bg.png');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
    </div>
    <div class="relative z-10 p-6 max-w-4xl mx-auto">
        <h1 class="text-6xl md:text-7xl font-extrabold leading-tight mb-6 text-indigo-400" data-aos="fade-up">
            Fabian Ternis
        </h1>
        <p class="text-3xl md:text-4xl text-gray-200 mb-8 font-light type-effect" data-text="Laravel Developer" data-aos="fade-up" data-aos-delay="300">
            <!-- Text will be typed by JS -->
        </p>
        <a href="{{ route('projects') }}" class="inline-block bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-xl px-10 py-4 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
            View My Work
        </a>
    </div>
</section>

<section class="py-20 bg-gray-900 text-center">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-fuchsia-400 mb-8" data-aos="fade-up">Hello, I'm Fabian!</h2>
        <p class="text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            I'm a passionate Laravel & Backend Developer, specializing in creating robust web applications, optimizing databases, and building powerful software tools. I love turning complex ideas into simple, high-performance digital solutions.
        </p>
        <div class="mt-10 flex justify-center space-x-6" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('experience') }}" class="text-indigo-400 hover:text-indigo-300 transition-colors duration-300 text-lg">
                <i class="bi bi-briefcase mr-2"></i>My Journey
            </a>
            <a href="{{ route('contact') }}" class="text-purple-400 hover:text-purple-300 transition-colors duration-300 text-lg">
                <i class="bi bi-envelope mr-2"></i>Get In Touch
            </a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const typeEffectElement = document.querySelector('.type-effect');
        if (typeEffectElement) {
            const textToType = typeEffectElement.dataset.text;
            let i = 0;
            const speed = 100;

            function typeWriter() {
                if (i < textToType.length) {
                    typeEffectElement.textContent += textToType.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                } else {
                }
            }
            typeEffectElement.textContent = '';
            setTimeout(typeWriter, 1250);
        }
    });
</script>
@endsection