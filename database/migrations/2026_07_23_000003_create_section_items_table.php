<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create(
            'section_items',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId('section_id')->constrained()->cascadeOnDelete();

                $table->unsignedInteger('order')->default(0);

                $table->string('title')->nullable();
                $table->text('body')->nullable();
                $table->string('icon')->nullable();  // icon name/class, or leave null and use uploaded image (stage 3)
                $table->string('link_url')->nullable();
                $table->string('link_text')->nullable();

                // For stat blocks (e.g. "2,458 Participants"), FAQ (question/answer maps to title/body),
                // step numbers, etc. Extra shape-specific data without more columns.
                $table->json('meta')->nullable();

                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('section_items');
    }
};
