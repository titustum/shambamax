<x-overall-layout>
    <div class="bg-green-50">


 <!-- Hero Section -->
<section class="bg-gradient-to-b from-gray-100 to-white">
    <div class="container mx-auto px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <!-- Text Content -->
            <div class="flex flex-col justify-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    ShambaMax
                </h1>
                <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-lg md:mt-5 md:text-xl">
                    Connecting Kenyan farmers with the machinery they need to thrive
                </p>
                <div class="mt-8">
                    <form action="#" method="GET" class="sm:flex">
                        <div class="w-full sm:max-w-xs">
                            <label for="equipment" class="sr-only">Search for equipment</label>
                            <input type="text" name="equipment" id="equipment" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-green-600 focus:ring-2 focus:ring-green-600" placeholder="Search for equipment...">
                        </div>
                        <button type="submit" class="mt-3 w-full rounded-md border border-transparent bg-green-600 py-3 px-4 font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
                            Search
                        </button>
                    </form>
                </div>
                <div class="mt-8 flex flex-col sm:flex-row sm:space-x-4">
                    <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-5 py-3 text-base font-medium text-white hover:bg-green-700 transition duration-150 ease-in-out">
                        List Your Machinery
                    </a>
                    <a href="#" class="mt-3 inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-green-700 shadow-md hover:bg-gray-100 transition duration-150 ease-in-out sm:mt-0">
                        How It Works
                    </a>
                </div>
            </div>
            <!-- Image Content -->
            <div class="flex items-center justify-center">
                <img class="h-56 w-full object-cover rounded-lg shadow-lg sm:h-72 md:h-96 lg:h-full lg:w-full" src="{{ asset('images/Modern-Farming-Equipment.jpg') }}" alt="Modern farming equipment in a field">
            </div>
        </div>
    </div>
</section>




<!-- How It Works -->
<section class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">How ShambaMax Works</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Connecting farmers and equipment owners in three easy steps</p>
        </div>

        <div class="mt-16">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Step 1 -->
                <div class="text-center bg-gray-50 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-green-100">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-medium text-gray-900">Search Equipment</h3>
                    <p class="mt-2 text-base text-gray-500">Browse our extensive catalog of agricultural machinery available in your area.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center bg-gray-50 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-green-100">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-medium text-gray-900">Book and Pay</h3>
                    <p class="mt-2 text-base text-gray-500">Reserve the equipment you need for the dates you require and make secure payments through our platform.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center bg-gray-50 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-green-100">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-medium text-gray-900">Use and Succeed</h3>
                    <p class="mt-2 text-base text-gray-500">Collect the equipment, use it for your farming needs, and watch your productivity soar!</p>
                </div>
            </div>
        </div>

        <div class="mt-16 flex justify-center">
            <a href="#" class="inline-flex items-center rounded-md border border-transparent bg-green-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                Get Started Now
            </a>
        </div>

        <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-center text-base text-gray-400">
                Want to list your equipment? <a href="#" class="font-medium text-green-600 hover:text-green-500">Learn how to become a provider</a>
            </p>
        </div>
    </div>
</section>

<!-- Equipment Categories -->
<!-- Equipment Categories -->
<section class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Equipment Categories</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Find the right tools for your farming needs</p>
        </div>

        <div class="mt-16 grid grid-cols-2 gap-8 sm:grid-cols-3 lg:grid-cols-4">
            <!-- Tractors Category -->
            <div class="group relative overflow-hidden rounded-lg bg-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="{{ asset('images/tractor.avif') }}" alt="Tractor" class="h-full w-full object-cover object-center group-hover:opacity-75">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">Tractors</h3>
                    <p class="mt-1 text-sm">20+ available</p>
                </div>
            </div>

            <!-- Harvesters Category -->
            <div class="group relative overflow-hidden rounded-lg bg-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="{{ asset('images/harvestor.jpg') }}" alt="Harvester" class="h-full w-full object-cover object-center group-hover:opacity-75">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">Harvesters</h3>
                    <p class="mt-1 text-sm">15+ available</p>
                </div>
            </div>

            <!-- Ploughs Category -->
            <div class="group relative overflow-hidden rounded-lg bg-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="{{ asset('images/harvestor.jpg') }}" alt="Plough" class="h-full w-full object-cover object-center group-hover:opacity-75">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">Ploughs</h3>
                    <p class="mt-1 text-sm">30+ available</p>
                </div>
            </div>

            <!-- Seeders Category -->
            <div class="group relative overflow-hidden rounded-lg bg-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="{{ asset('images/harvestor.jpg') }}" alt="Seeder" class="h-full w-full object-cover object-center group-hover:opacity-75">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">Seeders</h3>
                    <p class="mt-1 text-sm">25+ available</p>
                </div>
            </div>

            <!-- Sprayers Category -->
            <div class="group relative overflow-hidden rounded-lg bg-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="{{ asset('images/harvestor.jpg') }}" alt="Sprayer" class="h-full w-full object-cover object-center group-hover:opacity-75">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">Sprayers</h3>
                    <p class="mt-1 text-sm">18+ available</p>
                </div>
            </div>

            <!-- Irrigation Systems Category -->
            <div class="group relative overflow-hidden rounded-lg bg-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="{{ asset('images/harvestor.jpg') }}" alt="Irrigation System" class="h-full w-full object-cover object-center group-hover:opacity-75">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">Irrigation Systems</h3>
                    <p class="mt-1 text-sm">10+ available</p>
                </div>
            </div>

            <!-- Tillers Category -->
            <div class="group relative overflow-hidden rounded-lg bg-gray-200 shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="{{ asset('images/harvestor.jpg') }}" alt="Tiller" class="h-full w-full object-cover object-center group-hover:opacity-75">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">Tillers</h3>
                    <p class="mt-1 text-sm">22+ available</p>
                </div>
            </div>

            <!-- View All Category -->
            <div class="group relative overflow-hidden rounded-lg bg-green-100 flex items-center justify-center shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <svg class="h-20 w-20 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 bg-opacity-50 text-white text-center p-4">
                    <h3 class="text-lg font-medium">View All Categories</h3>
                    <p class="mt-1 text-sm">Explore more</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Near You Section -->
