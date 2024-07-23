<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanggalToTransaksiPasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_pasien', function (Blueprint $table) {
            $table->date('tanggal')->nullable(); // Menambahkan kolom tanggal
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
            $table->dropColumn('tanggal'); // Menghapus kolom tanggal jika rollback
        });
    }
}
