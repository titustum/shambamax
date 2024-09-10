<?php

// Volt to show all available equipments

use Livewire\Volt\Component;

use Livewire\Attributes\Layout;
use App\Models\Equipment;

new
#[Layout('layouts.overall-layout')]
class extends Component{

    public $equipments = [];

    public function mount()
    {
        // Fetch all available equipment
        $this->equipments = Equipment::all();
    }

};
?>

<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Available Equipment</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Browse through our collection of farm machinery and tools</p>
        </div>

        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($equipments as $equipment)
            <div
                class="group relative overflow-hidden rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                <img class="h-48 w-full object-contain" src="{{ asset('storage/'. $equipment->image) }}" alt="Tractor">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $equipment->name }}</h3>
                    <p class="mt-1 text-sm text-gray-500">KES {{ number_format($equipment->rate) }} / {{ $equipment->rate_period ?? $equipment->rate_type }}</p>
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <svg class="mr-1.5 h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ $equipment->location }}
                    </div>
                    <div class="mt-4">
                        <a href="#"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

