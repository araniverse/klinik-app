<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_keluar', function (Blueprint $table) {
            // Pastikan kolom baru sudah ada
            $table->string('nama_obat')->after('id');
            $table->integer('harga')->after('nama_obat');
            
            // Hapus kolom yang tidak diperlukan
            $table->dropColumn('perihal');
            $table->dropColumn('penerima');
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
        Schema::table('surat_keluar', function (Blueprint $table) {
            // Kembalikan kolom yang dihapus jika rollback
            $table->string('perihal')->after('id');
            $table->string('penerima')->after('perihal');
            $table->date('tanggal')->after('penerima');
            
            // Hapus kolom yang baru ditambahkan jika rollback
            $table->dropColumn('nama_obat');
            $table->dropColumn('harga');
        });
    }
}
