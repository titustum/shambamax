<x-overall-layout>
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <!-- Equipment Details -->
            <div class="max-w-2xl mx-auto">
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $equipment->image) }}" alt="{{ $equipment->name }}" class="w-full h-64 object-cover">

                    <div class="p-6">
                        <h2 class="text-3xl font-bold text-gray-900">{{ $equipment->name }}</h2>
                        <p class="mt-2 text-gray-600">{{ $equipment->description }}</p>
                        <p class="mt-4 text-lg font-semibold text-gray-900">
                            @if ($equipment->rate_type === 'hour')
                                KES {{ number_format($equipment->rate, 2) }} per hour
                            @elseif ($equipment->rate_type === 'day')
                                KES {{ number_format($equipment->rate, 2) }} per day
                            @elseif ($equipment->rate_type === 'week')
                                KES {{ number_format($equipment->rate, 2) }} per week
                            @elseif ($equipment->rate_type === 'month')
                                KES {{ number_format($equipment->rate, 2) }} per month
                            @endif
                        </p>
                        <p class="mt-4 text-gray-600">Located in: {{ $equipment->location }}</p>
                        <p class="mt-4 text-gray-600">Available: {{ ucfirst($equipment->availability) }}</p>

                        <!-- Contact Section -->
                        <div class="mt-8">
                            <h3 class="text-xl font-semibold text-gray-900">Contact the Owner</h3>
                            <p class="mt-2 text-gray-600">Phone: {{ auth()->user()->phone_number }}</p>
                            <p class="mt-2 text-gray-600">Address: {{ auth()->user()->address }}</p>
                            <a href="{{ route('book-equipment', ['id' => $equipment->id]) }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-overall-layout>
