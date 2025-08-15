<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <nav class="rounded-b-lg ">
        <div class="mx-auto p-8">
            <div class="flex flex-row justify-between items-center">
                <!-- Logo -->
                <div class=" flex items-center space-x-32">
                    <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="Stockmate Logo"></a>
                </div>

                {{-- Nav List --}}
                <div class="hidden md:flex space-x-16 items-center">
                    <a href="/" class="p-2 text-lg text-hijau-bagus font-bold hover:text-white hover:bg-hijau-bagus hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">Home</a>
                    <a href="/about"
                        class=" p-2 text-lg  text-hijau-bagus font-bold hover:text-white hover:bg-hijau-bagus hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">About</a>
                    <a href="/features"
                        class=" p-2 text-lg  text-hijau-bagus font-bold hover:text-white hover:bg-hijau-bagus hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">Features</a>
                    <a href="/faq"
                        class=" p-2 text-lg  text-hijau-bagus font-bold hover:text-white hover:bg-hijau-bagus hover:rounded-tl-xl hover:rounded-br-xl font-montserrat">FAQ</a>
                </div>

                <!-- Button -->
                <div class="hidden md:flex">
                    <a href=""
                        class="flex items-center gap-2 mx-4 p-4 bg-hijau-bagus font-bold text-white rounded-tl-4xl rounded-br-4xl hover:bg-green-800 font-montserrat">
                        <x-ionicon-call class="w-5 h-5" />
                        Contact Us
                    </a>
                </div>



            </div>
        </div>
    </nav>
</div>