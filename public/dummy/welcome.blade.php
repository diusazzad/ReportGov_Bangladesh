<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css', 'resources/js/app.js')

</head>

<body class="">
    <div>welcome </div>
    <div class="" >
        <example />
        <a href=""></a>
        @if (Route::has('login'))
            <div class="">

                @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
                @else
                    <a href="{{ route('login') }}" class="">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ url('/logout') }}" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Log out</a>
                    @endif
                @endauth
            </div>
        @endif


    </div>

    <div class="" id="searchBar">

    </div>
</body>

</html>
