<?php

use Livewire\Volt\Component;

use Livewire\Attributes\Layout;
use App\Models\Equipment;
use App\Models\Booking;

new
#[Layout('layouts.overall-layout')]
class extends Component{

    public $equipment;
    public $start_date;
    public $end_date;
    public $purpose;
    public $delivery_option;
    public $address;
    public $requirements;

    public function mount($id)
    {
        // Fetch equipment by ID
        $this->equipment = Equipment::findOrFail($id);
    }

    public function bookEquipment()
    {
        $this->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'purpose' => 'nullable|string|max:255',
            'delivery_option' => 'required|in:pickup,delivery',
            'address' => 'nullable|string|max:255',
            'requirements' => 'nullable|string|max:255',
        ]);

        // Create a new booking
        Booking::create([
            'user_id' => auth()->id(),
            'equipment_id' => $this->equipment->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'purpose' => $this->purpose,
            'delivery_option' => $this->delivery_option,
            'address' => $this->delivery_option === 'delivery' ? $this->address : null,
            'requirements' => $this->requirements,
        ]);

        // Redirect or return response
        session()->flash('success', 'Your booking request has been submitted.');
        // return redirect(route('all.equipment'));
    }



};
 ?>

<section class="bg-green-50 py-16 sm:py-24">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Book Equipment</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Reserve the machinery you need for your farm</p>
        </div>

        <form wire:submit.prevent='bookEquipment' class="space-y-8">
            <div class="space-y-6 bg-white p-6 rounded-lg shadow">
                <!-- Equipment Details -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Equipment</label>
                    <p class="mt-1 text-gray-900">{{ $equipment->name }}</p>
                </div>

                <!-- Booking Dates -->
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                        <input type="date" wire:model.defer="start_date" id="start_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                    </div>
                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                        <input type="date" wire:model.defer="end_date" id="end_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                    </div>
                </div>

                <!-- Purpose of Rental -->
                <div>
                    <label for="purpose" class="block text-sm font-medium text-gray-700">Purpose of Rental</label>
                    <textarea wire:model.defer="purpose" id="purpose" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Briefly describe how you'll use the equipment"></textarea>
                </div>

                <!-- Delivery Option -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Delivery Option</label>
                    <div class="mt-2 space-y-4">
                        <div class="flex items-center">
                            <input id="pickup" wire:model.defer="delivery_option" name="delivery_option" type="radio" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300" value="pickup" checked>
                            <label for="pickup" class="ml-3 block text-sm font-medium text-gray-700">I'll pick up the equipment</label>
                        </div>
                        <div class="flex items-center">
                            <input id="delivery" wire:model.defer="delivery_option" name="delivery_option" type="radio" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300" value="delivery">
                            <label for="delivery" class="ml-3 block text-sm font-medium text-gray-700">I need the equipment delivered</label>
                        </div>
                    </div>
                </div>

                <!-- Delivery Address (conditionally displayed) -->
                <div id="delivery_address" class="{{ $delivery_option === 'delivery' ? '' : 'hidden' }}">
                    <label for="address" class="block text-sm font-medium text-gray-700">Delivery Address</label>
                    <textarea wire:model.defer="address" id="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Enter the delivery address"></textarea>
                </div>

                <!-- Additional Requirements -->
                <div>
                    <label for="requirements" class="block text-sm font-medium text-gray-700">Additional Requirements</label>
                    <textarea wire:model.defer="requirements" id="requirements" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Any special requests or requirements?"></textarea>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Request Booking
                </button>
            </div>
        </form>
    </div>

    <script>
        // JavaScript to show/hide delivery address based on delivery option
        document.addEventListener('DOMContentLoaded', function() {
            const deliveryOptions = document.querySelectorAll('input[name="delivery_option"]');
            const deliveryAddress = document.getElementById('delivery_address');

            deliveryOptions.forEach(option => {
                option.addEventListener('change', function() {
                    if (this.value === 'delivery') {
                        deliveryAddress.classList.remove('hidden');
                    } else {
                        deliveryAddress.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</section>

