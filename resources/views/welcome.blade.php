<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script src="//unpkg.com/alpinejs" defer></script>


</head>

<body>

    <div class="" id="">
        <x-welcome.nav-bar/>
    </div>
    <div class="">
        <x-welcome.search/>
    </div>
    <div>
        <x-welcome.accordion/>
    </div>
    <div>
        <x-welcome.cards/>
    </div>
    <div>
        <x-welcome.contactus/>
    </div>

</body>

</html>
