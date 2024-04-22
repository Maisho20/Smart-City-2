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
        Schema::create('homes', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('smartIco');
            $table->string('smartImg');
            $table->string('routes');
            $table->string('judulSmart');
            $table->string('subJudulSmart');
            $table->string('smartDesc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
