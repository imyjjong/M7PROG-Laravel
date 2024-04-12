<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="min-h-screen bg-red bg-background text-color flex flex-col justify-start align-center gap-8">
    @include('layouts.site')
    <section>
        <form action="{{ route('adminmovies.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="title">
            <input type="text" name="year" placeholder="year">
            <input type="text" name="image" placeholder="image link">
            <input type="submit">
        </form>
    </section>
</body>
</html>