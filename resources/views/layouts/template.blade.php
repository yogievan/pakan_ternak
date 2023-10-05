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

</head>
<body class="font-sans bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-500 p-4 text-white">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
    </header>

    <!-- Sidebar -->
    <aside class="bg-blue-700 text-white w-64 min-h-screen p-4">
        <nav>
            <ul>
                <li class="mb-2"><a href="#" class="block p-2 rounded hover:bg-blue-600">Home</a></li>
                <li class="mb-2"><a href="#" class="block p-2 rounded hover:bg-blue-600">Dashboard</a></li>
                <li class="mb-2"><a href="#" class="block p-2 rounded hover:bg-blue-600">Settings</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-4">
        <!-- Your content goes here -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Welcome to the Dashboard</h2>
            <!-- Add your content components here -->
        </div>
    </main>

</body>
</html>