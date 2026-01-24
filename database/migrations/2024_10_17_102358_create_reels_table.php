<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("instagram_id")->unique();
            $table->text("media_url");
            $table->text("thumbnail_url");
            $table->text("permalink");
            $table->unsignedBigInteger("like_count");
            $table->datetime("datetime");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reels');
    }
};
