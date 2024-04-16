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
    <main class="absolute -top-[17px] w-full h-full px-28 flex flex-col justify-center items-center">
        <section class="relative w-fit h-full flex flex-col justify-center items-center">
            <figure class="relative w-full h-full flex justify-center items-center overflow-hidden">
                <img class="w-[95%] h-full object-contain" src="{{ $movie->backdrop }}" alt="">
                <div class="w-[95%] h-full absolute shadow-[rgba(25,25,25,1)inset_0px_-30px_90px_50px] top-0 mix-blend-normal"></div>
                <div class="w-[95%] h-full absolute shadow-[rgba(25,25,25,1)inset_0px_-40px_30px_50px] top-0 mix-blend-normal"></div>
                <div class="w-[95%] h-full absolute shadow-[rgba(25,25,25,0.9)inset_0px_-250px_30px_50px] top-0 mix-blend-normal"></div>
                <div class="w-[95%] h-[150%] rounded-[20%] absolute shadow-[rgba(25,25,25,0.4)inset_10px_-100px_30px_50px] bottom-0 mix-blend-normal"></div>
                <div class="w-[95%] h-[150%] rounded-[25%] absolute shadow-[rgba(25,25,25,0.8)inset_10px_-200px_30px_50px] bottom- mix-blend-normal"></div>
            </figure>
            <div class="absolute -bottom-24 w-full flex justify-center items-start gap-10">
                <figure class="flex flex-col justify-center items-start">
                    <img class="w-60 object-contain rounded-lg" src="{{ $movie->image }}" alt="{{ $movie->title }} movie poster">
                </figure>
                <article class="w-96 h-full flex flex-col justify-center items-start">
                    <span class="flex justify-start items-end gap-2 w-80">
                        <h2 class="text-3xl font-bold">{{ $movie->title }}</h2>
                        <p class="text-xl">{{ $movie->year }}</p>
                    </span>
                    <p class="py-4">{{ $movie->intro }}</p>
                    <p>{{ $movie->description }}</p>
                </article>
                <div class="bg-lighten transition-transform flex flex-col w-72 h-fit justify-center items-end gap-8 p-4">
                    <ul class="flex justify-center items-center gap-10 border-b w-full py-3">
                        <li class="flex flex-col justify-center items-center">
                            <i class="{{ $movie->watched }} text-4xl"></i>
                            <p>@if(old('watched', $movie->watched === 'fas fa-eye')) Watched @else Watchlist @endif</p>
                        </li>
                        <li class="flex flex-col justify-center items-center">
                            <i class="{{ $movie->like }} text-4xl"></i>
                            <p>@if(old('watched', $movie->like === 'fas fa-heart')) Liked @else Like @endif</p>
                        </li>
                    </ul>
                    <article class="cast-members w-full h-full shadow-lg flex justify-start items-center gap-2 flex-wrap">
                    @php
                        $mainCastArray = explode(', ', $movie->mainCast);
                    @endphp
                    @foreach($mainCastArray as $castMember)
                        <form action="{{ route('actors.actors') }}" method="POST">
                            @method('POST')
                            @csrf
                            <input type="hidden" name="castName" value="{{ $castMember }}">
                            <button type="submit" class="bg-cast text-castText w-max py-0.5 px-2 rounded-sm shadow flex justify-center items-center hover:cursor-pointer hover:brightness-110">{{ $castMember }}</button>
                        </form>
                    @endforeach
                </article>
                </div>
            </div>
        </section>
    </main>
    <!-- @include('layouts.partials.moviesFooter') -->
</body>
</html>