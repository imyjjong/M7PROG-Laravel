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
        <section class="bg-lighten w-full flex flex-col justify-center items-center">
            <ul class="w-full bg-background grid grid-cols-[60%_10%_10%_10%_10%] px-4 py-2 border-y">
                <li class="flex justify-start items-center">FILM</li>
                <li class="flex justify-center items-center">RELEASE</li>
                <li class="flex justify-center items-center">WATCHED</li>
                <li class="flex justify-center items-center">LIKE</li>
                <li class="flex justify-center items-center">EDIT</li>
            </ul>
            @foreach($movies as $movie)
            <article class="w-full grid grid-cols-[60%_10%_10%_10%_10%] px-4 py-2 border-b border-border">
                <div class="p-2 flex justify-start items-center gap-4">
                    <img class="w-14 object-contain" src="{{ $movie->image }}" alt="">
                    <h2 class="font-bold text-2xl hover:text-flashyButton hover:cursor-pointer">{{ $movie->title }}</h2>
                </div>
                <div class="flex justify-center items-center">
                    <p class="">{{ $movie->year }}</p>
                </div>
                <div class="flex justify-center items-center"><i class="{{ $movie->watched }} text-accent"></i></div>
                <div class="flex justify-center items-center"><i class="{{ $movie->like }} text-accent"></i></div>
                <div class="flex justify-center items-center">
                    <a href="{{ route('adminmovies.edit', ['adminmovie' => $movie]) }}"><i class="fas fa-pen"></i></a>
                </div>
            </article>
            @endforeach
            <span class="flex justify-center items-center p-4">{{ $movies->links() }}</span>
        </section>
    </main>
</body>
</html>