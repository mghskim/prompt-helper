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
        Schema::table('posts', function (Blueprint $table) {
            // Add new columns
            $table->string('category')->nullable()->after('body');
            $table->integer('height')->nullable()->after('category');
            $table->integer('width')->nullable()->after('height');
            $table->string('ai_model')->after('width');
            $table->string('version')->after('ai_model');

            // Modify existing columns
            $table->string('title')->nullable()->change(); // Make title nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Drop the new columns
            $table->dropColumn(['category', 'height', 'width', 'ai_model', 'version']);

            // Revert the 'title' column to be non-nullable if needed
            $table->string('title')->nullable(false)->change();
        });
    }
};
