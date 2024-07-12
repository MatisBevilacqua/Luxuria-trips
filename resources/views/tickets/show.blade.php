@include('components.header')

<div class="pt-[15vh] pl-[5vh] pr-[5vh]">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-900">{{ $ticket->title }}</h1>
        <p class="text-lg text-gray-600 mt-2">Join us for this exciting event and experience the thrill!</p>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="relative">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        </div>

        <div class="p-6">
            <div class="text-gray-800">
                <h2 class="text-2xl font-semibold mb-4">About This Event</h2>
                <p class="text-base mb-4">{{ $ticket->description }}</p>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg mb-4">
                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">Price per Person:</span>
                    <span class="text-xl font-bold text-gray-900">${{ number_format($ticket->price_per_person, 2) }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">Event Date:</span>
                    <span class="text-gray-800">{{ $ticket->event_date }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Reservation Section -->
    <div class="mt-8 p-6 bg-blue-50 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-900 mb-4">How to Reserve Your Ticket</h2>
        <p class="text-base text-gray-700 mb-4">
            Ready to join us for this event? Follow the steps below to secure your ticket:
        </p>
        <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">1. Send an Email</h3>
            <p class="text-base text-gray-700 mb-2">
                Email us at <a href="mailto:contact@luxuriatrips.com" class="text-blue-600 underline">contact@luxuriatrips.com</a> with the subject line:
            </p>
            <p class="text-base text-gray-700 mb-2 font-semibold">Subject: {{ $ticket->title }} Ticket Reservation Request</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">2. Include Your Details</h3>
            <p class="text-base text-gray-700 mb-2">
                In the body of your email, please include:
            </p>
            <ul class="list-disc list-inside mb-2 text-gray-700">
                <li><strong>Your Name:</strong> John Doe</li>
                <li><strong>Number of Tickets:</strong> 2</li>
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
