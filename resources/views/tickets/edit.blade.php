<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Ticket') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form to edit an existing ticket -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 bg-gray-200">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Edit Ticket</h3>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-6">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('ticket.update', $ticket->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" id="title" name="title" value="{{ old('title', $ticket->title) }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="description" name="description" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('description', $ticket->description) }}</textarea>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="price_per_person" class="block text-sm font-medium text-gray-700">Price per Person</label>
                                <input type="text" id="price_per_person" name="price_per_person" value="{{ old('price_per_person', $ticket->price_per_person) }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="event_date" class="block text-sm font-medium text-gray-700">Event Date</label>
                                <input type="date" id="event_date" name="event_date" value="{{ old('event_date', $ticket->event_date) }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
