@include('components.header')


<section class="w-full h-[100vh] relative flex items-center justify-center bg-[url('https://s1.1zoom.me/b5050/392/Monte_Carlo_Monaco_Sea_511220_1920x1080.jpg')] bg-center bg-cover">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Superposition sombre -->
    <div class="relative z-2 text-center">
        <div class="mb-[20px]">
            <span class="text-[#FFFF] text-2xl leading-snug tracking-wide text-[80px] max-[500px]:text-[30px] max-[992px]:text-[40px]">
                A desire for freedom ?
            </span>
        </div>
        <div>
            <span class=" text-[#FFFF] text-center text-2xl leading-snug tracking-wide font-[400] text-[30px] max-[500px]:text-[18px] max-[992px]:text-[25px]">
                Thanks to LuxuriaTrip, your dream rental is just a phone call away !
            </span>
        </div>
    </div>
</section>

<section class="w-full flex items-center pl-[20px] pr-[20px] justify-center pt-[50px] pb-[50px]">
    <div class="flex flex-col min-[992px]:flex-row items-center w-full">
        <!-- Section FAQ -->
        <div class="mt-[20px] flex flex-col min-[992px]:w-[50%]">
            <h2 class="text-[40px] text-[#003566] font-bold text-center max-[768px]:text-[30px]">Why choose Luxuria Trip?</h2>
            <p class="text-center mb-[40px] text-[20px] text-[#003566]">Frequently asked question</p>

            <!-- FAQ Item 1 -->
            <div class="mt-4 w-full">
                <div class="relative text-left flex items-center justify-center flex-col">
                    <button
                        type="button"
                        class="w-[90%] p-[10px] rounded-md bg-white text-sm text-gray-700 hover:bg-gray-50 focus:outline-none transition-all duration-200"
                        aria-expanded="false"
                        aria-haspopup="true"
                        onclick="toggleMenu(0)"
                    >
                        Why choose Luxuria Trips for yacht and luxury car rental?
                    </button>
                    <div
                        id="faq-response-0"
                        class="origin-top-left left-0 mt-2 w-[90%] rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="options-menu"
                    >
                        <div class="py-1" role="none">
                            <p class="px-4 py-2 text-sm text-gray-700">Luxuria Trips stands out for its holistic approach and expertise in the luxury sector. Our dedicated team is committed to providing you with an unforgettable experience by combining luxury yacht rental with a selection of prestigious cars. Whether you are looking for a romantic getaway or a family vacation, we have the perfect solution for you.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="mt-4 w-full">
                <div class="relative text-left flex items-center justify-center flex-col">
                    <button
                        type="button"
                        class="w-[90%] p-[10px] rounded-md bg-white text-sm text-gray-700 hover:bg-gray-50 focus:outline-none transition-all duration-200"
                        aria-expanded="false"
                        aria-haspopup="true"
                        onclick="toggleMenu(1)"
                    >
                        What are the advantages of renting a yacht and a luxury car with Luxuria Trips?
                    </button>
                    <div
                        id="faq-response-1"
                        class="origin-top-left left-0 mt-2 w-[90%] rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="options-menu"
                    >
                        <div class="py-1" role="none">
                            <p class="px-4 py-2 text-sm text-gray-700">By choosing Luxuria Trips, you benefit from a multitude of advantages: Tailor-made service: Our team adapts to your needs and desires to create a personalized itinerary. Wide choice of vehicles: We offer you a selection of luxury yachts and prestigious cars from the most renowned brands. Irreproachable comfort and quality: Enjoy high-end service and exceptional attention to detail. Save time and money: We take care of everything, from planning your trip to managing the crew and renting the car.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="mt-4 w-full">
                <div class="relative text-left flex items-center justify-center flex-col">
                    <button
                        type="button"
                        class="w-[90%] p-[10px] rounded-md bg-white text-sm text-gray-700 hover:bg-gray-50 focus:outline-none transition-all duration-200"
                        aria-expanded="false"
                        aria-haspopup="true"
                        onclick="toggleMenu(2)"
                    >
                        What types of yachts and luxury cars do you offer?
                    </button>
                    <div
                        id="faq-response-2"
                        class="origin-top-left left-0 mt-2 w-[90%] rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="options-menu"
                    >
                        <div class="py-1" role="none">
                            <p class="px-4 py-2 text-sm text-gray-700">Luxuria Trips offers a wide range of luxury yachts and prestigious cars to meet all your needs and desires. Yachts: From catamarans to superyachts, with different types of fittings and equipment. Cars: From luxury sedans to SUVs and convertibles, from the most prestigious brands.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="mt-4 w-full">
                <div class="relative text-left flex items-center justify-center flex-col">
                    <button
                        type="button"
                        class="w-[90%] p-[10px] rounded-md bg-white text-sm text-gray-700 hover:bg-gray-50 focus:outline-none transition-all duration-200"
                        aria-expanded="false"
                        aria-haspopup="true"
                        onclick="toggleMenu(3)"
                    >
                        How can I book a yacht and a luxury car with Luxuria Trips?
                    </button>
                    <div
                        id="faq-response-3"
                        class="origin-top-left left-0 mt-2 w-[90%] rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="options-menu"
                    >
                        <div class="py-1" role="none">
                            <p class="px-4 py-2 text-sm text-gray-700">Book your yacht and luxury car in a few clicks on our website or contact our team of experts by email. We are at your disposal to help you choose the ideal vehicles and to answer all your questions. In summary, Luxuria Trips is the ideal partner for an ultimate luxury experience. Our expertise, tailor-made service and wide choice of yachts and luxury cars guarantee you an unforgettable trip.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden min-[992px]:block w-[50%] pl-[20px]">
            <img src="{{ asset('assets/img/why.jpeg') }}" alt="Why Choose Luxuria Trip" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </div>
</section>

<div class="w-full h-[40vh] mt-[50px] flex flex-col items-center justify-center bg-[url('../../public/assets/img/monaco.jpeg')]" style="background-size:cover; background-position:center;  background-attachment: fixed;" >
    <p class='text-[30px] font-bold text-white italic text-center max-[768px]:text-[30px]'>"To rent is to temporarily adopt another life"</p>
</div>



<script>
    function toggleMenu(index) {
        const faqResponse = document.getElementById(`faq-response-${index}`);
        const isHidden = faqResponse.classList.contains('hidden');
        document.querySelectorAll('[id^="faq-response-"]').forEach((el) => el.classList.add('hidden'));
        if (isHidden) {
            faqResponse.classList.remove('hidden');
        }
    }
</script>

@include('components.footer')
