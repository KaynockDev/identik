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
        // SQLite'da change() çalışmadığı için manuel olarak yapıyoruz
        if (config('database.default') === 'sqlite') {
            // SQLite'da kolon tipini değiştirmek için tabloyu yeniden oluşturmak gerekir
            // Ama bu riskli, o yüzden sadece unique constraint'i kaldırıp nullable yapıyoruz
            \DB::statement('CREATE TABLE blogs_new AS SELECT * FROM blogs');
            \DB::statement('DROP TABLE blogs');
            \DB::statement('CREATE TABLE blogs (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                slug VARCHAR NULL,
                title TEXT NOT NULL,
                image VARCHAR NOT NULL,
                content TEXT NOT NULL,
                published_at DATETIME NULL,
                sort INTEGER NOT NULL DEFAULT 9999,
                created_at DATETIME NULL,
                updated_at DATETIME NULL,
                content_en TEXT NULL,
                slug_en VARCHAR NULL,
                image_en VARCHAR NULL,
                slug_tr TEXT NULL,
                image_tr TEXT NULL,
                title_tr VARCHAR NULL,
                title_en VARCHAR NULL
            )');
            \DB::statement('INSERT INTO blogs SELECT * FROM blogs_new');
            \DB::statement('DROP TABLE blogs_new');
        } else {
            Schema::table('blogs', function (Blueprint $table) {
                $table->string('slug')->nullable()->change();
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
                $table->string('slug')->nullable(false)->change();
            });
        }
    }
};
