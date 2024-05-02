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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->foreign('author')->references('name')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title')->unique();
            $table->string('banner')->nullable();
            $table->string('slug')->unique();
            $table->string('category');
            $table->foreign('category')->references('name')->on('categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('image');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
