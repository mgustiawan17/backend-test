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
        Schema::create('subfolders', function (Blueprint $table) {
            $table->id();
            $table->integer('folder_id');
            $table->string('name_subfolder');
            $table->string('path_subfolder');
            $table->string('ukuran_subfolder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subfolders');
    }
};
