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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('first_name');
            $table->string('last_name');

            $table->string('avatar')->nullable();

            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->default('Morocco');
         

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // add a unique constraint to the user_id column
            $table->unique('user_id');
            // add a unique constraint to the phone column
            $table->unique('phone');
            // add index to the phone column
            $table->index('phone');
            // add index to the user_id column
            $table->index('user_id'); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
