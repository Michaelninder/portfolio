<footer class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm mt-8 border-t border-gray-300 dark:border-gray-600">
    <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        
        {{-- Left Section --}}
        <div class="flex items-center space-x-2">
            <span>&copy; {{ date('Y') }} Fabian Ternis</span>
            <span>|</span>
            <a href="{{ route('imprint') }}" class="hover:underline">
                {{ __('Imprint') }}
            </a>
            <span>|</span>
            <a href="{{ route('privacy') }}" class="hover:underline">
                {{ __('Privacy') }}
            </a>
        </div>

        {{-- Center Section --}}
        <div class="text-center">
            <span>{{ __('footer.tagline', ['name' => 'Fabian Ternis']) }}</span>
        </div>

        {{-- Right Section (Links / Socials) --}}
        <div class="flex space-x-4 items-center">
            <a href="https://michaelninder.de" target="_blank" title="Michaelninder">
                <i data-lucide="external-link" class="w-4 h-4"></i>
            </a>
            <a href="https://github.com/michaelninder" target="_blank" title="GitHub">
                <i data-lucide="github" class="w-4 h-4"></i>
            </a>
            <a href="mailto:f.ternis@xpsystems.eu" title="Email">
                <i data-lucide="mail" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        lucide.createIcons();
    });
</script>
