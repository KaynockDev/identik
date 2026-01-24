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
        Schema::table('faqs', function (Blueprint $table) {
            // Remove the unique constraint on locale and order
            $table->dropUnique('faqs_locale_order_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faqs', function (Blueprint $table) {
            // Re-add the unique constraint if needed
            $table->unique(['locale', 'order'], 'faqs_locale_order_unique');
        });
    }
};
