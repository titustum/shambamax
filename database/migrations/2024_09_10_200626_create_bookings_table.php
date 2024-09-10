<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // The user who made the booking
            $table->foreignId('equipment_id')->constrained()->onDelete('cascade'); // The equipment being booked
            $table->date('start_date');
            $table->date('end_date');
            $table->string('purpose')->nullable();
            $table->enum('delivery_option', ['pickup', 'delivery']);
            $table->text('address')->nullable(); // Only needed if delivery option is 'delivery'
            $table->text('requirements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
