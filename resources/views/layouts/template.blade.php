<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Tanpa Judul')
    </title>
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- fontawesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>


</head>
<body class="font-sans bg-gray-100">

    <!-- Header -->
    <header class="border-b shadow-md dark:bg-gray-800 dark:border-gray-700 p-4 text-white">
        <div class="flex">
            <a href="#/dashboard/peternak">
                <div class="flex">
                    <img class="w-8 h-10 mr-2 my-auto" src="../assets/img/UKDW.png" alt="logo">
                    <h1 class="text-2xl font-semibold my-auto">
                        Sistem Informasi Pakan Ternak
                    </h1>
                </div>
            </a>
            <p class="ml-auto mr-5 my-auto font-semibold">
                <-- USERNAME -->
            </p>
            <div class="mr-10">
                <div class="w-[50px]">
                    <img src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                </div>
            </div>
            <div class="my-auto">
                <a href="#logout">
                    <button class="bg-transparent border-2 border-red-600 text-red-600 font-bold py-2 px-4 rounded hover:bg-red-600 hover:text-white">
                        LOG OUT
                    </button>
                </a>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="dark:bg-gray-800 dark:border-gray-700 text-white w-64 min-h-screen p-4 ">
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="#/dashboard/peternak" class="block p-2 rounded hover:bg-gray-400 hover:text-gray-800">
                            <i class="fa fa-house mr-3"></i> Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#/form/order/pakan" class="block p-2 rounded hover:bg-gray-400 hover:text-gray-800">
                            <i class="fa fa-truck-ramp-box mr-3"></i> Form Order Pakan
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#/data/peternak" class="block p-2 rounded hover:bg-gray-400 hover:text-gray-800">
                            <i class="fa fa-database mr-3"></i> Data Peternak
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#/stok/pakan" class="block p-2 rounded hover:bg-gray-400 hover:text-gray-800">
                            <i class="fa fa-boxes-stacked mr-3"></i> Stok Pakan
                        </a>
                    </li>
                    <!-- Add more navigation links as needed -->
                </ul>
            </nav>
        </aside>
    
        <!-- Main Content -->
        <main class="flex p-4">
            <!-- Your content goes here -->
            <div class="py-3 pl-5 pr-5 font-bold text-gray-800">
                <p class="text-2xl font-normal my-auto mb-3"> Dashboard Peternak</p>
                
                <!-- Add your content components here -->
                <div class="grid grid-cols-4 gap-4">
                    {{-- card --}}
                    <div class="bg-white rounded shadow p-3 w-[250px] border">
                        <div class="grid grid-cols-2">
                            <div class="w-[120px]">
                                <p class="text-lg font-medium">Data Ternak Sapi</p>
                                <hr class="my-2">
                                <p class="text-sm font-normal">
                                    keterangan
                                </p>
                            </div>
                            <div class="ml-auto w-[80px]">
                                <img class="w-[70px]" src="../assets/img/sapi.png" alt="icon_sapi">
                            </div>
                        </div>
                    </div>
                    {{-- card --}}
                    <div class="bg-white rounded shadow p-3 w-[250px] border">
                        <div class="grid grid-cols-2">
                            <div class="w-[120px]">
                                <p class="text-lg font-medium">Data Ternak Puyuh</p>
                                <hr class="my-2">
                                <p class="text-sm font-normal">
                                    keterangan
                                </p>
                            </div>
                            <div class="ml-auto w-[80px]">
                                <img class="w-[70px]" src="../assets/img/puyuh.png" alt="icon_puyuh">
                            </div>
                        </div>
                    </div>
                    {{-- card --}}
                    <div class="bg-white rounded shadow p-3 w-[250px] border">
                        <div class="grid grid-cols-2">
                            <div class="w-[120px]">
                                <p class="text-lg font-medium">Data Ternak Ayam</p>
                                <hr class="my-2">
                                <p class="text-sm font-normal">
                                    keterangan
                                </p>
                            </div>
                            <div class="ml-auto w-[80px]">
                                <img class="w-[70px]" src="../assets/img/ayam.png" alt="icon_ayam">
                            </div>
                        </div>
                    </div>
                    {{-- card --}}
                    <div class="bg-white rounded shadow p-3 w-[250px] border">
                        <div class="grid grid-cols-2">
                            <div class="w-[120px]">
                                <p class="text-lg font-medium">Data Ternak Kambing</p>
                                <hr class="my-2">
                                <p class="text-sm font-normal">
                                    keterangan
                                </p>
                            </div>
                            <div class="ml-auto w-[80px]">
                                <img class="w-[70px]" src="../assets/img/kambing.png" alt="icon_kambing">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    {{-- card --}}
                    <div class="bg-white rounded shadow p-3 border">
                        <div>
                            <p class="text-lg font-bold">Data Silo Pakan Ternak</p>
                            <hr class="my-2">
                            <p class="text-sm font-normal">
                                keterangan
                            </p>
                        </div>
                    </div>
                    {{-- card --}}
                    <div class="bg-white rounded shadow p-3 border">
                        <div>
                            <p class="text-lg font-bold">Stok Tipis</p>
                            <hr class="my-2">
                            <p class="text-sm font-normal">
                                keterangan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Footer -->
    @php
        $date = date("l, d F Y");
    @endphp
    <footer class="border-t shadow-md dark:bg-gray-800 dark:border-gray-700 p-4 text-white">
        <div class="flex gap-2">
            <i class="fa-solid fa-circle-info my-auto"></i>
            <p class="pl-3 text-white">
                Dibuat oleh ASDOS RPL 2023
                {{$date}}
            </p>
        </div>
    </footer>
</body>
</html>