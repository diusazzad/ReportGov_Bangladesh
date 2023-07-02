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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    {{-- Custom --}}
    <link rel="stylesheet" href={{ asset('User/style.css') }}>
    <link rel="stylesheet" href="{{ asset('welcome/css/style.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="m-1 p-1">
    <div class="border text-white" id="main">

        <div class="grid grid-cols-5 gap-1 text-1xl " id="nav">
            <div class="border p-1 col-span-1" id="navLogo">logo</div>
            <div class="p-1 col-span-3" id="navFeatures">
                <a href="">Feature</a>
                <a href="">Resource</a>
                <a href="">Donate</a>
                <a href="">Education</a>
            </div>
            <div class="border p-1 col-span-1" id="navLogin">
                <a href="">Login</a>
                <a href="">Register</a>
            </div>
        </div>



        {{-- Layout A --}}
        <div class="border m-1 p-1 items-center" id="layoutA">
            <div class="border grid grid-cols-2" id="layoutAA">
                <div class="text-center gap-4 " id="layoutAAA">
                    <h1 class="text-5xl">Welcome to Report Gov Bangladesh</h1>
                    <p class="text-3xl">The Idea is to help the people
                        in bangladesh, where they can have goverment services
                        with right freedom.If any service they do not get in the
                        right time they can report to the goverment.
                    </p>

                    <input class="border-2 border-black" type="text">
                    <button class="border">Submit</button>
                </div>

                <div class="border" id="layoutAAB">
                    <img class="h-fit w-fit rounded-lg shadow-lg object-cover" src="{{ asset('welcome/img/b.jpg') }}" alt="" >

                </div>
            </div>

        </div>

        <div class="grid grid-cols-4 text-4xl">
            <div class="">
                <div class="">
                    <div>icon</div>
                    <div>Shared Inbox</div>
                    <div>Message</div>
                </div>

            </div>
            <div class="">
                <div class="">
                    <div>icon</div>
                    <div>Shared Inbox</div>
                    <div>Message</div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div>icon</div>
                    <div>Shared Inbox</div>
                    <div>Message</div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div>icon</div>
                    <div>Shared Inbox</div>
                    <div>Message</div>
                </div>
            </div>
        </div>
        <div class="text-center text-black text-5xl h-40 border items-center">
            What you Can do with ReportGovBD
        </div>

    </div>

</body>

</html>
