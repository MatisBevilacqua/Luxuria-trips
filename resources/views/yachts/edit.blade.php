<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Yacht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                <div class="px-4 py-5 sm:px-6 bg-gray-200">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Edit Yacht</h3>
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
                    <form action="{{ route('yacht.update', $yacht->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $yacht->name) }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="description" name="description" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('description', $yacht->description) }}</textarea>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                <input type="text" id="location" name="location" value="{{ old('location', $yacht->location) }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="price_per_hour" class="block text-sm font-medium text-gray-700">Price per Hour</label>
                                <input type="text" id="price_per_hour" name="price_per_hour" value="{{ old('price_per_hour', $yacht->price_per_hour) }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" id="city" name="city" value="{{ old('city', $yacht->city) }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image1" class="block text-sm font-medium text-gray-700">Image URL 1</label>
                                <input type="url" id="image1" name="images[]" value="{{ old('images.0', $yacht->images[0] ?? '') }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image2" class="block text-sm font-medium text-gray-700">Image URL 2</label>
                                <input type="url" id="image2" name="images[]" value="{{ old('images.1', $yacht->images[1] ?? '') }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image3" class="block text-sm font-medium text-gray-700">Image URL 3</label>
                                <input type="url" id="image3" name="images[]" value="{{ old('images.2', $yacht->images[2] ?? '') }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image4" class="block text-sm font-medium text-gray-700">Image URL 4</label>
                                <input type="url" id="image4" name="images[]" value="{{ old('images.3', $yacht->images[3] ?? '') }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
