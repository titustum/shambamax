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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->text('description');
            $table->integer('rate'); // Allows for rates
            $table->enum('rate_type', ['hour', 'day', 'week', 'month'])->default('day'); // Type of rental rate
            $table->string('location'); // Store location as a nearby town or address
            $table->decimal('latitude', 10, 7)->nullable(); // Latitude
            $table->decimal('longitude', 10, 7)->nullable(); // Longitude
            $table->string('availability')->default('always');
            $table->string('image')->nullable(); // Image file path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
