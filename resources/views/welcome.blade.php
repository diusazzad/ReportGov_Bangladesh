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
    <link rel="stylesheet" href="{{ asset('welcome/css/cursor.css') }}">

    <script src="{{ asset('welcome/js/cursor.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body class="m-1 p-1">
    {{-- <div class="container">
        <div class="cursor"></div>
      </div> --}}
    <div class=" text-white shadow-lg container" id="main">

        <div class="grid grid-cols-5 gap-1 text-2xl text-slate-950 font-mono" id="nav">
            <div class=" p-1 col-span-1" id="navLogo">logo</div>
            <div class="p-1 col-span-3" id="navFeatures">
                <a href="">Feature</a>
                <a href="">Resource</a>
                <a href="">Donate</a>
                <a href="">Education</a>
            </div>
            <div class=" p-1 col-span-1" id="navLogin">
                <a href="">Login</a>
                <a href="">Register</a>
            </div>
        </div>



        {{-- Layout A --}}
        <div class=" m-1 p-1 items-center " id="layoutA">
            <div class=" grid grid-cols-1" id="layoutAA">
                <div class="text-center h-72 flex justify-center items-center"
                    id="layoutAAA">
                    <div class="">
                        <h1 class="text-5xl p-1 typing-effect text-">Welcome to Report Gov Bangladesh</h1>
                        <p class="text-3xl">The Idea is to help the people
                            in bangladesh, where they can have goverment services
                            with right freedom.If any service they do not get in the
                            right time they can report to the goverment.
                        </p>

                        <input class="shadow-2xl border-black rounded-3xl w-1/2 m-1" type="text"><br>
                        <button class="shadow-lg rounded hover:bg-gray-900 p-3">Submit</button>
                    </div>

                </div>

                <div class=" flex place-content-center h-96 w-full" id="layoutAAB">

                    <img class="h-96 w-2/5 rounded-lg shadow-lg bg-cover" src="{{ asset('welcome/img/b.jpg') }}"
                        alt="">


                </div>
            </div>

        </div>

        <div
            class="grid grid-cols-4 text-3xl m-3 p-1 text-black italic font-sans tracking-widest uppercase bg-gradient-to-r from-indigo-200 from-10% via-sky-100 via-40% to-emerald-300 to-90%">

            <div class=" h-96 drop-shadow-xl ">
                <div class="flex justify-center items-center h-full ">
                    <div>
                        <div>icon</div>
                        <div>Shared Inbox</div>
                        <div class="underline decoration-sky-500">Message</div>
                    </div>
                </div>

            </div>

            <div class="  h-96 drop-shadow-xl ">
                <div class="flex justify-center items-center h-full">
                    <div>
                        <div>icon</div>
                        <div>Shared Inbox</div>
                        <div>Message</div>
                    </div>
                </div>
            </div>
            <div class="  h-96  drop-shadow-xl ">
                <div class="flex justify-center items-center h-full">
                    <div>
                        <div>icon</div>
                        <div>Shared Inbox</div>
                        <div>Message</div>
                    </div>
                </div>
            </div>
            <div class=" h-96 drop-shadow-xl ">
                <div class="flex justify-center items-center h-full">
                    <div class="">
                        <div>icon</div>
                        <div>Shared Inbox</div>
                        <div>Message</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex text-center text-black text-5xl h-40 items-center justify-center ">
            <p class="">
                What you Can do with ReportGovBD
            </p>
        </div>

    </div>

</body>

</html>
