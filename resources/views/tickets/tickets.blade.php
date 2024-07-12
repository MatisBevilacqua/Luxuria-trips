@include('components.header')

<div class="container mx-auto px-4 mt-30 pt-[20vh] sm:px-6 lg:px-8 py-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($tickets as $ticket)
            <div
                class="relative bg-white overflow-hidden shadow-lg rounded-lg cursor-pointer hover:shadow-xl hover:scale-105 transition-transform transition-shadow duration-300 ease-in-out"
                onclick="window.location.href='{{ route('tickets.show', $ticket->id) }}'"
            >
                <div class="p-6 bg-gradient-to-r from-[#003566] to-[#0095f6] text-white">
                    <h3 class="text-2xl font-semibold mb-2">{{ $ticket->title }}</h3>
                    <p class="text-lg mb-4">
                        {{ strtok($ticket->description, '.') }}.
                        @if (strlen($ticket->description) > strlen(strtok($ticket->description, '.')) + 1)
                            <span class="text-gray-200">...</span>
                        @endif
                    </p>
                    <p class="text-xl font-bold mb-2">${{ number_format($ticket->price_per_person, 2) }}</p>
                    <p class="text-base">Date: {{ $ticket->event_date }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('components.footer')
