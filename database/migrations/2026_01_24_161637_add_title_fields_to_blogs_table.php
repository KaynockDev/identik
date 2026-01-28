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
        Schema::table('blogs', function (Blueprint $table) {
            // Title için çok dilli kolonlar ekle
            $table->string('title_tr')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title_tr');
        });
        
        // Mevcut title JSON verilerini title_tr ve title_en'e kopyala
        \DB::statement('UPDATE blogs SET title_tr = json_extract(title, "$.tr"), title_en = json_extract(title, "$.en") WHERE title IS NOT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['title_tr', 'title_en']);
        });
    }
};
