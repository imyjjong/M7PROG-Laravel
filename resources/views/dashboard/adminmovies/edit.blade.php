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
        <h2 class="font-bold text-2xl border-b border-accentHover w-8/12 flex justify-center items-center pb-2">Edit {{$movie->title}}</h2>
        <form class="flex flex-col justify-center items-start gap-2" action="{{ route('adminmovies.update', ['adminmovie' => $movie]) }}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            @include('dashboard.adminmovies.form', ['movie' => $movie])
            <input class="font-bold bg-accent px-4 py-2 mt-2 rounded-md hover:bg-accentHover hover:cursor-pointer" type="submit">
        </form>
    </section>
    </main>
    <div class="absolute bottom-0 w-full">
        @include('layouts.partials.moviesFooter')
    </div>
</body>
</html>