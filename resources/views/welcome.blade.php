<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stockmate | Management Tool For Your Business</title>

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
    <div class="container mx-auto">
        @include('components.nav')
    </div>
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
                <div class="mt-4">
                    <a href="#contact"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-hijau-bagus font-bold text-white rounded-tl-3xl rounded-br-3xl hover:bg-green-800 font-montserrat">
                        <x-ionicon-call class="w-5 h-5" />
                        Contact Us
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
    <section class="w-full px-4 md:px-16 lg:px-48 py-16 my-4 bg-hijau-bagus">
        <h1 class="text-5xl font-bold font-montserrat text-center text-white mb-12 mx-16 ">FEATURES</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Feature 1 --}}
            <div
                class="group bg-white shadow-lg p-8 rounded-3xl flex flex-col items-center text-center transition hover:bg-hijau-bagus hover:shadow-xl cursor-pointer">
                <div class="bg-hijau-bagus p-4 rounded-full mb-4 transition group-hover:bg-white">
                    <x-vaadin-stock class="w-12 h-12 text-white group-hover:text-green-900" />
                </div>
                <h3 class="text-xl font-bold font-montserrat mb-2 text-black transition group-hover:text-white">
                    Stock Management
                </h3>
                <p class="hidden group-hover:block text-white font-montserrat mt-2 transition">
                    Manage incoming and outgoing stock easily, in real time, and accurately.
                </p>
            </div>

            {{-- Feature 2 --}}
            <div
                class="group bg-white shadow-lg p-8 rounded-3xl flex flex-col items-center text-center transition hover:bg-hijau-bagus hover:shadow-xl cursor-pointer">
                <div class="bg-hijau-bagus p-4 rounded-full mb-4 transition group-hover:bg-white">
                    <x-vaadin-file-text class="w-12 h-12 text-white group-hover:text-hijau-bagus" />
                </div>
                <h3 class="text-xl font-bold font-montserrat mb-2 text-black transition group-hover:text-white">
                    PDF Reporting
                </h3>
                <p class="hidden group-hover:block text-white font-montserrat mt-2 transition">
                    Print stock reports, incoming and outgoing goods directly in PDF format.
                </p>
            </div>

            {{-- Feature 3 --}}
            <div
                class="group bg-white shadow-lg p-8 rounded-3xl flex flex-col items-center text-center transition hover:bg-hijau-bagus hover:shadow-xl cursor-pointer">
                <div class="bg-hijau-bagus p-4 rounded-full mb-4 transition group-hover:bg-white">
                    <x-vaadin-users class="w-12 h-12 text-white group-hover:text-hijau-bagus" />
                </div>
                <h3 class="text-xl font-bold font-montserrat mb-2 text-black transition group-hover:text-white">
                    Multi User Access
                </h3>
                <p class="hidden group-hover:block text-white font-montserrat mt-2 transition">
                    Atur role & akses user (admin, staff gudang, kasir) dengan aman.
                </p>
            </div>
        </div>
    </section>


</body>

</html>