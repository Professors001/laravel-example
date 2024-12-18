<div class="
    p-4 mb-4 bg-white
    rounded-lg shadow-md grid
    grid-cols-[50px,2fr,1fr,80px]
    items-center gap-4
    hover:bg-red-100 transition">
    {{-- Song No --}}
    <span class="text-md font-medium text-gray-500 text-center">
        {{ $no }}
    </span>

    {{-- Song Info --}}
    <div class="truncate">
        <p class="text-xl font-semibold truncate">{{ $song['title'] }}</p>
        <p class="text-sm text-gray-500 truncate">{{ $song['artist'] }}</p>
    </div>

    {{-- Album --}}
    <span class="text-md font-medium text-gray-500 text-right truncate">
        {{ $song['album'] }}
    </span>

    {{-- Duration --}}
    <span class="text-sm font-medium text-gray-500 text-right">
        {{ $song['duration']['minutes'] }}:{{ str_pad($song['duration']['seconds'], 2, '0', STR_PAD_LEFT) }}
    </span>
</div>
