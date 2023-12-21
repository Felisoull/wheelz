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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('quantity');
            $table->string('status')->nullable;
            $table->timestamps();

            $table->unsignedBigInteger('car_id')->nullable;
            $table->index('car_id', 'order_car_idx');
            $table->foreign('car_id', 'order_car_fk')->on('cars')->references('id');

            $table->unsignedBigInteger('user_id')->nullable;
            $table->index('user_id', 'order_user_idx');
            $table->foreign('user_id', 'order_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

