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
    <main class="w-full h-full py-4 px-20">
        <section class="bg-lighten">
            <img class="w-full h-full object-contain" src="{{ $movie->backdrop }}" alt="">
            <h2>{{ $movie->title }}</h2>
            <img class="w-40 h-full object-contain" src="{{ $movie->image }}" alt="{{ $movie->title }} movie poster">
            <p>{{ $movie->description }}</p>
        </section>
    </main>
    @include('layouts.partials.moviesFooter')
</body>
</html>