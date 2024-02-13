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
        Schema::create('temporary_data', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('nama');
            $table->string('kecepatan');
            $table->string('ketepatan');
            $table->string('respon');
            $table->string('layanan');
            $table->string('pegawai');
            $table->string('etika');
            $table->string('kecepatanOne');
            $table->string('ketepatanTwo');
            $table->string('responThree');
            $table->string('layananFour');
            $table->string('pegawaiFive');
            $table->string('etikaSix');
            $table->string('simpulan');
            $table->string('saran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temporary_data');
    }
};
