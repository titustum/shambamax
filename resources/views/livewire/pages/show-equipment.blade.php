<?php

use Livewire\Volt\Component;

use Livewire\Attributes\Layout;
use App\Models\Equipment;

new
#[Layout('layouts.overall-layout')]
class extends Component{

    public $equipment;

    public function mount($id)
    {
        // Fetch all available equipment
        $this->equipment = Equipment::findOrFail($id);
    }

};
?>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <!-- Equipment Details -->
        <div class="mx-auto">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Equipment Image -->
                <div class="relative">
                    <img src="{{ asset('storage/' . $equipment->image) }}" alt="{{ $equipment->name }}" class="w-full h-full object-contain">
                </div>

                <!-- Equipment Information -->
                <div class="p-6">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">{{ $equipment->name }}</h2>
                    <p class="mt-3 text-base sm:text-lg md:text-xl text-gray-700">{{ $equipment->description }}</p>

                    <!-- Rental Rate -->
                    <div class="mt-4">
                        <p class="text-base sm:text-lg md:text-xl font-semibold text-gray-900">
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
                    </div>

                    <!-- Location and Availability -->
                    <div class="mt-4 text-gray-700">
                        <p class="text-base sm:text-lg"><strong>Located in:</strong> {{ $equipment->location }}</p>
                        <p class="text-base sm:text-lg"><strong>Availability:</strong> {{ ucfirst($equipment->availability) }}</p>
                    </div>

                    <!-- Contact Section -->
                    <div class="mt-8 bg-gray-100 p-4 rounded-lg shadow-md">
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-900">Contact the Owner</h3>
                        <p class="mt-2 text-base sm:text-lg text-gray-600"><strong>Phone:</strong> {{ auth()->user()->phone_number }}</p>
                        <p class="text-base sm:text-lg text-gray-600"><strong>Address:</strong> {{ auth()->user()->address }}</p>
                        <a href="{{ route('equipment.book', $equipment->id) }}" class="inline-flex items-center px-6 py-3 border border-transparent text-sm sm:text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-4">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
