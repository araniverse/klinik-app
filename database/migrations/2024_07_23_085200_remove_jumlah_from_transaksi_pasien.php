<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveJumlahFromTransaksiPasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_pasien', function (Blueprint $table) {
            $table->dropColumn('jumlah_obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_pasien', function (Blueprint $table) {
            $table->integer('jumlah_obat')->nullable(); // Sesuaikan dengan tipe data dan properti yang sebelumnya
        });
    }
}
