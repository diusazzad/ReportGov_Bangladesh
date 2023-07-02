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

            <!--Card-->
            <div id='recipients' class="p-1 mt-1 lg:mt-0 rounded shadow bg-white">
                <div class="mb-4">
                    <input type="text" id="search" class="border border-gray-500 rounded px-4 py-2"
                        placeholder="Search...">
                </div>
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <!-- Rest of your table code -->
                </table>
            </div>
            <div class="p-1" id="work">
                <div class="grid grid-cols-2 gap-1">
                    <div class="bg-white p-4 rounded-lg shadow h-96">
                        <div class="grid grid-cols-2 border p-2 rounded-2xl items-center">
                            <h1 class="float-left">Savings</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>

                        </div>

                    </div>
                    <div class="bg-zinc-200 m-1 p-4 rounded-lg shadow h-96">
                        <div class="grid grid-cols-2 border rounded-2xl p-1 items-center">
                            <h1>Team Payments</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-8 h-8">
                                <path
                                    d="M10.75 10.818v2.614A3.13 3.13 0 0011.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 00-1.138-.432zM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 00-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152z" />
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-6a.75.75 0 01.75.75v.316a3.78 3.78 0 011.653.713c.426.33.744.74.925 1.2a.75.75 0 01-1.395.55 1.35 1.35 0 00-.447-.563 2.187 2.187 0 00-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 11-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 111.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 01-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 011.653-.713V4.75A.75.75 0 0110 4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow h-96">
                        <div class="grid grid-2 shadow">

                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow h-96">Work 4</div>
                </div>
            </div>

            <div class="p-4" id="">
                <h1 class="text-2xl font-bold mb-4">Recent Activity</h1>
                <div class="bg-white p-4 rounded-lg shadow ">

                    <!--/Card-->
                    <div class="bg-zinc-200 mt-4 p-2 rounded-md h-44">
                        <table id="example" class="stripe hover w-full pt-4 pb-4">
                            <thead>
                                <tr class="">
                                    <th data-priority="1">Id</th>
                                    <th data-priority="2">Name</th>
                                    <th data-priority="1">Email</th>
                                    <th data-priority="2">Role</th>
                                </tr>
                            </thead>
                            <tbody class="gap-2">
                                @php
                                    $users = DB::table('users')
                                        ->select('id', 'name', 'email', 'role')
                                        ->get();
                                @endphp

                                @foreach ($users as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->role }}</td>
                                    </tr>
                                @endforeach

                                {{-- <div class="d-flex justify-content-center">
                                    {!! $data->links() !!}
                                </div> --}}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('table#example tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
@endpush
