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
    <section class="py-20 bg-slate-900 min-h-screen">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="mb-16" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 text-center">
                    Get In Touch
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto text-center">
                    Have a project in mind, a question, or just want to connect? I'm always open to new opportunities and discussions.
                </p>
            </div>

            <div class="group bg-slate-800 p-8 rounded-lg shadow-md border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-lg flex flex-col"
                data-aos="fade-up" data-aos-delay="200">

                @if (session('success'))
                    <div class="bg-green-600 text-white p-4 rounded-md mb-6 text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-blue-900 bg-opacity-30 text-blue-200 border border-blue-600 p-4 rounded-md mb-8 text-center text-lg font-semibold flex items-center justify-center gap-3">
                    <i class="bi bi-info-circle text-2xl"></i>
                    The contact form is temporarily unavailable. Please use the email
                    link below to reach me.
                </div>

                {{--
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div data-aos="fade-up" data-aos-delay="300">
                    <label for="name" class="block text-gray-200 text-lg font-semibold mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-blue-500 transition-colors duration-300 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <label for="email" class="block text-gray-200 text-lg font-semibold mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-blue-500 transition-colors duration-300 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="500">
                    <label for="subject" class="block text-gray-200 text-lg font-semibold mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-blue-500 transition-colors duration-300 @error('subject') border-red-500 @enderror" value="{{ old('subject') }}">
                    @error('subject')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="600">
                    <label for="message" class="block text-gray-200 text-lg font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" class="w-full p-4 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:border-blue-500 transition-colors duration-300 @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div data-aos="fade-up" data-aos-delay="700">
                    <button type="submit" class="w-full bg-blue-600 text-white text-xl px-8 py-4 rounded-lg shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 transition-all duration-300 font-bold">
                        Send Message <i class="bi bi-send ml-2"></i>
                    </button>
                </div>
            </form>
            --}}
            </div>

            <div class="text-center mt-12 space-y-6" data-aos="fade-up" data-aos-delay="800">
                <p class="text-xl text-gray-300">
                    Connect with me through these channels:
                </p>
                <div class="flex justify-center space-x-8">
                    <a href="https://github.com/michaelninder" target="_blank"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 flex items-center gap-2"
                        title="GitHub Profile">
                        <i class="bi bi-github text-4xl"></i>
                        <span class="sr-only">GitHub</span>
                    </a>
                    <a href="mailto:f.ternis@xpsystems.eu"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 flex items-center gap-2"
                        title="Send an Email">
                        <i class="bi bi-envelope text-4xl"></i>
                        <span class="sr-only">Email</span>
                    </a>
                </div>
                <p class="text-gray-400 text-lg mt-4">Location: Germany</p>
            </div>
        </div>
    </section>
@endsection