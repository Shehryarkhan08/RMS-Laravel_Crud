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
        Schema::create('car_customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers', 'customer_id');
            $table->foreignId('meal_id')->constrained('meals', 'meal_id');
            $table->foreignId('history_id')->constrained('histories', 'history_id');
            $table->foreignId('car_id')->constrained('cars', 'car_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_customers');
    }
};
