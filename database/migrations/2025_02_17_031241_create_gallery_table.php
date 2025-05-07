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
    Schema::create('gallery', function (Blueprint $table) {
        $table->id('id');
        $table->string('nama_foto');
        $table->foreignId('genre_id')->nullable()->constrained('genre')->onDelete('cascade');  // Menambahkan nullable()
        $table->string('tempat');
        $table->string('caption');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
