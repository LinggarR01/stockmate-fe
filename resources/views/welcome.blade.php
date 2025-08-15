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
    <div class="w-full px-48 ">
        <div class="container flex justify-between mx-auto p-16">
            {{-- Paragraph section --}}
            <div>
                <div class="flex items-center gap-4 mb-4">
                    {{-- Person Profile --}}
                    <div class="flex items-center">
                        <img class="rounded-full w-10 h-10 object-cover" src="{{ asset('img/person.avif') }}" alt="">
                        <img class="rounded-full w-10 h-10 object-cover" src="{{ asset('img/person2.avif') }}" alt="">
                        <img class="rounded-full w-10 h-10 object-cover" src="{{ asset('img/person3.avif') }}" alt="">
                        <img class="rounded-full w-10 h-10 object-cover" src="{{ asset('img/person4.avif') }}" alt="">
                    </div>
                    {{-- Star Rating --}}
                    <div class="">
                        <div class="flex items-center gap-2 mb-1 text-kuning-legam">
                            <x-bi-star-fill class="w-5 h-5" />
                            <x-bi-star-fill class="w-5 h-5" />
                            <x-bi-star-fill class="w-5 h-5" />
                            <x-bi-star-fill class="w-5 h-5" />
                            <x-bi-star-fill class="w-5 h-5" />
                        </div>
                        <p class="font-montserrat">1M+ Happy Clients</p>
                    </div>
                </div>

                {{-- Title --}}
                <h1 class="text-5xl font-bold font-montserrat">
                    <span class="">Manage Your <span class="text-green-500">Stock</span></span>
                    <span class="">For Your Own <span class="text-biru-bisnis">Bussiness.</span></span>
                </h1>

                {{-- Description --}}
                <p class="my-4 text-2xl font-montserrat">Simplifying inventory management for every business size.</p>
                <div class="hidden md:flex">
                    <a href=""
                        class="flex items-center gap-2 p-4 bg-hijau-bagus font-bold text-white rounded-tl-4xl rounded-br-4xl hover:bg-green-800 font-montserrat">
                        <x-ionicon-call class="w-5 h-5" />
                        Contact Us
                    </a>
                </div>
            </div>
            <img class=" shadow-xl rounded-tl-4xl rounded-br-4xl w-1/2 p-1 bg-hijau-bagus"
                src="{{ asset('img/warehouse-illustration.avif') }}" alt="">
        </div>

    </div>

</body>

</html>