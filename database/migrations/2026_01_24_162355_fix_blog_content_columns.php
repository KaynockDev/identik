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
        // SQLite'da renameColumn çalışmadığı için manuel olarak yapıyoruz
        if (config('database.default') === 'sqlite') {
            // Mevcut verileri yedekle
            \DB::statement('CREATE TABLE blogs_backup AS SELECT * FROM blogs');
            
            // Tabloyu yeniden oluştur
            \DB::statement('DROP TABLE blogs');
            \DB::statement('CREATE TABLE blogs (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                slug VARCHAR NULL,
                title TEXT NULL,
                image VARCHAR NULL,
                content_tr TEXT NOT NULL,
                content_en TEXT NULL,
                published_at DATETIME NULL,
                sort INTEGER NOT NULL DEFAULT 9999,
                created_at DATETIME NULL,
                updated_at DATETIME NULL,
                slug_en VARCHAR NULL,
                image_en VARCHAR NULL,
                slug_tr TEXT NULL,
                image_tr TEXT NULL,
                title_tr VARCHAR NULL,
                title_en VARCHAR NULL
            )');
            
            // Verileri geri yükle (content -> content_tr)
            \DB::statement('INSERT INTO blogs (id, slug, title, image, content_tr, content_en, published_at, sort, created_at, updated_at, slug_en, image_en, slug_tr, image_tr, title_tr, title_en)
                SELECT id, slug, title, image, content, content_en, published_at, sort, created_at, updated_at, slug_en, image_en, slug_tr, image_tr, title_tr, title_en FROM blogs_backup');
            
            // Yedek tabloyu sil
            \DB::statement('DROP TABLE blogs_backup');
        } else {
            Schema::table('blogs', function (Blueprint $table) {
                $table->renameColumn('content', 'content_tr');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (config('database.default') !== 'sqlite') {
            Schema::table('blogs', function (Blueprint $table) {
                $table->renameColumn('content_tr', 'content');
            });
        }
    }
};
