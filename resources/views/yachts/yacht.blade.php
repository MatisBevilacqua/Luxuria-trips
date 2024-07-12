<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Yacht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form to create a new yacht -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                <div class="px-4 py-5 sm:px-6 bg-gray-200">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Yacht</h3>
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
                    <form action="{{ route('yacht.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="description" name="description" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                <input type="text" id="location" name="location" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="price_per_hour" class="block text-sm font-medium text-gray-700">Price per Hour</label>
                                <input type="text" id="price_per_hour" name="price_per_hour" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" id="city" name="city" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image1" class="block text-sm font-medium text-gray-700">Image URL 1</label>
                                <input type="url" id="image1" name="images[]" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image2" class="block text-sm font-medium text-gray-700">Image URL 2</label>
                                <input type="url" id="image2" name="images[]" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image3" class="block text-sm font-medium text-gray-700">Image URL 3</label>
                                <input type="url" id="image3" name="images[]" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="image4" class="block text-sm font-medium text-gray-700">Image URL 4</label>
                                <input type="url" id="image4" name="images[]" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- List of all yachts -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 bg-gray-200">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">All Yachts</h3>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price per Hour</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($yachts as $yacht)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $yacht->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $yacht->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $yacht->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $yacht->location }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $yacht->price_per_hour }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $yacht->city }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('yacht.edit', $yacht->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form action="{{ route('yacht.destroy', $yacht->id) }}" method="POST" class="inline ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
