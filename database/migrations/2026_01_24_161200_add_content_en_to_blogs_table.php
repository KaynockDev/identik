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
            // Mevcut content'i content_tr olarak rename et
            $table->renameColumn('content', 'content_tr');
            // İngilizce içerik için yeni kolon ekle
            $table->longText('content_en')->nullable()->after('content_tr');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('content_en');
            $table->renameColumn('content_tr', 'content');
        });
    }
};
