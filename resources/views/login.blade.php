<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Halaman Login Pakan Ternak
        </title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <section class="bg-gray-900">
            <div class="flex flex-col items-center justify-center h-screen">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-white">
                    <img class="w-8 h-10 mr-2" src="../assets/img/UKDW.png" alt="logo">
                    Sistem Informasi Pakan Ternak    
                </a>
                <div class="w-full rounded-lg border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white">
                            Sign in to your account!
                        </h1>
                        {{-- alert start --}}
                        @if ($errors->any())
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                @foreach ($errors->all() as $item)
                                    {{ $item }}
                                @endforeach
                            </div>
                        </div>
                        @endif
                        {{-- alert end --}}
                        <form class="space-y-4 md:space-y-6" action="/" method="post">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                                <input type="email" name="email" id="email" class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:border-white outline-none" placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:border-white outline-none" required>
                            </div>
                            <div>
                                <button type="submit" class="bg-blue-700 text-white font-normal text-center w-full rounded-lg p-3 hover:bg-blue-500">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                            ASDOS RPL 2023.
                            You accessed on {{$date}}
                        </p>
                    </div>
                </div>
            </footer>
        </section>
    </body>
</html>
