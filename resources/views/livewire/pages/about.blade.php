<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Equipment;

new
#[Layout('layouts.overall-layout')]
class extends Component{
    //
}; ?>

<section class="bg-green-50 py-16 sm:py-24">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">About ShambaMax</h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">Empowering Smallholder Farmers with Access to Essential Farm Machinery</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center">
                <i class="fas fa-bullhorn text-green-600 text-3xl"></i>
                <div class="ml-4">
                    <h3 class="text-2xl font-bold text-gray-900">Our Mission</h3>
                    <p class="mt-4 text-gray-700">
                        At ShambaMax, our mission is to empower smallholder farmers in Kenya by providing an accessible platform for sharing farm machinery and equipment. We understand that the cost of machinery can be a barrier to productivity and growth for many farmers. Our platform connects those who own machinery with those who need it, facilitating a more sustainable and productive agricultural sector.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow mt-8">
            <div class="flex items-center">
                <i class="fas fa-eye text-green-600 text-3xl"></i>
                <div class="ml-4">
                    <h3 class="text-2xl font-bold text-gray-900">Our Vision</h3>
                    <p class="mt-4 text-gray-700">
                        We envision a future where every smallholder farmer has access to the machinery they need to thrive. By fostering a community of sharing and cooperation, we aim to enhance agricultural practices, increase yields, and support the overall economic growth of rural Kenya. Our vision is to be the leading platform in transforming how agricultural resources are accessed and utilized.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow mt-8">
            <div class="flex items-center">
                <i class="fas fa-cogs text-green-600 text-3xl"></i>
                <div class="ml-4">
                    <h3 class="text-2xl font-bold text-gray-900">How It Works</h3>
                    <p class="mt-4 text-gray-700">
                        ShambaMax operates on a simple yet effective model:
                    </p>
                    <ul class="list-disc list-inside mt-4 text-gray-700">
                        <li><strong>Register and List:</strong> Machinery owners can create a profile and list their equipment for sharing.</li>
                        <li><strong>Search and Connect:</strong> Farmers in need of machinery can search for available equipment, view details, and connect with owners.</li>
                        <li><strong>Book and Share:</strong> Once a connection is made, farmers can book the machinery and coordinate usage directly with the owner.</li>
                        <li><strong>Support and Feedback:</strong> We provide support throughout the process and encourage feedback to continually improve the platform.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow mt-8">
            <div class="flex items-center">
                <i class="fas fa-users text-green-600 text-3xl"></i>
                <div class="ml-4">
                    <h3 class="text-2xl font-bold text-gray-900">Our Team</h3>
                    <p class="mt-4 text-gray-700">
                        Our dedicated team is passionate about agriculture and committed to making a difference in the lives of smallholder farmers. With expertise in technology, agriculture, and community development, we work tirelessly to ensure that ShambaMax meets the needs of our users and contributes positively to the agricultural sector.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

