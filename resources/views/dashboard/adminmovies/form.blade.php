    <label for="title" class="text-color font-medium text-xl">Movie title</label>
    <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="title" value="{{ old('title', $movie->title) }}" placeholder="title">
    @error('title')
    <p class="text-red">{{ $message }}</p>
    @enderror
    <label for="intro" class="text-color font-medium text-xl">intro</label>
    <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="intro" value="{{ old('intro', $movie->intro) }}" placeholder="intro">
    @error('intro')
    <p class="text-red">{{ $message }}</p>
    @enderror
    <label for="year" class="text-color font-medium text-xl">Release year</label>
    <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="year" value="{{ old('year', $movie->year) }}" placeholder="year">
    @error('year')
    <p class="text-red">{{ $message }}</p>
    @enderror
     <input type="hidden" name="image" value="{{ $movie->image }}/">
     <input type="hidden" name="description" value="{{ old('description', $movie->description) }}/">
     <input type="hidden" name="backdrop" value="{{ old('backdrop', $movie->backdrop) }}/">
    <label for="mainCast" class="text-color font-medium text-xl">Main cast</label>
    <input class="border-0 border-accentHover bg-lighten border-b-2 w-80 h-9 rounded-sm focus:ring-0" type="text" name="mainCast" value="{{ old('mainCast', $movie->mainCast) }}" placeholder="main cast">
    @error('mainCast')
    <p class="text-red">{{ $message }}</p>
    @enderror
    <span class="flex justify-center items-center gap-4">
        <label for="watched" class="text-color font-medium text-xs">watched</label>
        <input class="border-2 border-accentHover bg-lighten w-8 h-8 rounded-sm focus:ring-0 checked:bg-accentHover" type="checkbox" name="watched" @if(old('watched', $movie->watched === 'fas fa-eye')) checked @endif>
        <label for="like" class="text-color font-medium text-xs">like</label>
        <input class="border-2 border-accentHover bg-lighten w-8 h-8 rounded-sm focus:ring-0 checked:bg-accentHover" type="checkbox" name="like" @if(old('like', $movie->like === 'fas fa-heart')) checked @endif>
    </span>