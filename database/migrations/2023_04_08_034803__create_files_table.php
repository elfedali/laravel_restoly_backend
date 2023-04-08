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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->nullable();
            $table->string('path')->nullable(); // storage path
            $table->string('url')->nullable(); // public url

            // is main file
            $table->boolean('is_main')->default(false);

            $table->string('extension')->nullable(); // file extension (jpg, png, pdf, etc)
            $table->string('mime_type')->nullable(); // mime type of file (image/jpeg, image/png, application/pdf, etc)

            $table->integer('size')->nullable(); // file size in bytes
            $table->string('disk')->nullable(); // disk name (local, s3, etc)


        });
        Schema::create('business_file', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_id');
            $table->unsignedBigInteger('file_id');
            $table->timestamps();

            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_file');
        Schema::dropIfExists('files');
    }
};
