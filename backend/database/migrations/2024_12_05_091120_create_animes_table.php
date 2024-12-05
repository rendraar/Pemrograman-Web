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
        Schema::create('datanime', function (Blueprint $table) {
            $table->id();
            $table->string('anime_name');
            $table->string('slug');
            $table->string('type');
            $table->string('status');
            $table->string('image_url');
            $table->text('description')->nullable();
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};