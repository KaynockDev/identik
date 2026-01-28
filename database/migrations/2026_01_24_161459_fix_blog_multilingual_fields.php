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
        // SQLite'da renameColumn çalışmadığı için verileri kopyalıyoruz
        // Mevcut slug ve image verilerini slug_tr ve image_tr'ye kopyala
        \DB::statement('UPDATE blogs SET slug_tr = slug WHERE slug_tr IS NULL OR slug_tr = ""');
        \DB::statement('UPDATE blogs SET image_tr = image WHERE image_tr IS NULL OR image_tr = ""');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Geri alma işlemi gerekirse buraya eklenebilir
    }
};
