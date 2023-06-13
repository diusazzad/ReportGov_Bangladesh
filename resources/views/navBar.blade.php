<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{ asset('welcome/css/navBar.css') }}">
<script src="{{ asset('welcome/js/navBar.js') }}"></script>
@vite('resources/css/app.css', 'resources/js/app.js')

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
                    <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Home</a>
                </li>
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">About</a>
                </li>
                <li class="relative">
                    <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Services</a>
                    <ul class="nav-dropdown absolute z-10 bg-white hidden mt-2">
                        <li><a href="#!" class="block px-4 py-2 text-sm text-gray-700">Web Design</a></li>
                        <li><a href="#!" class="block px-4 py-2 text-sm text-gray-700">Web Development</a></li>
                        <li><a href="#!" class="block px-4 py-2 text-sm text-gray-700">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Pricing</a>
                </li>
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hover:border-white hover:border-2 hover:border-opacity-50">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</section>


{{-- <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="#!">LOGO</a>
      </div>
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        <ul class="nav-list">
          <!-- Setting the links to #! will ensure that no action takes place on click. -->
          <li><a href="#!">Home</a></li>
          <li><a href="#!">About</a></li>
          <li><a href="#!">Services</a>
            <ul class="nav-dropdown">
              <li><a href="#!">Web Design</a></li>
              <li><a href="#!">Web Development</a></li>
              <li><a href="#!">Graphic Design</a></li>
            </ul>
          </li>
          <li><a href="#!">Pricing</a></li>
          <li><a href="#!">Contact</a></li>
        </ul>
      </nav>
    </div>
  </section> --}}
