@extends('layouts.app')
@section('title', 'Contact')

@section('meta_title', 'Contact Fabian Ternis - Laravel & Backend Developer')
@section('meta_description', 'Get in touch with Fabian Ternis for collaborations, project inquiries, or general questions. Connect via email or social media.')
@section('meta_keywords', 'Contact Fabian Ternis, Laravel developer for hire, PHP expert, web developer contact, project inquiry, email Fabian Ternis')

@section('og_title', 'Contact Fabian Ternis')
@section('og_description', 'Reach out to Fabian Ternis, a dedicated Laravel and backend developer.')
@section('twitter_title', 'Fabian Ternis | Contact Me')
@section('twitter_description', 'How to connect with Fabian Ternis for professional inquiries.')

@section('content')
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6 max-w-4xl">
            <h1 class="text-5xl font-extrabold text-center text-indigo-400 mb-12"
                data-aos="fade-up">Get In Touch</h1>

            <div class="bg-gray-800 p-8 rounded-lg shadow-xl border-t-4 border-indigo-500"
                data-aos="fade-up" data-aos-delay="200">
                <p class="text-lg text-gray-300 text-center mb-8">
                    Have a project in mind, a question, or just want to say hi? Feel
                    free to reach out!
                </p>

                @if (session('success'))
                    <div class="bg-green-600 text-white p-4 rounded-md mb-6 text-center">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Temporarily disabled form --}}
                <div class="bg-amber-200 text-slate-700 p-4 rounded-md mb-6 text-center text-lg font-semibold">
                    The contact form is temporarily unavailable. Please use the email
                    link below.
                </div>

                {{--
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div data-aos="fade-up" data-aos-delay="300">
                    <label for="name" class="block text-gray-200 text-lg font-semibold mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-indigo-500 transition-colors duration-300 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <label for="email" class="block text-gray-200 text-lg font-semibold mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-indigo-500 transition-colors duration-300 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="500">
                    <label for="subject" class="block text-gray-200 text-lg font-semibold mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-indigo-500 transition-colors duration-300 @error('subject') border-red-500 @enderror" value="{{ old('subject') }}">
                    @error('subject')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="600">
                    <label for="message" class="block text-gray-200 text-lg font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-indigo-500 transition-colors duration-300 @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="700">
                    <button type="submit" class="w-full bg-indigo-500 text-white text-xl px-8 py-4 rounded-full shadow-lg hover:bg-indigo-600 focus:outline-none focus:ring-4 focus:ring-indigo-500 focus:ring-opacity-50 transition-all duration-300 font-bold">
                        Send Message <i class="bi bi-send ml-2"></i>
                    </button>
                </div>
            </form>
            --}}
            </div>

            <div class="text-center mt-12 space-y-4" data-aos="fade-up"
                data-aos-delay="800">
                <p class="text-xl text-gray-300">
                    You can also find me here:
                </p>
                <div class="space-x-6">
                    <a href="https://github.com/michaelninder" target="_blank"
                        class="text-gray-300 hover:text-white transition-colors duration-300"
                        title="GitHub"><i class="bi bi-github text-4xl"></i></a>
                    <a href="mailto:f.ternis@xpsystems.eu"
                        class="text-gray-300 hover:text-white transition-colors duration-300"
                        title="Email"><i class="bi bi-envelope text-4xl"></i></a>
                </div>
                <p class="text-gray-400 text-lg mt-4">Location: Germany</p>
            </div>
        </div>
    </section>
@endsection