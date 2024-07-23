<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pasien', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('wilayah')->onDelete('cascade');
            $table->foreignId('pelayanan_id')->constrained('data_tindakan')->onDelete('cascade');
            $table->foreignId('obat_id')->constrained('data_obat')->onDelete('cascade');
            $table->integer('jumlah_obat');
            $table->decimal('total_biaya', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pasien');
    }
}
