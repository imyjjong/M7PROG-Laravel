<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="min-h-screen bg-red bg-background text-color flex flex-col justify-start align-center gap-8">@include('layouts.site')
    <h1>about ziek</h1>
    <h2>pur</h2>
</body>
</html>