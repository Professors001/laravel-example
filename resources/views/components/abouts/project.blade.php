<div class="bg-white p-6 rounded-lg shadow-md hover:bg-blue-100 transition">

    {{-- Project Name --}}
    <div class="flex justify-between mb-4">
        <div>
            <p class="font-bold text-lg text-gray-800">{{ $project['title'] }}</p>
            <p class="italic text-gray-600">{{ $project['role'] }}</p>
        </div>

        <div class="italic text-right text-gray-600">
            <p class="font-bold">{{ $project['language'] }}</p>
            <p class="underline">{{ $project['semester'] }}</p>
        </div>
    </div>

    {{-- Responsibilities --}}
    <ul class="list-disc pl-8 text-gray-700">
        @foreach($project['responsibilities'] as $line)
            <li>{{ $line }}</li>
        @endforeach
    </ul>
</div>
