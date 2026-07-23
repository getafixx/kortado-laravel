<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create(
            'pages',
            function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique(); // '' or 'home' for the homepage, 'about', 'solutions', 'contact'
                $table->string('meta_description')->nullable();
                $table->boolean('is_published')->default(true);
                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
