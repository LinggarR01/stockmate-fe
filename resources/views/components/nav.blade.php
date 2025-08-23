<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <nav class="rounded-b-lg ">
        <div class=" mx-auto p-8">
            <div class="flex flex-row justify-between items-center">
                <!-- Logo -->
                <div class=" flex items-center space-x-32">
                    <a class="w-full" href="/"><img src="{{ asset('img/logo4.svg') }}" alt="Stoc.io Logo"></a>
                </div>

                {{-- Nav List --}}
                <div class="hidden md:flex space-x-16 items-center">
                    <a href="/"
                        class="p-2 text-lg text-hijau-bagus font-bold hover:text-white hover:bg-hijau-bagus hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">Home</a>
                    <a href="/features"
                        class=" p-2 text-lg  text-hijau-bagus font-bold hover:text-white hover:bg-hijau-bagus hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">Features</a>
                    <a href="/about"
                        class=" p-2 text-lg  text-hijau-bagus font-bold hover:text-white hover:bg-hijau-bagus hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">About</a>
                    <a href="/login"
                        class=" rounded-full flex p-2 text-lg gap-2 text-white font-bold bg-hijau-bagus hover:text-hijau-bagus hover:bg-white hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">
                        <x-tabler-login class="w-8 h-8 " /> Sign up
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>