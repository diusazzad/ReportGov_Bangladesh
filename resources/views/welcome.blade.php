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
    <link rel="stylesheet" href="{{ asset('welcome/css/svg.css') }}">


    @vite('resources/css/app.css')
</head>

<body class="m-1 p-1 ">


    <div class=" text-white shadow-lg rounded-3xl mt-2 container h-vh-500 scroll" id="main">

        <div class="grid grid-cols-5 gap-1 text-2xl text-slate-950 font-mono data-rate=".4" data-direction="vertical"" id="nav">
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
        <div class=" m-1 p-1 items-center " id="layoutA"data-rate=".2" data-direction="vertical">



            <div class=" grid grid-cols-1" id="layoutAA">
                <div class="text-center h-72 flex justify-center items-center" id="layoutAAA">
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
            class="grid grid-cols-4 text-3xl m-3 pl-10 rounded-2xl text-black italic font-sans tracking-widest uppercase bg-gradient-to-r from-indigo-200 from-10% via-sky-100 via-40% to-emerald-300 to-90%">

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
        <!-- component -->

        <section class="text-gray-600 body-font">
            <div class="">
                <div class="flex flex-col text-center w-full ">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac
                        Heirloom</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon
                        brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't
                        heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac
                        humblebrag.</p>
                </div>
                <div class="flex flex-wrap  text-center">
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                viewBox="0 0 24 24">
                                <path d="M8 17l4 4 4-4m-4-5v9"></path>
                                <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                            <p class="leading-relaxed">Downloads</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                            <p class="leading-relaxed">Users</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                viewBox="0 0 24 24">
                                <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                <path
                                    d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z">
                                </path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
                            <p class="leading-relaxed">Files</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                            <p class="leading-relaxed">Places</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">RGBD</span>
                    </a>
                    <ul
                        class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">RGBD</a>. All Rights Reserved.</span>
            </div>
        </footer>


    </div>



</body>

</html>
<script src="{{ asset('welcome/js/cursor.js') }}"></script>
<script src="{{ asset('welcome/js/svg.js') }}"></script>
