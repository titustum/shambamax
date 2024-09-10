<x-overall-layout>
    <div class="bg-green-50">
        <!-- Hero Section (Remains largely unchanged) -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-6xl font-bold text-green-800 mb-4">
                            Empowering Kenyan Farmers
                        </h1>
                        <p class="text-xl text-gray-700 mb-8">
                            ShambaMax connects you with the farm machinery you need, when you need it.
                        </p>
                        <a href="#featured-machines" class="bg-green-600 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300">
                            View Available Machines
                        </a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="{{ asset('images/Modern-Farming-Equipment.jpg') }}" width="600" height="400" alt="Farm machinery" class="rounded-lg shadow-xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Machines Section -->
        <section id="featured-machines" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Featured Machines</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Machine Card 1 -->
                    <div class="bg-green-50 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/tractor.avif') }}" alt="Tractor" class="w-full h-48 bg-white object-contain">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">John Deere Tractor</h3>
                            <p class="text-gray-600 mb-4">Powerful tractor suitable for large fields</p>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-green-600 font-bold">KES 5,000 / day</span>
                                <span class="text-gray-500">12 km away</span>
                            </div>
                            <div class="flex items-center mb-4">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="ml-1 text-gray-500">4.8 (120 reviews)</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition duration-300 flex-grow text-center">Book Now</a>
                                <a href="#" class="bg-gray-200 text-gray-700 py-2 px-4 rounded hover:bg-gray-300 transition duration-300">Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Machine Card 2 -->
                    <div class="bg-green-50 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/harvestor.jpg') }}" alt="Harvester" class="w-full h-48 bg-white object-contain">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Combine Harvester</h3>
                            <p class="text-gray-600 mb-4">Efficient harvester for grains and cereals</p>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-green-600 font-bold">KES 8,000 / day</span>
                                <span class="text-gray-500">20 km away</span>
                            </div>
                            <div class="flex items-center mb-4">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="ml-1 text-gray-500">4.6 (85 reviews)</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition duration-300 flex-grow text-center">Book Now</a>
                                <a href="#" class="bg-gray-200 text-gray-700 py-2 px-4 rounded hover:bg-gray-300 transition duration-300">Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Machine Card 3 -->
                    <div class="bg-green-50 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/planter.png') }}" alt="Planter" class="w-full h-48 bg-white object-contain">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-green-800 mb-2">Precision Planter</h3>
                            <p class="text-gray-600 mb-4">Accurate seed placement for row crops</p>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-green-600 font-bold">KES 3,500 / day</span>
                                <span class="text-gray-500">8 km away</span>
                            </div>
                            <div class="flex items-center mb-4">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="ml-1 text-gray-500">4.9 (150 reviews)</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition duration-300 flex-grow text-center">Book Now</a>
                                <a href="#" class="bg-gray-200 text-gray-700 py-2 px-4 rounded hover:bg-gray-300 transition duration-300">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="/equipment" class="bg-green-600 text-white py-3 px-8 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300">
                        View All Equipment
                    </a>
                </div>
            </div>
        </section>

        <!-- How It Works Section (Remains largely unchanged) -->
        <section class="py-16 bg-green-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-green-800 mb-12">How ShambaMax Works</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-white rounded-full p-6 inline-block mb-4">
                            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Find Equipment</h3>
                        <p class="text-gray-600">Search for the farm machinery you need in your area.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-full p-6 inline-block mb-4">
                            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Book and Schedule</h3>
                        <p class="text-gray-600">Reserve equipment for the dates you need it.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-full p-6 inline-block mb-4">
                            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Grow Your Farm</h3>
                        <p class="text-gray-600">Use the machinery to improve your agricultural productivity.</p>
                    </div>
                </div>
            </div>
        </section>




        <!-- New Testimonials Section -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Farmer Success Stories</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/91.jpg" width="60" height="60" alt="Farmer John" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold text-lg">John Muthomi</h3>
                            <p class="text-gray-600">Meru County</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">"ShambaMax has been a game-changer for my small farm. I was able to rent a tractor during the planting season, which helped me prepare my land in half the time it usually takes. This year, I've seen a 30% increase in my maize yield!"</p>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/36.jpg" width="60" height="60" alt="Farmer Grace" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold text-lg">Grace Otieno</h3>
                            <p class="text-gray-600">Kisumu County</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">"As a small-scale rice farmer, I never thought I'd be able to afford a combine harvester. Thanks to ShambaMax, I rented one for my harvest season. It not only saved me time but also reduced post-harvest losses. My profits have increased by 40%!"</p>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/80.jpg" width="60" height="60" alt="Farmer David" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold text-lg">David Kimani</h3>
                            <p class="text-gray-600">Nakuru County</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">"ShambaMax has transformed how I manage my dairy farm. I rented a milking machine, which has improved the hygiene and efficiency of my milking process. My milk production has increased by 25%, and I'm now able to meet the demands of larger buyers in my area."</p>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
            </div>

            <!-- Add a "View More Stories" button -->
            <div class="text-center mt-12">
                <a href="/testimonials" class="bg-green-600 text-white py-3 px-8 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300">
                    View More Success Stories
                </a>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Why Choose ShambaMax?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Cost-Effective</h3>
                    <p class="text-gray-600">Access expensive machinery without the high upfront costs</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Verified Equipment</h3>
                    <p class="text-gray-600">All machinery on our platform is inspected and certified</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Boost Productivity</h3>
                    <p class="text-gray-600">Increase your farm's output with the right tools at the right time</p>
                </div>
                <div class="text-center">
                    <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Community Support</h3>
                    <p class="text-gray-600">Join a network of farmers sharing knowledge and resources</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section (remains unchanged) -->
    <section class="py-20 bg-green-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Revolutionize Your Farming?</h2>
            <p class="text-xl text-green-100 mb-8">Join ShambaMax today and access the tools you need for success.</p>
            <a href="#" class="bg-white text-green-600 py-3 px-8 rounded-lg text-lg font-semibold hover:bg-green-100 transition duration-300">
                Sign Up Now
            </a>
        </div>
    </section>
</x-overall-layout>
