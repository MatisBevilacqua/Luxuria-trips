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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_reservation_id');
            $table->foreign('client_reservation_id')->references('id')->on('client_reservations')->onDelete('cascade');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->dateTime('reservation_date');
            $table->string('total');
            $table->unsignedBigInteger('car_id')->nullable();
            $table->unsignedBigInteger('yacht_id')->nullable();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('yacht_id')->references('id')->on('yachts')->onDelete('cascade');
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
