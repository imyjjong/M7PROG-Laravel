<header class="text-headerColor text-3xl flex justify-between align-center p-4 px-60 bg-headerBackground">
    <h2 class="font-bold">movies</h2>
    <nav class="flex justify-center align-center px-4">
        <ul class="flex justify-center align-center gap-8">
            <li class="text-accent font-semibold text-xl hover:text-accentHover focus:text-accent"><a href="{{ route('movies.movies') }}">movies</a></li>
            <li class="text-accent font-semibold text-xl hover:text-accentHover focus:text-blue-300"><a href="{{ route('about.index') }}">about</a></li>
            <li class="text-accent font-semibold text-xl hover:text-accentHover focus:text-blue-300"><a href="{{ route('info.information') }}">information</a></li>
        </ul>
    </nav>
</header>