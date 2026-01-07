<?php

use App\Enums\BookingStatus;
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
        Schema::create('booking_applications', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->enum('type', [
                \App\Enums\BookingType::SIMPLE,
                \App\Enums\BookingType::BIRTHDAY
            ])->default(\App\Enums\BookingType::SIMPLE)->nullable();
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('email')->nullable();
            $table->enum('status', [
                BookingStatus::APPROVED,
                BookingStatus::REJECTED,
                BookingStatus::PENDING,
            ])->default(\App\Enums\BookingStatus::APPROVED);
            $table->string('room')->nullable();
            $table->integer('attendees')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_applications');
    }
};
