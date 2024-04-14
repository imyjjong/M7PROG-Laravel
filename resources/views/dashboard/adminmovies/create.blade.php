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
        <h2 class="font-bold text-2xl border-b border-accentHover w-8/12 flex justify-center items-center pb-2">Add a movie</h2>
        <form class="flex flex-col justify-center items-start gap-2" action="{{ route('adminmovies.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            @include('dashboard.adminmovies.form', 
                [
                    'route'   =>route('adminmovies.store'), 
                    'method'  =>'post', 
                    'movie' =>new \App\Models\Movie()
                ]
            )
            <input class="font-bold bg-accent px-4 py-2 mt-2 rounded-md hover:bg-accentHover hover:cursor-pointer" type="submit">
        </form>
    </section>
    </main>
</body>
</html>