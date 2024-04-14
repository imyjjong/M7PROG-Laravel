<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="min-h-screen bg-background text-color flex flex-col justify-start gap-8">
    @include('layouts.site')
    <main class="flex justify-center items-center w-full h-full">
    <section class="bg-lighten rounded-sm flex flex-col justify-center items-center gap-4 w-2/5 h-full py-6 px-10">
            @csrf
            @include('dashboard.adminmovies.form', ['movie' => $movie])
    </section>
    </main>
</body>
</html>