@include('components.header')

<div class="pt-[15vh] pl-[5vh] pr-[5vh]">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-900">{{ $car->name }}</h1>
        <p class="text-lg text-gray-600 mt-2">Discover the luxury and elegance of this exceptional car.</p>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="relative">
            @if($car->images->isNotEmpty())
                <img src="{{ $car->images->first()->url }}" alt="Car Image" class="w-full h-80 object-cover">
            @else
                <img src="https://via.placeholder.com/800x400" alt="Placeholder Image" class="w-full h-80 object-cover">
            @endif

            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        </div>

        <div class="p-6">
            <div class="text-gray-800">
                <h2 class="text-2xl font-semibold mb-4">About This Car</h2>
                <p class="text-base mb-4">{{ $car->description }}</p>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg mb-4">
                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">Price per Hour:</span>
                    <span class="text-xl font-bold text-gray-900">${{ $car->price_per_hour }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">Location:</span>
                    <span class="text-gray-800">{{ $car->location }}, {{ $car->city }}</span>
                </div>
            </div>
        </div>

        @if($car->images->count() > 1)
            <div class="p-6 bg-gray-50">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">More Images</h2>
                <div class="flex flex-wrap gap-4">
                    @foreach($car->images as $index => $image)
                        @if ($index > 0)
                            <div class="w-1/2 md:w-1/3 lg:w-1/4">
                                <img src="{{ $image->url }}" alt="Additional Car Image" class="w-full h-40 object-cover rounded-lg shadow-sm">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <!-- Reservation Section -->
    <div class="mt-8 p-6 bg-blue-50 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-900 mb-4">How to Reserve This Car</h2>
        <p class="text-base text-gray-700 mb-4">
            Ready to reserve this luxurious car? Follow the steps below to make your reservation:
        </p>
        <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">1. Send an Email</h3>
            <p class="text-base text-gray-700 mb-2">
                Email us at <a href="mailto:contact@luxuriatrips.com" class="text-blue-600 underline">contact@luxuriatrips.com</a> with the subject line:
            </p>
            <p class="text-base text-gray-700 mb-2 font-semibold">Subject: {{ $car->name }} Reservation Request</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">2. Include Your Details</h3>
            <p class="text-base text-gray-700 mb-2">
                In the body of your email, please include:
            </p>
            <ul class="list-disc list-inside mb-2 text-gray-700">
                <li><strong>Your Name:</strong> John Doe</li>
                <li><strong>Desired Date and Time:</strong> July 15, 2024, at 2:00 PM</li>
                <li><strong>Additional Requests:</strong> Any special requirements or preferences.</li>
            </ul>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">3. Confirmation</h3>
            <p class="text-base text-gray-700">
                Our team will review your request and get back to you as soon as possible to confirm your reservation and provide further instructions.
            </p>
        </div>
    </div>
</div>

@include('components.footer')
