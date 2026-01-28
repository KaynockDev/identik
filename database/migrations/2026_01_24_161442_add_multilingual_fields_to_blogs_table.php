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
            // Slug için çok dilli kolonlar ekle
            $table->string('slug_en')->nullable()->after('slug');
            // Mevcut slug'ı slug_tr olarak rename et (SQLite için manuel yapılacak)
            
            // Image için çok dilli kolonlar ekle
            $table->string('image_en')->nullable()->after('image');
            // Mevcut image'ı image_tr olarak rename et (SQLite için manuel yapılacak)
        });
        
        // SQLite'da renameColumn çalışmadığı için manuel olarak yapıyoruz
        if (config('database.default') === 'sqlite') {
            \DB::statement('ALTER TABLE blogs ADD COLUMN slug_tr TEXT');
            \DB::statement('ALTER TABLE blogs ADD COLUMN image_tr TEXT');
            
            // Mevcut verileri kopyala
            \DB::statement('UPDATE blogs SET slug_tr = slug, image_tr = image');
            
            // Eski kolonları sil (SQLite'da drop column yok, bu yüzden tabloyu yeniden oluşturmalıyız)
            // Ama bu riskli, o yüzden sadece yeni kolonları ekleyip eski kolonları nullable yapalım
        } else {
            Schema::table('blogs', function (Blueprint $table) {
                $table->renameColumn('slug', 'slug_tr');
                $table->renameColumn('image', 'image_tr');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['slug_en', 'image_en']);
        });
        
        if (config('database.default') !== 'sqlite') {
            Schema::table('blogs', function (Blueprint $table) {
                $table->renameColumn('slug_tr', 'slug');
                $table->renameColumn('image_tr', 'image');
            });
        }
    }
};
