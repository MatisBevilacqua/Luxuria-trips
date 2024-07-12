@include('components.header')

<div class="container mx-auto px-4 mt-30 pt-[20vh] sm:px-6 lg:px-8 py-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($yachts as $yacht)
            <div
                class="bg-white overflow-hidden shadow-lg rounded-lg cursor-pointer hover:shadow-xl hover:scale-105 transition-transform transition-shadow duration-300 ease-in-out"
                onclick="window.location.href='{{ route('yachts.show', $yacht->id) }}'"
            >
                @foreach($yacht->images as $index => $image)
                    @if ($index === 0)
                        <img src="{{ $image->url }}" alt="Yacht Image" class="w-full h-72 object-cover rounded-t-lg">
                        @break
                    @endif
                @endforeach
                <div class="p-6 space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-semibold text-gray-800">{{ $yacht->name }}</h3>
                        <p class="text-xl font-bold text-gray-900">${{ number_format($yacht->price_per_hour, 2) }}/hour</p>
                    </div>
                    <p class="text-base text-gray-600">
                        {{ strtok($yacht->description, '.') }}.
                        @if (strlen($yacht->description) > strlen(strtok($yacht->description, '.')) + 1)
                            <span class="text-gray-400">...</span>
                        @endif
                    </p>
                    <p class="text-base text-gray-600">Location: {{ $yacht->location }}, {{ $yacht->city }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('components.footer')

