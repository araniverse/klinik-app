<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id(); // Kolom kunci utama 'id'
            $table->string('nama'); // Kolom nama pegawai
            $table->string('email')->unique(); // Kolom email pegawai, dengan batasan unik
            $table->string('no_hp'); // Kolom nomor telepon pegawai
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'
            $table->softDeletes(); // Kolom 'deleted_at' untuk soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('pegawai'); // Menghapus tabel jika rollback
    }
}
