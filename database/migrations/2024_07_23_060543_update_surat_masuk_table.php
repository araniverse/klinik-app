<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_masuk', function (Blueprint $table) {
            // Hapus kolom id_pegawai
            $table->dropColumn('id_pegawai');
            
            // Ubah kolom perihal menjadi nama
            $table->renameColumn('perihal', 'nama');
            
            // Ubah kolom pengirim menjadi wilayah
            $table->renameColumn('pengirim', 'wilayah');
            
            // Hapus kolom tanggal
            $table->dropColumn('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_masuk', function (Blueprint $table) {
            // Tambahkan kembali kolom id_pegawai
            $table->integer('id_pegawai');
            
            // Ubah kolom nama kembali menjadi perihal
            $table->renameColumn('nama', 'perihal');
            
            // Ubah kolom wilayah kembali menjadi pengirim
            $table->renameColumn('wilayah', 'pengirim');
            
            // Tambahkan kembali kolom tanggal
            $table->date('tanggal');
        });
    }
}
