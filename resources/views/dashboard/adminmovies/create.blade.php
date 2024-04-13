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
    <main class="flex justify-center items-center w-full">
    <section class="bg-lighten rounded-sm flex justify-center items-center gap-4 w-2/5 h-80 py-64 px-10">
        <form class="flex flex-col justify-center items-start gap-2" action="{{ route('adminmovies.store') }}" method="POST">
            @csrf
            <label for="title" class="text-color font-medium text-xl">Movie title</label>
            <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="title" value="{{ old('title') }}" placeholder="title">
            @error('title')
            <p class="text-red">{{ $message }}</p>
            @enderror
            <label for="intro" class="text-color font-medium text-xl">intro</label>
            <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="intro" value="{{ old('intro') }}" placeholder="intro">
            @error('intro')
            <p class="text-red">{{ $message }}</p>
            @enderror
            <label for="year" class="text-color font-medium text-xl">Release year</label>
            <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="year" value="{{ old('year') }}" placeholder="year">
            @error('year')
            <p class="text-red">{{ $message }}</p>
            @enderror
            <label for="image" class="text-color font-medium text-xl">Image link</label>
            <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="url" name="image" value="{{ old('image') }}" placeholder="insert image url">
            @error('image')
            <p class="text-red">{{ $message }}</p>
            @enderror
            <label for="description" class="text-color font-medium text-xl">description</label>
            <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="description" value="{{ old('description') }}" placeholder="description">
            @error('description')
            <p class="text-red">{{ $message }}</p>
            @enderror
            <span class="flex justify-center items-center gap-4">
                <label for="watched" class="text-color font-medium text-xs">watched</label>
                <input class="border-2 border-accentHover bg-lighten w-8 h-8 rounded-sm focus:ring-0 checked:bg-accentHover" type="checkbox" name="watched" value="">
                <label for="like" class="text-color font-medium text-xs">like</label>
                <input class="border-2 border-accentHover bg-lighten w-8 h-8 rounded-sm focus:ring-0 checked:bg-accentHover" type="checkbox" name="like" value="fas fa-heart">
            </span>
            <input class="font-bold bg-accent px-4 py-2 mt-2 rounded-md hover:bg-accentHover hover:cursor-pointer" type="submit">
        </form>
    </section>
    </main>
</body>
</html>