<section class="bg-white py-12 sm:py-16 lg:py-20">
    <div class="mx-auto container px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Available Near You</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Discover agricultural equipment in your area ready for use</p>
        </div>

        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- Equipment Card 1 -->
            <div class="group relative overflow-hidden rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                <img class="h-48 w-full object-cover" src="{{ asset('images/tractor.avif') }}" alt="Tractor">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900">Tractor</h3>
                    <p class="mt-1 text-sm text-gray-500">John Deere 5075E</p>
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <svg class="mr-1.5 h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        5 km away
                    </div>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Equipment Card 2 -->
            <div class="group relative overflow-hidden rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                <img class="h-48 w-full object-cover" src="{{ asset('images/harvestor.jpg') }}" alt="Harvester">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900">Harvester</h3>
                    <p class="mt-1 text-sm text-gray-500">New Holland TC5.30</p>
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <svg class="mr-1.5 h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        12 km away
                    </div>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Equipment Card 3 -->
            <div class="group relative overflow-hidden rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                <img class="h-48 w-full object-cover" src="{{ asset('images/planter.png') }}" alt="Plough">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900">Plough</h3>
                    <p class="mt-1 text-sm text-gray-500">Kverneland 3 furrow</p>
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <svg class="mr-1.5 h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        8 km away
                    </div>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- View All Card -->
            <div class="group relative flex items-center justify-center overflow-hidden rounded-lg bg-green-100 shadow-md hover:bg-green-200 transition-all duration-300">
                <a href="#" class="p-6 text-center">
                    <svg class="mx-auto h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    <span class="mt-2 block text-sm font-medium text-green-800">View All Available Equipment</span>
                </a>
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
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="https://randomuser.me/api/portraits/men/91.jpg" width="60" height="60" alt="John Muthomi, Meru County" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-semibold text-lg">John Muthomi</h3>
                        <p class="text-gray-600">Meru County</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">"ShambaMax has been a game-changer for my small farm. I was able to rent a tractor during the planting season, which helped me prepare my land in half the time it usually takes. This year, I've seen a 30% increase in my maize yield!"</p>
                <div class="flex items-center">
                    <!-- Star Rating -->
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <!-- Repeat SVG for star rating -->
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="https://randomuser.me/api/portraits/women/36.jpg" width="60" height="60" alt="Grace Otieno, Kisumu County" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-semibold text-lg">Grace Otieno</h3>
                        <p class="text-gray-600">Kisumu County</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">"As a small-scale rice farmer, I never thought I'd be able to afford a combine harvester. Thanks to ShambaMax, I rented one for my harvest season. It not only saved me time but also reduced post-harvest losses. My profits have increased by 40%!"</p>
                <div class="flex items-center">
                    <!-- Star Rating -->
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <!-- Repeat SVG for star rating -->
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="https://randomuser.me/api/portraits/men/80.jpg" width="60" height="60" alt="David Kimani, Nakuru County" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h3 class="font-semibold text-lg">David Kimani</h3>
                        <p class="text-gray-600">Nakuru County</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">"ShambaMax has transformed how I manage my dairy farm. I rented a milking machine, which has improved the hygiene and efficiency of my milking process. My milk production has increased by 25%, and I'm now able to meet the demands of larger buyers in my area."</p>
                <div class="flex items-center">
                    <!-- Star Rating -->
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <!-- Repeat SVG for star rating -->
                </div>
            </div>
        </div>

        <!-- Add a "View More" button if needed -->
        <div class="text-center mt-8">
            <a href="/success-stories" class="bg-green-800 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition-colors duration-300">View More Success Stories</a>
        </div>
    </div>
</section>


 <!-- Benefits Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-green-800 mb-12">Why Choose ShambaMax?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Benefit 1 -->
            <div class="text-center bg-green-50 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                    <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Cost-Effective">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Cost-Effective</h3>
                <p class="text-gray-600">Access expensive machinery without the high upfront costs</p>
            </div>
            <!-- Benefit 2 -->
            <div class="text-center bg-green-50 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                    <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Verified Equipment">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Verified Equipment</h3>
                <p class="text-gray-600">All machinery on our platform is inspected and certified</p>
            </div>
            <!-- Benefit 3 -->
            <div class="text-center bg-green-50 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                    <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Boost Productivity">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Boost Productivity</h3>
                <p class="text-gray-600">Increase your farm's output with the right tools at the right time</p>
            </div>
            <!-- Benefit 4 -->
            <div class="text-center bg-green-50 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <div class="bg-green-100 rounded-full p-6 inline-block mb-4">
                    <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Community Support">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Community Support</h3>
                <p class="text-gray-600">Join a network of farmers sharing knowledge and resources</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
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
