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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Links to categories table
            $table->string('name');
            $table->decimal('price', 10, 2); // Handles monetary values accurately
            $table->string('duration'); // e.g., "8 weeks" or "3 hours"
            $table->longText('description');
            $table->string('image');
            $table->integer('students_count')->default(0); // Tracks enrolled students
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
