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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->index();
            $table->string('slug')->index();

            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('color')->nullable();
            $table->integer("position")->default(0);
            $table->boolean("is_active")->default(true);

            // business id
            $table->foreignId('business_id')->nullable()->constrained('businesses');
        });
        // dishes
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->index();
            $table->string('slug')->index();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('color')->nullable();
            $table->integer("position")->default(0);
            $table->boolean("is_active")->default(true);

            // menu_id
            $table->foreignId('menu_id')->nullable()->constrained('menus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
