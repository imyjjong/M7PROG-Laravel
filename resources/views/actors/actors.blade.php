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
    <main class="w-full h-full flex justify-between items-start px-56 py-2 gap-2">
        <section class="w-4/6 flex flex-col gap-4">
            <article class="border-b w-full pb-2">
                <h3>FILMS STARRING</h3>
                <h2 class="font-bold text-2xl">{{ $actors }}</h2>
            </article>
            <div class="w-full flex flex-wrap justify-start items-center gap-4">
                @foreach($movies as $movie)
                    <article class="group/item relative mb-4 w-32 h-auto">
                        <img src="{{ $movie->image }}" alt="" class="w-full h-full object-contain hover:cursor-pointer hover:brightness-[0.1]">
                        <div class="invisible group-hover/item:visible absolute bottom-0 left-0 flex flex-col justify-center align-center p-4"> 
                            <h2 class="text-accentHover text-sm font-bold">{{ $movie->title }}</h2>
                            <h2 class="text-color text-sm">{{ $movie->year }}</h2>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
        <aside>
            <img class="w-64 rounded-lg" src="{{ $url }}" alt="">
        </aside>
    </main>
</body>
</html>