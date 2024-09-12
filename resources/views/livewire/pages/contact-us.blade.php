<?php

use Livewire\Volt\Component;
use App\Models\Contact;
// use Illuminate\Support\Facades\Mail;

use Livewire\Attributes\Layout;

new
#[Layout('layouts.overall-layout')]
class extends Component{
    public $name;
    public $email;
    public $message;

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        // Optionally, send an email notification
        // Mail::to('admin@example.com')->send(new ContactFormSubmitted($this->name, $this->email, $this->message));

        session()->flash('message', 'Your message has been sent successfully!');

        // Clear form fields
        $this->reset();
    }

}; ?>

<!-- resources/views/livewire/contact-us.blade.php -->
<div class="container px-4 py-12 mx-auto mt-10 md:px-8">
    <h1 class="mb-6 text-3xl font-bold">Contact Us</h1>

    @if (session()->has('message'))
        <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" wire:model="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" required>
            @error('name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" wire:model="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" required>
            @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea id="message" wire:model="message" rows="4" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50" required></textarea>
            @error('message') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="px-4 py-2 text-white bg-green-600 rounded-md hover:bg-green-700">Send Message</button>
    </form>
</div>
