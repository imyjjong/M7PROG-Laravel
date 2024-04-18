<section class="w-full h-full">
    <h2 class="text-color text-2xl font-medium border-b-2">WATCHED</h2>
    <div class="flex justify-center items-center py-2 gap-4 flex-wrap">
    @foreach($watchedMovies as $watchedMovie)
        <article class="group/item relative w-24 h-full rounded-sm">
            <a href="{{ route('adminmovies.show', ['adminmovie' => $watchedMovie]) }}">
            <img src="{{ $watchedMovie->image }}" alt="" class="w-full h-full object-cover hover:cursor-pointer hover:brightness-[0.1]">
            <div class="invisible group-hover/item:visible absolute bottom-0 left-0 flex flex-col justify-center align-center p-4"> 
                <h2 class="text-color text-xs font-bold">{{ $watchedMovie->title }}</h2>
                <h2 class="text-accentHover text-xs">{{ $watchedMovie->year }}</h2>
            </div>
            </a>
        </article>
    @endforeach
    </div>
</section>