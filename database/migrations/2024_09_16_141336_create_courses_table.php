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
            $table->string('title');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->text('description');
            $table->string('level');
            $table->decimal('price', 8, 2);
            $table->integer('duration');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('course_slug')->unique();
            $table->timestamps();


            // Foreign key relationship to the categories table
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
