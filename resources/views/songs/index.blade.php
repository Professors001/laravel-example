<x-layouts.main>

    <div class="max-w-4xl mx-auto">
    {{-- Header --}}
        <div class="p-4 flex items-center">

            <img class="h-40 w-40 rounded-md" src="{{ url('/images/favorite.jpeg') }}" alt="Playlist Logo">

            <div class="p-4">
                <p class="text-m">Playlist</p>
                <p class="text-8xl font-bold">Liked Songs</p>
                <div class="text-m flex items-center">
                    <img class="rounded-full h-10 w-10 mr-2" src="{{ url('/images/profile.jpeg') }}" alt="profile picture">
                    <span class="font-bold">Bank Aphisit</span>. |  {{ $songs_count }} songs
                </div>
            </div>
        </div>

        {{-- Songs List --}}
        <div class="mt-6 mx-auto">

            <div class="
                p-4 bg-red-500
                rounded-t-lg text-white
                grid grid-cols-[50px,2fr,1fr,80px]
                items-center gap-4 font-bold my-4">
                <span class="text-left">No.</span>
                <span class="text-left">Title</span>
                <span class="text-right">Album</span>
                <span class="text-right">Duration</span>
            </div>

            <div class="mt-8">
                @foreach($songs as $song)
                    <x-songs.track
                        :song="$song" :no="$loop->iteration">
                        {{ $song['title'] }}
                    </x-songs.track>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.main>
