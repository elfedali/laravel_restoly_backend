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
        // kitchen types : American, Italian, Mexican, etc
        Schema::create('kitchens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('language')->default('en');
        });
        // delivery, pickup, dine-in
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('language')->default('en');
        });
        // business types : restaurant, cafe, etc
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();

            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();

            $table->string('email')->nullable();

            $table->boolean('is_verified')->default(false);
            $table->boolean('is_active')->default(true);

            $table->boolean('is_without_reservation')->default(false);


            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable()->default('Morocco');

            $table->string('logo')->nullable();

            // latitude and longitude
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 10, 8)->nullable();


            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('whatsapp')->nullable();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained(); // select from categories table ( restaurant, cafe, hotel, etc )
        });

        Schema::create('business_kitchen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('business_id')->constrained();
            $table->foreignId('kitchen_id')->constrained();
        });

        Schema::create('business_service', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('business_id')->constrained();
            $table->foreignId('service_id')->constrained();
        });

        Schema::create('hours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('day_of_week');
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();

            $table->foreignId('business_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
        Schema::dropIfExists('business_kitchen');
        Schema::dropIfExists('business_service');
        Schema::dropIfExists('hours');
    }
};
