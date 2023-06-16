<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="#!" class="text-white uppercase text-lg">Logo</a>
                </div>
                <div class="hidden md:block">
                    <ul class="flex space-x-4">
                        <li>
                            <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                        </li>
                        <li>
                            <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
                        </li>
                        <li>
                            <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
                        </li>
                        <li>
                            <a href="#!" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="flex md:hidden">
                    <button id="nav-toggle" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path v-if="!isOpen" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path v-else d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="nav-dropdown" class="md:hidden hidden bg-gray-700">
            <ul class="px-2 py-3 space-y-1">
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                </li>
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
                </li>
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
                </li>
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Pricing</a>
                </li>
                <li>
                    <a href="#!" class="text-gray-300 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#nav-toggle').click(function() {
                $('#nav-dropdown').slideToggle();
            });
        });
    </script>
</body>
</html>
