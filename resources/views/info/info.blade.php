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
    <main class="flex flex-col justify-center items-center w-full h-full px-96 py-10">
        <section class="bg-lighten w-full h-80 p-8 flex flex-col justify-center items-start gap-4">
            <h2 class="text-3xl font-bold">How to add a movie:</h2>
            <ul class="flex flex-col justify-center items-start gap-2">
                <li class="flex  justify-center items-center">So basically, u just click the <p class="flex justify-center items-center text-xs text-color bg-flashyButton rounded-md py-1 px-2 w-max font-bold ml-2">+ add movie</p></li>
                <li>and just enter a movie name</li>
                <li>then you fill out the other fields and add an image</li>
                <li>find the movie poster online</li>
                <li>right click, copy the image url, NOT THE NORMAL COPY OPTION!</li>
                <li>just copy paste this in the image field</li>
                <li>and voila, u added a movie to ur idk site, account whatever</li>
            </ul>
        </section>
    </main>
</body>
</html>