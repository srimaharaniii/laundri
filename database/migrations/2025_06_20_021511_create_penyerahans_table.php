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
        Schema::create('penyerahans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pelanggans_id');
            $table->bigInteger('jenis_id');
            $table->date('tgl_penyerahan');
            $table->date('tgl_tgl selesai');
            $table->date('tgl_pengambilan');
            $table->string('harga');
            $table->string('berat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyerahans');
    }
};
