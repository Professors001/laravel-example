<x-layouts.main>

    {{-- Body --}}
    <div class="max-w-4xl mx-auto py-10 px-4">

        <p class="text-center text-4xl font-bold text-gray-800 mb-10">About ME!</p>

        <div class="mt-10 grid grid-cols-2 gap-6 items-center">

            {{-- Profile Card --}}
            <img class="mx-auto rounded-full h-36 w-36 object-cover border-4 border-blue-500" src="{{ url('/images/profile.jpeg') }}" alt="Profile Image">

            <div>
                <p class="text-3xl font-bold text-gray-800">
                    Aphisit Prasertvesyakorn
                </p>
                <p class="text-lg text-gray-600">
                    Computer Science | <span class="font-bold">Kasetsart University</span>
                </p>
            </div>

        </div>

        {{-- Contact Information --}}
        <div class="mt-10">
            <p class="font-bold text-xl text-gray-800">Contact Information</p>
            <hr class="border-t-2 border-gray-300 mt-2 mb-4">

            <div class="space-y-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span class="text-gray-700">aphisit.pra04@gmail.com</span>
                </div>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <span class="text-gray-700">+66 (64) 637-7134</span>
                </div>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-gray-700">Bangkok, Thailand</span>
                </div>
            </div>
        </div>

        {{-- Skills --}}
        <div class="mt-10">
            <p class="font-bold text-xl text-gray-800">Skills</p>
            <hr class="border-t-2 border-gray-300 mt-2 mb-4">

            <div class="space-y-2 text-gray-700">
                <p><span class="font-bold">Programming Languages:</span> C, C++, Java, JavaScript, Golang, Dart, Python, PHP, MySQL, PostgreSQL </p>
                <p><span class="font-bold">Frameworks & Libraries:</span> Laravel, Flutter, React</p>
                <p><span class="font-bold">Tools:</span> VSCode, IntelliJ, Postman, Docker</p>
                <p><span class="font-bold">Languages:</span> Thai (Native), English (Fluent)</p>
                <p><span class="font-bold">Soft Skills:</span> Problem Solving, Debugging, Analytical Thinking, Critical Thinking, Leadership</p>
            </div>
        </div>

        {{-- Projects Section --}}
        <div class="mt-10">

            <p class="font-bold text-xl text-gray-800">Projects</p>
            <hr class="border-t-2 border-gray-300 mt-2 mb-4">

                <div class="space-y-6">
                    @foreach ($projects as $project)
                        <x-abouts.project
                        :project="$project">
                        </x-abouts.project>
                    @endforeach
                </div>
        </div>

    </div>

</x-layouts.main>
