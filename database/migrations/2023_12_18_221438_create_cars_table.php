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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year');
            $table->string('power');
            $table->string('eng_vol');
            $table->string('fuel');
            $table->string('price');
            $table->string('image_1');
            $table->timestamps();
            $table->unsignedBigInteger('category_id')->nullable;
            $table->index('category_id', 'car_category_idx');
            $table->foreign('category_id', 'car_category_fk')->on('categories')->references('id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};

