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
        Schema::create('form_threes', function (Blueprint $table) {
            $table->id();
            $table->integer('key_user'); 
            $table->string('kecepatan');
            $table->string('ketepatan');
            $table->string('respon');
            $table->string('layanan');
            $table->string('pegawai');
            $table->string('etika');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_threes');
    }
};
