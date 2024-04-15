<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="min-h-screen bg-background text-color flex flex-col justify-start">
    @include('layouts.site')
    <main class="w-full h-full px-28 flex flex-col justify-center items-center">
        <section class="relative w-fit h-full flex flex-col justify-center items-center">
            <div class="absolute z-50 top-0 right-1 bg-background shadow-[rgba(0,0,0,1)_0px_10px_10px_0px] w-30 h-full"></div>
            <img class="w-5/6 h-full object-contain brightness-50" src="{{ $movie->backdrop }}" alt="">
            <div class="absolute bottom-0 bg-background shadow-[rgba(25,25,25,1)_0px_-90px_10px_10px] w-full h-24"></div>
            <div class="absolute -bottom-48 w-full flex justify-center items-center gap-20">
                <figure>
                    <img class="w-60 h-full object-contain" src="{{ $movie->image }}" alt="{{ $movie->title }} movie poster">
                </figure>
                <article class="w-80 h-full flex flex-col justify-center items-start">
                    <span class="flex justify-start items-end gap-2 w-80">
                        <h2 class="text-3xl font-bold">{{ $movie->title }}</h2>
                        <p class="text-xl">{{ $movie->year }}</p>
                    </span>
                    <p class="py-4">{{ $movie->intro }}</p>
                    <p>{{ $movie->description }}</p>
                    <p class="bg-lighten shadow-lg">{{ $movie->mainCast }}</p>
                </article>
                <div class="bg-accentHover flex w-60 h-80 justify-center items-start gap-8 p-4">
                    <ul class="flex justify-center items-center gap-8">
                        <li class="flex flex-col justify-center items-center">
                            <i class="{{ $movie->watched }} text-4xl"></i>
                            <p>@if(old('watched', $movie->watched === 'fas fa-eye')) Watched @else Watch @endif</p>
                        </li>
                        <li class="flex flex-col justify-center items-center">
                            <i class="{{ $movie->like }} text-4xl"></i>
                            <p>@if(old('watched', $movie->like === 'fas fa-heart')) Liked @else Like @endif</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <!-- @include('layouts.partials.moviesFooter') -->
</body>
</html>