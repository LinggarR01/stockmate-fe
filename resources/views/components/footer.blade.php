<footer class="bg-gray-950 text-white py-12">
    <div class="container mx-auto px-6 md:px-16 lg:px-32">
        <div class="flex flex-col md:flex-row justify-between gap-12">

            {{-- Logo + Paragraph --}}
            <div class="flex-1">
                <img src="{{ asset('img/logo-dark.svg') }}" alt="Stockmate Logo" class="mb-4 w-40">
                <p class="font-montserrat text-md leading-relaxed max-w-sm">
                    Simplifying inventory management for every business size.
                </p>
            </div>

            {{-- Footer Links --}}
            <div class="flex-1 grid grid-cols-2 gap-12">
                <div>
                    <h2 class="text-lg font-bold font-montserrat mb-4 underline underline-offset-4">Links</h2>
                    <nav class="flex flex-col gap-2 font-montserrat">
                        <a href="/" class="hover:text-hijau-bagus">Home</a>
                        <a href="/features" class="hover:text-hijau-bagus">Features</a>
                        <a href="/about" class="hover:text-hijau-bagus">About</a>
                    </nav>
                </div>

                {{-- Social Media --}}
                <div>
                    <h2 class="text-lg font-bold font-montserrat mb-4 underline underline-offset-4">Social Media</h2>
                    <div class="flex gap-4">
                        <a href="https://facebook.com" aria-label="Facebook">
                            <x-bi-facebook class="w-6 h-6 hover:text-hijau-bagus" />
                        </a>
                        <a href="https://instagram.com" aria-label="Instagram">
                            <x-bi-instagram class="w-6 h-6 hover:text-hijau-bagus" />
                        </a>
                        <a href="https://github.com/LinggarR01/stockmate-fe"  aria-label="Instagram">
                            <x-bi-github class="w-6 h-6 hover:text-hijau-bagus" />
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Copyright --}}
        <div class="mt-12 border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
            © {{ date('Y') }} Stockmate. All rights reserved.
        </div>
    </div>
</footer>
