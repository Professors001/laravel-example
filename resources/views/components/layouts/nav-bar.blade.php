<navbar class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md font-semibold">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-xl text-gray-800 font-bold hover:text-blue-600 transition duration-300">AboutSpace</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-gray-900"
             xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block text-gray-700 hover:text-blue-600 duration-300" href="{{ route('about') }}">About</a></li>
                <li><a class="md:p-4 py-3 px-0 block text-gray-700 hover:text-blue-600 duration-300" href="{{ route('songs') }}">Songs</a></li>
            </ul>
        </nav>
    </div>
</navbar>
