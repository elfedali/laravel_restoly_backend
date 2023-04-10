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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->index();
            $table->string('slug')->index();
            $table->string('code')->index();
            $table->string('flag')->nullable();
            $table->string('phone_code');
            $table->string('currency');
            $table->string('currency_symbol');

            // is active
            $table->boolean('is_active')->default(true);
        });

        // add cities
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->index();
            $table->string('slug')->index();

            // country_id
            $table->foreignId('country_id')->nullable()->constrained('countries');
        });

        // add regions
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->index();
            $table->string('slug')->index();

            // city_id
            $table->foreignId('city_id')->nullable()->constrained('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('regions');
    }
};
