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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();

            $table->unsignedBigInteger('stories_id')->nullable();
            $table->foreign('stories_id')->references('id')->on('stories')->onDelete('cascade');

            $table->unsignedBigInteger('media_id')->nullable();
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');

            $table->unsignedBigInteger('social_id')->nullable();
            $table->foreign('social_id')->references('id')->on('social_networks')->onDelete('cascade');

            $table->unsignedBigInteger('link_id')->nullable();
            $table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');

            $table->unsignedBigInteger('comment_id')->nullable();
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
