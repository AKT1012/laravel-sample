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
        Schema::create('thread_tag', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thread_tag');
    }
};


Schema::create('thread_tag', function (Blueprint $table) {
    $table->id();
    $table->foreignId('thread_id')->constrained()->onDelete('cascade'); // スレッドID
    $table->foreignId('tag_id')->constrained()->onDelete('cascade'); // タグID
    $table->timestamps();
});