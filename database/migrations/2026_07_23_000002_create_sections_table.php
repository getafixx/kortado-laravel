<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained()->cascadeOnDelete();

            // Matches a Blade component in resources/views/components/sections/{type}.blade.php
            // e.g. hero, problem, solution, how_it_works, feature_grid, testimonial, faq, cta
            $table->string('type');

            $table->unsignedInteger('order')->default(0);
            $table->boolean('is_visible')->default(true);

            $table->string('eyebrow')->nullable();   // small label above heading, e.g. "The Problem"
            $table->string('heading')->nullable();
            $table->text('subheading')->nullable();

            // Freeform extra fields per section type (button text/url, stat numbers, etc.)
            // Keeps schema flexible without a new migration for every new field.
            $table->json('content')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
