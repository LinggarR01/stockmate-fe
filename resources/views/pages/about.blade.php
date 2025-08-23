<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stoc.io — About</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="antialiased">
    <!-- Header -->
    <header class="container mx-auto">
        @include('components.nav')
    </header>

    <!-- About Section -->
    <section class="w-full px-4 sm:px-8 md:px-16 lg:px-48 py-12 sm:py-16 my-8 bg-gray-50">
        <div class="container mx-auto">

            <!-- Title -->
            <div class="flex justify-center items-center gap-3 mb-8 sm:mb-12">
                <div class="bg-hijau-bagus p-2 sm:p-3 rounded-full">
                    <x-vaadin-info-circle class="w-6 h-6 sm:w-8 sm:h-8 text-white" />
                </div>
                <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold font-montserrat text-gray-800">
                    About Stoc.io
                </h1>
            </div>

            <!-- Content -->
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6 sm:gap-8 md:gap-12">
                <!-- Image -->
                <div class="flex-1 w-full">
                    <img src="{{ asset('img/warehouse.jpg') }}" alt="Warehouse illustration"
                        class="w-full max-h-[300px] sm:max-h-[400px] md:max-h-full object-cover p-3 sm:p-4 bg-hijau-bagus shadow-lg rounded-tr-3xl rounded-bl-3xl" />
                </div>

                <!-- Text -->
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-xl sm:text-2xl md:text-4xl font-bold font-montserrat text-hijau-bagus">
                        What Is Stoc.io?
                    </h2>
                    <p class="mt-3 sm:mt-4 text-base sm:text-lg md:text-xl text-black leading-relaxed font-montserrat">
                        Stoc.io is a web-based application designed to support effective inventory management. With
                        outstanding features such as real-time stock tracking, PDF reports, and multi-user support,
                        Stoc.io simplifies inventory workflows and keeps your business running smoothly.
                    </p>
                </div>
            </div>

            <!-- Technology Stack -->
            <div class="mt-12 sm:mt-16">
                <div class="flex justify-center items-center gap-3 mb-8 sm:mb-12">
                    <h2 class="text-2xl sm:text-4xl md:text-5xl font-bold font-montserrat text-gray-800">
                        Technology Stack
                    </h2>
                </div>

                <div class="grid gap-6 sm:gap-8 md:grid-cols-2 xl:grid-cols-3">
                    <!-- Card: Laravel -->
                    <article
                        class="group relative flex items-start gap-5 rounded-3xl bg-white p-6 sm:p-7 shadow-lg ring-1 ring-black/5 transition hover:-translate-y-1 hover:shadow-xl">
                        <!-- Icon -->
                        <div
                            class="self-start inline-flex flex-none items-center justify-center rounded-2xl bg-hijau-bagus/10 p-4">
                            {{-- <x-vaadin-stock class="h-14 w-14 text-hijau-bagus" aria-hidden="true" /> --}}
                            <img class="w-14 h-14" src="//logotyp.us/file/laravel.svg" alt="Laravel" />
                        </div>
                        <!-- Text -->
                        <div class="min-w-0">
                            <h3 class="mb-3 font-montserrat text-2xl font-bold text-hijau-bagus">Laravel</h3>
                            <p class="leading-relaxed font-montserrat">
                                Stoc.io was developed using Laravel, a powerful PHP framework for building structured,
                                secure, and easy-to-develop backends.
                            </p>
                        </div>
                    </article>

                    <!-- Card: TailwindCSS -->
                    <article
                        class="group relative flex items-start gap-5 rounded-3xl bg-white p-6 sm:p-7 shadow-lg ring-1 ring-black/5 transition hover:-translate-y-1 hover:shadow-xl">
                        <div
                            class="self-start inline-flex flex-none items-center justify-center rounded-2xl bg-hijau-bagus/10 p-4">
                            {{-- <x-vaadin-stock class="h-14 w-14 text-hijau-bagus" aria-hidden="true" /> --}}
                            <img class="w-14 h-14" src={{ asset('img/tailwindcss.svg') }} alt="Tailwind Logo" />
                        </div>
                        <!-- Text -->
                        <div class="min-w-0">
                            <h3 class="mb-3 font-montserrat text-2xl font-bold text-hijau-bagus">Tailwind CSS</h3>
                            <p class="leading-relaxed font-montserrat">
                                The Stoc.io interface is designed with Tailwind CSS, a modern CSS framework that enables
                                responsive, clean, and consistent design across devices.
                            </p>
                        </div>
                    </article>

                    <!-- Card: MySQL -->
                    <article
                        class="group relative flex items-start gap-5 rounded-3xl bg-white p-6 sm:p-7 shadow-lg ring-1 ring-black/5 transition hover:-translate-y-1 hover:shadow-xl">
                        <!-- Icon -->
                        <div
                            class="self-start inline-flex flex-none items-center justify-center rounded-2xl bg-hijau-bagus/10 p-4">
                            {{-- <x-vaadin-stock class="h-14 w-14 text-hijau-bagus" aria-hidden="true" /> --}}
                            <img class="w-14 h-14" src={{ asset('img/mysql.svg') }} alt="MySQL Logo" />
                        </div>
                        <!-- Text -->
                        <div class="min-w-0">
                            <h3 class="mb-3 font-montserrat text-2xl font-bold text-hijau-bagus">MySQL</h3>
                            <p class="leading-relaxed font-montserrat">
                                For data management, Stoc.io uses MySQL, a fast, reliable, and proven stable relational
                                database management system for storing and processing inventory information.
                            </p>
                        </div>
                    </article>




                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>