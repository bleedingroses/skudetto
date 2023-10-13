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
        Schema::create('tahsins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->enum('grup', ['Umar Bin Khattab', 'Utsman Bin Affan', 'Abu Bakar']);
            $table->string('gambar');
            $table->string('nama');
            $table->string('surat')->nullable();
            $table->string('ayat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahsins');
    }
};
