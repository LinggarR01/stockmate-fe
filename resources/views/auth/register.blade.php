<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="antialiased">
    <header class="container mx-auto mb-8">
        @include('components.nav')
    </header>

    <section class="container mx-auto px-6 md:px-16 lg:px-48 py-12 ">
        <div class="flex flex-col p-4 lg:flex-row items-center gap-10 bg-white rounded-xl shadow-lg overflow-hidden">

            <!-- Left: Login Form -->
            <div class="w-full lg:w-1/2 px-6 sm:px-10 py-10">
                <h2 class="text-2xl sm:text-3xl font-bold font-montserrat text-gray-800 text-center mb-8">
                    Welcome to Stoc.io!
                </h2>

                <form method="POST" action="/" class="space-y-5">
                    @csrf

                    <!-- Username -->
                    <div>
                        <label for="username" class="block mb-1 text-sm font-medium text-gray-700">Username</label>
                        <input type="text" name="username" id="username"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-hijau-bagus focus:border-hijau-bagus"
                            required>
                    </div>

                    <!-- Password with toggle -->
                    <div>
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password"
                                class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-hijau-bagus focus:border-hijau-bagus"
                                required>
                            <!-- Toggle Button -->
                            <button type="button" onclick="togglePassword()"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-hijau-bagus focus:outline-none">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-hijau-bagus text-white py-3 px-6 rounded-lg font-semibold hover:bg-hijau-bagus/90 transition">
                            Login
                        </button>
                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-6 text-sm text-gray-600">
                    Already have an account?
                    <a href="/login" class="text-hijau-bagus font-semibold hover:underline">Sign In</a>
                </div>
            </div>

            <!-- Right: Illustration -->
            <div class="w-full lg:w-1/2 h-full hidden lg:block">
                <img src="{{ asset('img/warehouse-illustration.avif') }}" alt="Warehouse Illustration"
                    class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- Password Toggle -->
    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = document.getElementById('eyeIcon');
            const isHidden = input.type === 'password';
            input.type = isHidden ? 'text' : 'password';
            icon.innerHTML = isHidden
                ? `<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.054 10.054 0 014.168-5.338M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />`
                : `<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
        }
    </script>
</body>

</html>