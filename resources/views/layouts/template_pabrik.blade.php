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

    <!--font poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

</head>
<body class="font-sans bg-gray-100">

    <!-- Header -->
    <header class="border-b shadow-md dark:bg-gray-800 dark:border-gray-700 p-4 text-white">
        <div class="flex">
            <a href="#/dashboard/pabrik">
                <div class="flex gap-2">
                    <img class="w-8 h-10 mr-2 my-auto" src="../assets/img/UKDW.png" alt="logo">
                    <h1 class="text-2xl font-semibold my-auto">
                        Sistem Informasi Pakan Ternak
                    </h1>
                </div>
            </a>
            <p class="ml-auto mr-5 my-auto font-semibold">
                @php
                    $name = Auth::user()->name
                @endphp
                {{ $name }}
            </p>
            <div class="mr-10">
                <div class="w-[50px]">
                    <img src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                </div>
            </div>
            <div class="my-auto">
                <a href="/logout">
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
                        <a href="{{ route('dashboard_peternak') }}" class="block p-2 rounded hover:bg-gray-400 hover:text-gray-800">
                            <i class="fa fa-house mr-3"></i> Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('data_peternak') }}" class="block p-2 rounded hover:bg-gray-400 hover:text-gray-800">
                            <i class="fa fa-database mr-3"></i> Data Peternak
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
                <p class="text-[2em] font-normal my-auto mb-3">
                    @yield('judul_konten')
                </p>
                
                <!-- Add your content components here -->
                @yield('konten')
            </div>
        </main>
    </div>
    <!-- Footer -->
    @php
        $date = date("l, d F Y");
    @endphp
    <footer class="border-t shadow-md dark:bg-gray-800 dark:border-gray-700 p-4 text-white">
        <div class="flex justify-between">
            <div class="flex gap-2">
                <p class="pl-3 font-bold text-white">
                    Sistem Informasi Pakan Ternak
                </p>
            </div>
            <div class="flex gap-2 justify-end">
                <i class="fa-solid fa-circle-info my-auto"></i>
                <p class="pl-3 text-white">
                    Dibuat oleh ASDOS RPL 2023.
                    {{$date}}
                </p>
            </div>
        </div>
    </footer>
</body>
</html>