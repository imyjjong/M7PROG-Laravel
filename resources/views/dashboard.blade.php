<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="min-h-screen bg-background text-color flex flex-col justify-start align-center gap-8">
    @include('layouts.site')
    <main class="w-full px-60 py-4 flex flex-col justify-center items-center">
        <section class="bg-lighten grid grid-rows-4">
            @foreach($movies as $movie)
            <article class="p-2 flex justify-start items-center gap-4">
                <img class="w-14 object-contain" src="{{ $movie->image }}" alt="">
                <h2 class="font-bold text-2xl">{{ $movie->title }}</h2>
                <p class="text-accentHover">{{ $movie->year }}</p>
            </article>
            @endforeach
        </section>
    </main>
</body>
</html>