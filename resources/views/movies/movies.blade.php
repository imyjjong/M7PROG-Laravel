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
    <main class="flex flex-col justify-center align-center gap-10 px-96 py-12">
    <section class="flex flex-col gap-8">
        <h2 class="text-color text-2xl font-medium border-b-2">FAVORITE FILMS</h2>
        <div class="flex justify-center align-center gap-8">
            @foreach($movies as $movie)
                <article class="group/item relative mb-4 w-1/3 h-auto">
                <a href="{{ route('adminmovies.show', ['adminmovie' => $movie]) }}">
                    <img src="{{ $movie->image }}" alt="" class="w-full h-full object-contain hover:cursor-pointer hover:brightness-[0.1]">
                    <div class="invisible group-hover/item:visible absolute bottom-0 left-0 flex flex-col justify-center align-center p-4"> 
                        <h2 class="text-accentHover text-2xl font-bold">{{ $movie->title }}</h2>
                        <h2 class="text-color text-xs font-bold">{{ $movie->mainCast }}</h2>
                        <h2 class="text-accentHover">{{ $movie->year }}</h2>
                    </div>
                </a>
                </article>
            @endforeach
        </div>
    </section>
    @include('layouts.partials.watchlist')
    @include('layouts.partials.watched')
</main>
@include('layouts.partials.moviesFooter')
</body>
</html>