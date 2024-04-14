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
    <main class="flex flex-col justify-center items-center w-full h-full px-96 py-10">
        <section class="bg-lighten w-full h-80 py-8 px-16 flex flex-col justify-center items-start gap-4">
            <h2 class="text-3xl font-bold border-b w-11/12 pb-1 border-accentHover">About</h2>
            <p class="text-lg">
                so this is my laravel project, idk wat ik erover moet zeggen. dit maken was eigenlijk best leuk, 
                eerst niet maar toen ging ik doen wat ik zelf wou en toen werd het leuker. so idk of ik alle stappen heb gevolgd, 
                maar yk whatever. ik heb wel een paar videos gevolgd tho, dat was veel nicer dan de uitleg lezen enzo. 
                sorry but yk werkt beter voor me. ik snap dit nu ook veel beter en ja het ziet er best cool uit, vind ik zelf yk.
            </p>
        </section>
    </main>
    <div class="absolute bottom-0 w-full">
        @include('layouts.partials.moviesFooter')
    </div>
</body>
</html>