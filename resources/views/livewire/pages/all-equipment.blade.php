<?php

// Volt to show all available equipments

use Livewire\Volt\Component;

use Livewire\Attributes\Layout;
use App\Model\Equipment;

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
            @foreach($equipments as $equipment)
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $equipment->image) }}" alt="{{ $equipment->name }}">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $equipment->name }}</h3>
                    <p class="mt-2 text-gray-600">{{ $equipment->description }}</p>
                    <p class="mt-4 text-gray-900 font-semibold">KES {{ number_format($equipment->rental_rate, 2) }} per {{ $equipment->rental_period }}</p>
                    <a href="{{ route('equipment.show', $equipment->id) }}" class="mt-4 inline-block text-green-600 hover:text-green-800">View Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

