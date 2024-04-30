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
        Schema::create('data_dokumens', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('judul');
            $table->string('file');
            $table->string('rute');
            $table->string('kategori');
            $table->string('tahun');
            $table->string('upload_at')->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dokumens');
    }
};
