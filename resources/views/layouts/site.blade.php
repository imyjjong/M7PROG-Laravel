<header class="text-headerColor z-50 text-3xl relative flex justify-between align-center p-4 px-60">  
    <a href="{{ url('/dashboard/adminmovies') }}">
        <h2 class="font-bold flex justify-center items-center gap-2"><i class="fas fa-film bounce"></i>movies</h2>
    </a>
    <nav class="flex justify-center align-center px-4">
        <ul class="flex justify-center align-center gap-8">
            <li class="text-accent font-semibold text-xl hover:text-accentHover focus:text-accent"><a href="{{ route('movies.movies') }}">movies</a></li>
            <li class="text-accent font-semibold text-xl hover:text-accentHover focus:text-blue-300"><a href="{{ route('about.index') }}">about</a></li>
            <li class="text-accent font-semibold text-xl hover:text-accentHover focus:text-blue-300"><a href="{{ route('info.information') }}">information</a></li>
        </ul>
        <p class="flex justify-center items-center text-xl text-color bg-flashyButton rounded-md py-1 px-2 w-max font-bold ml-8 hover:brightness-90 transition-all duration-300">
            <a href="{{ route('adminmovies.create') }}">+ add movie</a>
        </p>
    </nav>
</header>