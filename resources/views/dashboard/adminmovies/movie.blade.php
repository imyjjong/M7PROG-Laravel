<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background text-color flex flex-col justify-start">
    @include('layouts.secondHeader')
    <section class="absolute -top-[19px] w-fit h-full flex flex-col justify-center items-end px-28">
        <figure class="relative w-full h-full flex justify-center items-center overflow-hidden">
                <img class="w-[95%] h-full object-contain" src="{{ $movie->backdrop }}" alt="">
                <div class="w-[95%] h-full absolute shadow-[rgba(25,25,25,1)inset_0px_-30px_90px_50px] top-0 mix-blend-normal"></div>
                <div class="w-[95%] h-full absolute shadow-[rgba(25,25,25,1)inset_0px_-40px_30px_50px] top-0 mix-blend-normal"></div>
                <div class="w-[95%] h-full absolute shadow-[rgba(25,25,25,0.9)inset_0px_-250px_30px_50px] top-0 mix-blend-normal"></div>
                <div class="w-[95%] h-[150%] rounded-[20%] absolute shadow-[rgba(25,25,25,0.4)inset_10px_-100px_30px_50px] bottom-0 mix-blend-normal"></div>
                <div class="w-[95%] h-[150%] absolute shadow-[rgba(25,25,25,1)inset_10px_-200px_30px_50px] bottom-0 mix-blend-normal"></div>
        </figure>
    </section>
    <main class="absolute -bottom-72 w-full h-full px-52 flex gap-12 justify-center items-center">
    <aside class="flex justify-center items-start w-fit">
        <img class="w-60 object-contain rounded-lg" src="{{ $movie->image }}" alt="{{ $movie->title }} movie poster">
    </aside>
    <section class="relative w-4/6 h-fit flex flex-col justify-center items-center">
        <div class="absolute -bottom-24 w-full flex flex-col justify-center items-start gap-6">
            <span class="flex justify-start items-end gap-4 w-full">
                <h2 class="text-3xl font-bold">{{ $movie->title }}</h2>
                <p class="text-xl">{{ $movie->year }}</p>
            </span>
            <div class="flex gap-8">
            <article class="w-96 h-full flex flex-col justify-center items-start">
                <p class="pb-4">{{ $movie->intro }}</p>
                <p>{{ $movie->description }}</p>
            </article>
            <div class="bg-lighten transition-transform flex flex-col w-72 h-fit justify-center items-end gap-4 p-4">
                <ul class="flex justify-center items-center gap-10 border-b w-full py-3">
                    <li class="flex flex-col justify-center items-center">
                        <i class="{{ $movie->watched }} text-4xl"></i>
                        <p>@if(old('watched', $movie->watched === 'fas fa-eye')) Watched @else Watchlist @endif</p>
                    </li>
                    <li class="flex flex-col justify-center items-center">
                        <i class="{{ $movie->like }} text-4xl"></i>
                        <p>@if(old('watched', $movie->like === 'fas fa-heart')) Liked @else Like @endif</p>
                    </li>
                    <li class="flex flex-col justify-center items-center">   
                        <a href="{{ route('adminmovies.edit', ['adminmovie' => $movie->id]) }}"><i class="fas fa-pen text-4xl"></i></a>
                        <p>Edit</p>
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
        </div>
    </section>
    <div class="absolute bottom-0 w-full">
        @include('layouts.partials.moviesFooter')
    </div>
    </main>
</body>
</html>