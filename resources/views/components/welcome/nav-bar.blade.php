<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{ asset('welcome/css/navBar.css') }}">
<script src="{{ asset('welcome/js/navBar.js') }}"></script>
<section class="navigation bg-gray-800">
    <div class="nav-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="brand">
            <a href="#!" class="text-white uppercase text-lg">LOGO</a>
        </div>
        <nav>
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!" class="flex items-center p-2">
                    <span></span>
                </a>
            </div>
            <ul class="nav-list hidden md:flex md:items-center space-x-4">
                <li>
                    <a href="#!"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Home</a>
                </li>
                <li>
                    <a href="#!"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">About</a>
                </li>
                <li class="relative">
                    <a href="#!"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Services</a>
                    <ul class="nav-dropdown absolute z-10 bg-white hidden mt-2">
                        <li><a href="#!" class="block px-4 py-2 text-sm text-gray-700">Web Design</a></li>
                        <li><a href="#!" class="block px-4 py-2 text-sm text-gray-700">Web Development</a></li>
                        <li><a href="#!" class="block px-4 py-2 text-sm text-gray-700">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#!"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Pricing</a>
                </li>
                <li>
                    <a href="#!"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
