<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="min-h-screen bg-red bg-gray-700 flex flex-col justify-start align-center gap-8 p-8">
    <header class="text-cyan-600 text-2xl flex justify-center align-center">
        <h2 class="font-bold">header</h2>
    </header>
    <nav class="flex justify-center align-center px-4">
        <ul class="flex justify-center align-center gap-8">
            <li class="text-yellow-400 font-bold hover:text-red-300 focus:text-blue-300"><a href="{{ route('movies.movies') }}">movies</a></li>
            <li class="text-yellow-400 font-bold hover:text-red-300 focus:text-blue-300"><a href="{{ route('about.index') }}">about</a></li>
            <li class="text-yellow-400 font-bold hover:text-red-300 focus:text-blue-300"><a href="{{ route('info.information') }}">information</a></li>
        </ul>
    </nav>
    <main class="bg-white">
        main
    </main>
    <footer>
        footer
    </footer>
</body>
</html>