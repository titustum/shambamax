<x-overall-layout>
    <!-- Post Equipment Section -->
    <section class="bg-green-50 py-16 sm:py-24">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">List Your Equipment</h2>
                <p class="mt-3 text-xl text-gray-500 sm:mt-4">Share your machinery and earn money when you're not using it</p>
            </div>

            <form action="#" method="POST" class="space-y-8">
                @csrf
                <div class="space-y-6 bg-white p-6 rounded-lg shadow-lg">
                    <!-- Equipment Name -->
                    <div>
                        <label for="equipment_name" class="block text-sm font-medium text-gray-700">Equipment Name</label>
                        <input type="text" name="equipment_name" id="equipment_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                    </div>

                    <!-- Equipment Category -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                            <option value="">Select a category</option>
                            <option value="tractor">Tractor</option>
                            <option value="harvester">Harvester</option>
                            <option value="plough">Plough</option>
                            <option value="seeder">Seeder</option>
                            <option value="sprayer">Sprayer</option>
                            <option value="irrigation">Irrigation System</option>
                            <option value="tiller">Tiller</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Equipment Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required></textarea>
                    </div>

                    <!-- Rental Rate -->
                    <div>
                        <label for="rate" class="block text-sm font-medium text-gray-700">Rental Rate</label>
                        <div class="grid gap-2 sm:flex items-center sm:space-x-4">
                            <div class="mt-1 relative flex-1 rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">KES</span>
                                </div>
                                <input type="number" name="rate" id="rate" class="pl-12 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="0.00" required>
                            </div>
                            <div class="flex-shrink-0">
                                <select id="rate_period" name="rate_period" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                    <option value="hour">Per Hour</option>
                                    <option value="day">Per Day</option>
                                    <option value="week">Per Week</option>
                                    <option value="month">Per Month</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <input type="text" name="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                    </div>

                    <!-- Availability -->
                    <div>
                        <label for="availability" class="block text-sm font-medium text-gray-700">Availability</label>
                        <select id="availability" name="availability" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                            <option value="always">Always available</option>
                            <option value="weekdays">Weekdays only</option>
                            <option value="weekends">Weekends only</option>
                            <option value="custom">Custom schedule</option>
                        </select>
                    </div>

                    <!-- Equipment Image -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Equipment Photo</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-center">
                    <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        List Your Equipment
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-overall-layout>

