<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stoc.io | Management Tool For Your Business</title>

    <!-- Styles / Scripts -->
    @if (
            file_exists(public_path('build/manifest.json')) ||
            file_exists(public_path('hot'))
        ) @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ]) @endif
</head>

<body class="antialiased">
    <header class="container mx-auto">
        @include('components.nav')
    </header>
    <!-- Hero section -->
    <section class="w-full px-4 md:px-16 lg:px-48 py-16">
        <div class="container flex flex-col-reverse md:flex-row justify-between items-center mx-auto gap-8">

            {{-- Left Content (teks) --}}
            <div class="flex-1 text-center md:text-left">
                {{-- People & Rating --}}
                <div class="flex items-center justify-center md:justify-start gap-4 mb-6">
                    <div class="flex -space-x-3">
                        <img class="rounded-full w-10 h-10 object-cover border-2 border-white"
                            src="{{ asset('img/person.avif') }}" alt="">
                        <img class="rounded-full w-10 h-10 object-cover border-2 border-white"
                            src="{{ asset('img/person2.avif') }}" alt="">
                        <img class="rounded-full w-10 h-10 object-cover border-2 border-white"
                            src="{{ asset('img/person3.avif') }}" alt="">
                        <img class="rounded-full w-10 h-10 object-cover border-2 border-white"
                            src="{{ asset('img/person4.avif') }}" alt="">
                    </div>
                    <div>
                        <div class="flex items-center gap-1 text-kuning-legam">
                            @for ($i = 0; $i < 5; $i++)
                                <x-bi-star-fill class="w-5 h-5" />
                            @endfor
                        </div>
                        <p class="font-montserrat text-sm">1M+ Happy Clients</p>
                    </div>
                </div>

                {{-- Title --}}
                <h1 class="text-4xl md:text-5xl font-bold font-montserrat leading-tight">
                    Manage Your <span class="text-green-500">Stock</span>
                    For Your Own <span class="text-biru-bisnis">Business.</span>
                </h1>

                {{-- Description --}}
                <p class="my-6 text-lg md:text-2xl font-montserrat max-w-xl mx-auto md:mx-0">
                    Simplifying inventory management for every business size.
                </p>

                {{-- CTA --}}
                <div class="mt-4 justify-items-center">
                    <a href="/login"
                        class="text-2xl inline-flex items-center gap-2 px-6 py-3 bg-hijau-bagus font-bold text-white rounded-tl-3xl rounded-br-3xl hover:bg-green-800 font-montserrat">
                        <x-tabler-login class="w-12 h-12" /> Try It Now
                    </a>
                </div>
            </div>

            {{-- Right Image (akan muncul di atas teks saat mobile) --}}
            <div class="flex-1 mb-8 md:mb-0">
                <img class="shadow-xl rounded-tl-4xl rounded-br-4xl w-full bg-hijau-bagus p-2"
                    src="{{ asset('img/warehouse-illustration.avif') }}" alt="Warehouse Illustration">
            </div>
        </div>
    </section>

    {{-- Feature Section --}}
    <section class="w-full bg-hijau-bagus py-16 my-4">
        <div class="container mx-auto px-4 md:px-16 lg:px-48">
            <div class="flex justify-center gap-4 mx-auto">
                <x-carbon-feature-picker class="w-14 h-14 text-hijau-bagus bg-white p-3 rounded-full" />
                <h1 class="text-5xl font-bold font-montserrat text-center text-white mb-12">
                    FEATURES
                </h1>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Feature 1 --}}
                <div class="group bg-white shadow-lg p-8 rounded-3xl flex flex-col items-center text-center 
                       transition transform hover:-translate-y-2 hover:bg-hijau-bagus hover:shadow-xl cursor-pointer">
                    <div class="bg-hijau-bagus p-4 rounded-full mb-4 transition group-hover:bg-white">
                        <x-vaadin-stock class="w-12 h-12 text-white group-hover:text-hijau-bagus" />
                    </div>
                    <h3 class="text-xl font-bold font-montserrat mb-2 text-black transition group-hover:text-white">
                        Inventory Management
                    </h3>
                    <p class="opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-40 
                          transition-all duration-500 ease-in-out text-white font-montserrat mt-2">
                        Manage incoming and outgoing stock easily, in real time, and accurately.
                    </p>
                </div>

                {{-- Feature 2 --}}
                <div class="group bg-white shadow-lg p-8 rounded-3xl flex flex-col items-center text-center 
                       transition transform hover:-translate-y-2 hover:bg-hijau-bagus hover:shadow-xl cursor-pointer">
                    <div class="bg-hijau-bagus p-4 rounded-full mb-4 transition group-hover:bg-white">
                        <x-vaadin-file-text class="w-12 h-12 text-white group-hover:text-hijau-bagus" />
                    </div>
                    <h3 class="text-xl font-bold font-montserrat mb-2 text-black transition group-hover:text-white">
                        PDF Reporting
                    </h3>
                    <p class="opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-40 
                          transition-all duration-500 ease-in-out text-white font-montserrat mt-2">
                        Print stock reports, incoming and outgoing goods directly in PDF format.
                    </p>
                </div>

                {{-- Feature 3 --}}
                <div class="group bg-white shadow-lg p-8 rounded-3xl flex flex-col items-center text-center 
                       transition transform hover:-translate-y-2 hover:bg-hijau-bagus hover:shadow-xl cursor-pointer">
                    <div class="bg-hijau-bagus p-4 rounded-full mb-4 transition group-hover:bg-white">
                        <x-vaadin-user class="w-12 h-12 text-white group-hover:text-hijau-bagus" />
                    </div>
                    <h3 class="text-xl font-bold font-montserrat mb-2 text-black transition group-hover:text-white">
                        Personal Account
                    </h3>
                    <p class="opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-40 
                          transition-all duration-500 ease-in-out text-white font-montserrat mt-2">
                        Change history (add/change/delete) per account.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="w-full px-4 sm:px-8 md:px-16 lg:px-48 py-12 sm:py-16 my-8 bg-gray-50">
        <div class="container mx-auto">

            {{-- Title --}}
            <div class="flex justify-center items-center gap-3 mb-8 sm:mb-12">
                <div class="bg-hijau-bagus p-2 sm:p-3 rounded-full">
                    <x-eva-info class="w-6 h-6 sm:w-8 sm:h-8 text-white" />
                </div>
                <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold font-montserrat text-gray-800">
                    ABOUT Stoc.io
                </h1>
            </div>

            {{-- Content --}}
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6 sm:gap-8 md:gap-12">

                {{-- Image --}}
                <div class="flex-1 w-full">
                    <img class="shadow-lg rounded-tr-3xl rounded-bl-3xl w-full max-h-[300px] sm:max-h-[400px] md:max-h-full object-cover p-3 sm:p-4 bg-hijau-bagus"
                        src="{{ asset('img/warehouse.jpg') }}" alt="Warehouse Illustration">
                </div>

                {{-- Text --}}
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-xl sm:text-2xl md:text-4xl font-bold font-montserrat text-hijau-bagus">
                        What Is Stoc.io?
                    </h2>
                    <p class="mt-3 sm:mt-4 text-base sm:text-lg md:text-xl text-black leading-relaxed font-montserrat">
                        <span class="font-semibold text-black">Stoc.io</span> is a web-based inventory management
                        application designed to help businesses manage their stock efficiently.
                        With features like <span class="font-semibold">real-time stock tracking</span>,
                        <span class="font-semibold">PDF reporting</span>, and
                        <span class="font-semibold">multi-user access</span>,
                        Stoc.io simplifies the complexities of inventory management and ensures
                        your business operations run smoothly.
                    </p>

                    {{-- CTA Button --}}
                    <div class="mt-5 sm:mt-6">
                        <a href="#features"
                            class="inline-block px-5 sm:px-6 py-2 sm:py-3 bg-hijau-bagus text-white font-bold rounded-tl-2xl rounded-br-2xl sm:rounded-tl-3xl sm:rounded-br-3xl shadow-md hover:bg-green-700 transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        @include('components.footer')
    </footer>

</body>

</html>