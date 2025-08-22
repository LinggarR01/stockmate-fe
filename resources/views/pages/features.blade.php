@php
    $feature1 = [
        "Manage incoming and outgoing stock easily, in real time, and accurately.",
        "Add, change, delete items with details (name, category, quantity, price).",
        "Monitor current stock levels and set minimum limits (reorder levels).",
        "Automatically record incoming and outgoing stock."
    ];
    $feature2 = [
        "Current inventory report.",
        "Goods movement report (incoming & outgoing).",
        "Periodic summary (daily, weekly, monthly).",
        "Reports can be downloaded or printed directly."
    ];
    $feature3 = [
        "Simple registration and login.",
        "There are no complicated roles (admin/staff), but each account can only view and manage its own data.",
        "Data between users does not mix, so it is safe for multiple people to use at the same time.",
    ];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stoc.io Features</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="antialiased">
    <header class="container mx-auto">
        @include('components.nav')
    </header>

    {{-- Feature Section --}}
    <section class="w-full py-16">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 flex items-center justify-center gap-3">
                <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-hijau-bagus">
                    <x-carbon-feature-picker class="h-7 w-7 text-white" aria-hidden="true" />
                </span>
                <h1 class="font-montserrat text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-hijau-bagus">
                    FEATURES
                </h1>
            </div>

            <div class="grid gap-6 sm:gap-8 md:grid-cols-2 xl:grid-cols-3">
                {{-- Cards are Here --}}

                {{-- First Card --}}
                <article class="group relative flex items-start gap-5 rounded-3xl bg-white p-6 sm:p-7
         shadow-lg ring-1 ring-black/5 transition hover:-translate-y-1 hover:shadow-xl">
                    {{-- ICON (stop stretch) --}}
                    <div class="self-start inline-flex flex-none items-center justify-center
              rounded-2xl bg-hijau-bagus/10 p-4">
                        <x-vaadin-stock class="h-14 w-14 text-hijau-bagus" aria-hidden="true" />
                    </div>

                    {{-- TEXT --}}
                    <div class="min-w-0">
                        <h2 class="mb-3 font-montserrat text-2xl font-bold text-hijau-bagus">Inventory Management</h2>
                        <ul class="max-w-2xl space-y-2 leading-relaxed">
                            @foreach ($feature1 as $item)
                                <li class="flex items-start gap-3 text-base md:text-lg text-gray-800">
                                    <x-bi-check2 class="mt-1 h-5 w-5 flex-shrink-0 text-hijau-bagus" aria-hidden="true" />
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>

                {{-- Second Card --}}
                <article class="group relative flex items-start gap-5 rounded-3xl bg-white p-6 sm:p-7
         shadow-lg ring-1 ring-black/5 transition hover:-translate-y-1 hover:shadow-xl">
                    {{-- ICON (stop stretch) --}}
                    <div class="self-start inline-flex flex-none items-center justify-center
              rounded-2xl bg-hijau-bagus/10 p-4">
                        <x-vaadin-file-text class="h-14 w-14 text-hijau-bagus" aria-hidden="true" />
                    </div>

                    {{-- TEXT --}}
                    <div class="min-w-0">
                        <h2 class="mb-3 font-montserrat text-2xl font-bold text-hijau-bagus">PDF Reporting</h2>
                        <ul class="max-w-2xl space-y-2 leading-relaxed">
                            @foreach ($feature2 as $item)
                                <li class="flex items-start gap-3 text-base md:text-lg text-gray-800">
                                    <x-bi-check2 class="mt-1 h-5 w-5 flex-shrink-0 text-hijau-bagus" aria-hidden="true" />
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>

                {{-- Third Card --}}
                <article class="group relative flex items-start gap-5 rounded-3xl bg-white p-6 sm:p-7
         shadow-lg ring-1 ring-black/5 transition hover:-translate-y-1 hover:shadow-xl">
                    {{-- ICON (stop stretch) --}}
                    <div class="self-start inline-flex flex-none items-center justify-center
              rounded-2xl bg-hijau-bagus/10 p-4">
                        <x-vaadin-user class="h-14 w-14 text-hijau-bagus" aria-hidden="true" />
                    </div>

                    {{-- TEXT --}}
                    <div class="min-w-0">
                        <h2 class="mb-3 font-montserrat text-2xl font-bold text-hijau-bagus">Personal Account</h2>
                        <ul class="max-w-2xl space-y-2 leading-relaxed">
                            @foreach ($feature3 as $item)
                                <li class="flex items-start gap-3 text-base md:text-lg text-gray-800">
                                    <x-bi-check2 class="mt-1 h-5 w-5 flex-shrink-0 text-hijau-bagus" aria-hidden="true" />
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <footer>
        @include('components.footer')
    </footer>
</body>


</html>