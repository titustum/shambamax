<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\Equipment;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

new
#[Layout('layouts.overall-layout')]
class extends Component {

    use WithFileUploads;

    public $equipment_name;
    public $category_id;
    public $description;
    public $rate;
    public $rate_period = 'day';
    public $location;
    public $availability;
    public $image;
    public $categories;

    public function mount(){
        $this->categories = Category::all();
    }

    protected $rules = [
        'equipment_name' => 'required|string|max:255',
        'category_id' => 'required|string|max:255',
        'description' => 'required|string|max:500',
        'rate' => 'required|numeric|min:0',
        'rate_period' => 'required|string|in:hour,day,week,month',
        'location' => 'required|string|max:255',
        'availability' => 'required|string|in:always,weekdays,weekends,custom',
        'image' => 'required|image|max:10240', // max file size 10MB
    ];

    public function postEquipment()
    {
        $this->validate();

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('equipment_images', 'public');
        }

        Equipment::create([
            'name' => $this->equipment_name,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'rate' => $this->rate,
            'rental_period' => $this->rate_period,
            'location' => $this->location,
            'availability' => $this->availability,
            'image' => $imagePath,
            'user_id' => auth()->id(), // Assuming the user is authenticated
        ]);

        session()->flash('message', 'Equipment posted successfully.');

        // Clear input fields
        $this->reset();

        $this->categories = Category::all();

        // Optionally redirect or update view
        // return redirect()->route('equipment.list');
    }
}; ?>

<!-- Post Equipment Section -->
<section class="bg-green-50 py-16 sm:py-24">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">List Your Equipment</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Share your machinery and earn money when you're not using it</p>
        </div>

        @if (session()->has('message'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="postEquipment" class="space-y-8">
            <div class="space-y-6 bg-white p-6 rounded-lg shadow-lg">
                <!-- Equipment Name -->
                <div>
                    <label for="equipment_name" class="block text-sm font-medium text-gray-700">Equipment Name</label>
                    <input type="text" wire:model="equipment_name" id="equipment_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                    @error('equipment_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Equipment Category -->
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select id="category_id" wire:model="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                        <option value="">Select a category</option>
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Equipment Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea wire:model="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required></textarea>
                    @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Rental Rate -->
                <div>
                    <label for="rate" class="block text-sm font-medium text-gray-700">Rental Rate</label>
                    <div class="grid gap-2 sm:flex items-center sm:space-x-4">
                        <div class="mt-1 relative flex-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">KES</span>
                            </div>
                            <input type="number" wire:model="rate" id="rate" class="pl-12 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="0.00" required>
                            @error('rate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex-shrink-0">
                            <select wire:model="rate_period" id="rate_period" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                <option value="hour">Per Hour</option>
                                <option value="day">Per Day</option>
                                <option value="week">Per Week</option>
                                <option value="month">Per Month</option>
                            </select>
                            @error('rate_period') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Location -->
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" wire:model="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                    @error('location') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Availability -->
                <div>
                    <label for="availability" class="block text-sm font-medium text-gray-700">Availability</label>
                    <select wire:model="availability" id="availability" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                        <option value="">Select availability</option>
                        <option value="always">Always available</option>
                        <option value="weekdays">Weekdays only</option>
                        <option value="weekends">Weekends only</option>
                        <option value="custom">Custom schedule</option>
                    </select>
                    @error('availability') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
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
                                    <input id="file-upload" type="file" accept="image/*" wire:model="image" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                    @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
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


