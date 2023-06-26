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
    @vite('resources/css/app.css')
</head>

<body class="">
    <div>hello welcome</div>
    <div class="flex flex-row">
        {{-- SideBar --}}
        <div class="flex flex-col h-screen w-74 bg-gray-800 text-white w-1/5 m-2 rounded-3xl drop-shadow-2xl p-2"
            id="sideNav">
            <div class="flex items-center justify-center h-20 border-b border-gray-700" id="logo">Logo</div>
            <div class="py-4 pl-10" id="mainMenu">
                <ul class="flex flex-col gap-10">
                    <li class=" hover:bg-gray-700 flex items-center">
                        <span class="material-symbols-outlined">dashboard_customize</span>
                        <a href="#" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Dashboard</a>
                    </li>

                    <li class=" hover:bg-gray-700 flex items-center">
                        <span class="material-symbols-outlined">person</span>
                        <a href="#" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Users</a>
                    </li>
                    <li class=" hover:bg-gray-700 flex items-center">
                        <span class="material-symbols-outlined">
                            account_box
                        </span>
                        <a href="#" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Accounts</a>
                    </li>
                    <li class="hover:bg-gray-700 flex items-center">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                        <a href="#" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Statistics</a>
                    </li>

                </ul>
            </div>
            <div class="py-4 pl-10" id="teams">
                <li class=" hover:bg-gray-700 flex items-center">
                    <span class="material-symbols-outlined">
                        deployed_code
                    </span>
                    <a href="#" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Development</a>
                </li>
            </div>
            <div class="flex-grow"></div>
            <div class="" id="bottomMenu">
                <ul class="space-y-2 pl-10">
                    <li class=" hover:bg-gray-700 flex items-center">
                        <span class="material-symbols-outlined">
                            local_library
                        </span>
                        <a href="#" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Salary</a>
                    </li>
                    <li class="hover:bg-gray-700 flex items-center">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        <a href="#" class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Setting</a>
                    </li>

                    {{-- Logout  --}}
                    <li class="hover:bg-gray-700 flex items-center">
                        <span class="material-symbols-outlined">
                            toggle_off
                        </span>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="hover:bg-gray-300 hover:underline hover:text-cyan-500">Log out</a>
                    </li>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>




                </ul>
            </div>
        </div>

        {{-- Main Menu --}}
        <main class=" h-screen bg-gray-100 w-9/12 m-2 rounded-3xl drop-shadow-2xl p-2" id="">
            <div class="flex items-center justify-between p-4 bg-white" id="topNav">
                <h1 class="text-xl font-bold">Hello, Admin</h1>
                <h1 class="text-xl font-bold">Profile</h1>
            </div>
            <div class="p-4" id="work">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow h-96">Work 1</div>
                    <div class="bg-white p-4 rounded-lg shadow h-96">Work 2</div>
                    <div class="bg-white p-4 rounded-lg shadow h-96">Work 3</div>
                    <div class="bg-white p-4 rounded-lg shadow h-96">Work 4</div>
                </div>
            </div>

            <div class="p-4" id="">
                <h1 class="text-2xl font-bold mb-4">Recent Activity</h1>
                <div class="bg-white p-4 rounded-lg shadow ">
                    <!--Card-->
                    <div id='recipients' class="p-1 mt-1 lg:mt-0 rounded shadow bg-white ">
                        <div class="mb-4">
                            <input type="text" id="search" class="border border-gray-500 rounded px-4 py-2"
                                placeholder="Search...">
                        </div>
                        <table id="example" class="stripe hover"
                            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <!-- Rest of your table code -->
                        </table>
                    </div>
                    <!--/Card-->
                    <div class="bg-zinc-200 mt-4 p-2 rounded-md h-44">
                        <table id="example" class="stripe hover w-full pt-4 pb-4">
                            <thead>
                                <tr>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="2">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <td>{{ $user->name }}</td> --}}
                                    {{-- <td>{{ $user->role }}</td> --}}
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>

