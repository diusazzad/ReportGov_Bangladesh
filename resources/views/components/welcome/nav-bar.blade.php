<script src="//unpkg.com/alpinejs" defer></script>
@vite('resources/css/app.css', 'resources/js/app.js')
<nav class="z-0 relative" x-data="{ open: false, menu: false, lokasi: false }">
    <div class="relative z-10 bg-yellow-300 shadow">
        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex items-center px-2 lg:px-0">
                    <a class="flex-shrink-0" href="#">
                        <img class="block lg:hidden h-12 w-16"
                            src="https://imlovefood.com/wp-content/themes/mypanganthema/img/logo_small.png"
                            alt="Logo">
                        <img class="hidden lg:block h-12 w-auto"
                            src="https://imlovefood.com/wp-content/themes/mypanganthema/img/logo_small_gray.png"
                            alt="Logo">
                    </a>
                    <div class="hidden lg:block lg:ml-2">
                        <div class="flex">
                            <a href="#"
                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "
                                @click="menu=false">Location</a>
                            <a href="#"
                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "
                                @click="menu=false">Article</a>
                            <a href="#"
                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "
                                @click="menu=false">Recipe</a>
                            <a href="#"
                                class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "
                                @click="menu=false">Promo</a>
                        </div>
                    </div>
                </div>

                <div class="flex lg:hidden">
                    <button @click="menu = !menu"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                        aria-label="Main menu" aria-expanded="false">
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div x-show="menu" class="block md:hidden">
            <div class="px-2 pt-2 pb-3">
                <a href="#"
                    class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    @click="menu=false">Location</a>
                <a href="#"
                    class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    @click="menu=false">Article</a>
                <a href="#"
                    class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    @click="menu=false">Recipe</a>
                <a href="#"
                    class="mt-1 block px-3 py-2 rounded-md text-white font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    @click="menu=false">Promo</a>
            </div>
        </div>
    </div>
</nav>
