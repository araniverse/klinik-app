<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePegawaiTable extends Migration
{
    public function up()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->string('email')->nullable()->after('nama');
            $table->string('no_hp')->nullable()->after('email');

            // Hapus kolom lama jika tidak diperlukan lagi
            $table->dropColumn('jumlah_surat_masuk');
            $table->dropColumn('jumlah_surat_keluar');
        });
    }
    

    public function down()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            // Menambahkan kembali kolom lama jika rollback
            $table->integer('jumlah_surat_masuk')->nullable()->after('nama');
            $table->integer('jumlah_surat_keluar')->nullable()->after('jumlah_surat_masuk');
            
            // Hapus kolom yang baru ditambahkan jika rollback
            $table->dropColumn('email');
            $table->dropColumn('no_hp');
        });
    }
}
