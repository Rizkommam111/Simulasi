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
        Schema::create('inventaris', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_inventaris');
            $table->string('nama_barang');
            $table->enum('kondisi', ['Baik', "Perbaikan"]);
            $table->bigInteger('stok');
            $table->date('tanggal_register');
            $table->string('foto');
        });
        Schema::create('peminjamans', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_inventaris');
            $table->string('nama_barang');
            $table->string('nama_peminjam');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->enum('status', ['Proses', "Sudah Kembali", 'Belum Kembali']);
            $table->string('petugas');
            $table->foreign('id_inventaris')->references('id')->on('inventaris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
