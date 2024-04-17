<section class="w-full h-80">
    <h2 class="text-color text-2xl font-medium border-b-2">WATCHLIST</h2>
    <div class="flex justify-center align-center py-2 gap-4">
    @foreach($watchlists as $watchlist)
        <article class="group/item relative mb-4 w-1/6 h-auto">
            <a href="{{ route('adminmovies.show', ['adminmovie' => $watchlist]) }}">
            <img src="{{ $watchlist->image }}" alt="" class="w-full h-full object-cover hover:cursor-pointer hover:brightness-[0.1]">
            <div class="invisible group-hover/item:visible absolute bottom-0 left-0 flex flex-col justify-center align-center p-4"> 
                <h2 class="text-color text-xs font-bold">{{ $watchlist->title }}</h2>
                <h2 class="text-accentHover text-xs">{{ $watchlist->year }}</h2>
            </div>
            </a>
        </article>
    @endforeach
    </div>
</section>