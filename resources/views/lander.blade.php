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
<section class="relative h-screen flex items-center justify-center text-center overflow-hidden bg-slate-900">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/img/hero-bg.png');">
        <div class="absolute inset-0 bg-black opacity-70"></div>
    </div>
    <div class="relative z-10 p-6 max-w-5xl mx-auto">
        <h1 class="text-6xl md:text-7xl font-extrabold leading-tight mb-6 text-blue-400" data-aos="fade-up">
            Fabian Ternis
        </h1>
        <p class="text-3xl md:text-4xl text-gray-200 mb-8 font-light type-effect" data-text="Laravel & Backend Developer" data-aos="fade-up" data-aos-delay="300">
            <!-- Text will be typed by JS -->
        </p>
        <a href="{{ route('projects') }}"
           class="inline-flex items-center gap-2 px-10 py-4 bg-blue-600 text-white font-semibold text-xl rounded-lg shadow-lg hover:bg-blue-700 transition-colors duration-300" data-aos="fade-up" data-aos-delay="600">
            View My Work
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<section class="py-20 bg-slate-900 text-center">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-4xl font-bold text-white mb-8" data-aos="fade-up">Hello, I'm Fabian!</h2>
        <p class="text-xl text-gray-400 leading-relaxed max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            I'm a passionate Laravel & Backend Developer, specializing in creating robust web applications, optimizing databases, and building powerful software tools. I love turning complex ideas into simple, high-performance digital solutions.
        </p>
        <div class="mt-10 flex justify-center space-x-6" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('experience') }}"
               class="inline-flex items-center gap-2 px-6 py-3 bg-slate-800 text-blue-400 font-medium rounded-lg hover:bg-slate-700 hover:text-blue-300 transition-colors duration-300">
                <i class="bi bi-briefcase"></i>My Journey
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-300">
                <i class="bi bi-envelope"></i>Get In Touch
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
            setTimeout(typeWriter, 125);
        }
    });
</script>
@endsection