<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href={{ asset('User/style.css') }}>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Side Navigation -->
    <div class="flex space-x-3 p-1 mt-3 ml-1 h-full w-full">
        <!-- Side Navigation -->
        <aside class="bg-gray-200 w-1/4 h-screen fixed rounded-3xl shadow-lg ">
            <div class="grid grid-rows-5">
                <div class="p-4 text-xl font-bold text-center  ">Logo</div>

                <div class="p-4 text-center border  ">
                    <img src="" alt="" class="rounded-full w-32 h-32 mx-auto">
                    <h1 class="text-xl font-bold">Sazzad Hossain</h1>
                    <h4 class="text-gray-600">email</h4>
                </div>
            </div>


            <nav class="content-center pl-20">
                <div class="items-center">
                    <ul class="flex flex-col gap-10  ">
                        <li class="flex items-center">
                            <span class="material-symbols-outlined">dashboard_customize</span>
                            <a href="#" class="p-2 text-gray-700 hover:bg-gray-300 hover:underline">Dashboard</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined">person</span>
                            <a href="#" class="p-2 text-gray-700 hover:bg-gray-300 hover:underline">Profile</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined">settings</span>
                            <a href="#" class="p-2 text-gray-700 hover:bg-gray-300 hover:underline">Settings</a>
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined">logout</span>
                            <a href="#" class="p-2 text-gray-700 hover:bg-gray-300 hover:underline">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </aside>


        <!-- Main Content -->
        <main id="side" class=" flex h-screen  w-full flex-row-reverse ">
            <!-- Content Section 2 -->
            <section id="calender" class="bg-white rounded-lg shadow-lg h-screen p-2  w-1/4">
                <h2 class="text-xl font-bold mb-2">Calendar</h2>
                <div class="calendar">
                    <div class="header">
                        <div class="month">May 2023</div>
                        <div class="days">Sun Mon Tue Wed Thu Fri Sat</div>
                    </div>
                    <div class="body">
                        <div class="week">
                            <div class="day">1</div>
                            <div class="day">2</div>
                            <div class="day">3</div>
                            <div class="day">4</div>
                            <div class="day">5</div>
                            <div class="day">6</div>
                            <div class="day">7</div>
                        </div>
                        <!-- Repeat the week div for each row of the calendar -->
                        <!-- Example: -->
                        <!-- <div class="week">...</div> -->
                    </div>
                </div>
            </section>

            <!-- Content Section 3 -->
            <section class="bg-white p-1 rounded-lg shadow-lg h-screen w-3/6">

                <div class="grid grid-cols-2 ">
                    <div>
                        <h2 class="text-xl font-bold mb-2">Hello, Sazzad</h2>
                        <p>Today is Monday,24 June 2021</p>
                    </div>
                    <div>
                        <p>search</p>
                        <p>Add new task</p>
                    </div>

                </div>

                <div class="flex flex-row m-1 p-1 ">
                    <div id="mainAA" class="w-1/3 border h-96 rounded-3xl  ">1</div>
                    <div id="mainAB" class="w-1/3 border h-96 rounded-3xl  ">2</div>
                    <div id="mainAC" class="w-1/3 border h-96 rounded-3xl  ">3</div>
                </div>
                <div class="flex gap-4 " id="task">
                    <div class="">
                        <h1>Tasks For Today</h1>
                        <div class="flex flex-col">
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                        </div>
                    </div>
                    <div class="">
                        <h1>Statistics</h1>
                        <div class="grid grid-cols-3">
                            <div class="">1</div>
                            <div class="">2</div>
                            <div class="">3</div>
                        </div>
                        <div class="">
                            1
                        </div>
                    </div>

                </div>


            </section>
        </main>
    </div>
</body>
</html>
