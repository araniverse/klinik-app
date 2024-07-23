<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPasien extends Model
{
    use HasFactory;

    protected $table = 'transaksi_pasien';

    protected $dates = ['tanggal'];

    protected $fillable = [
        'pasien_id',
        'pelayanan_id',
        'obat_id',
        'tanggal',
        'total_biaya',
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'pasien_id');
    }

    public function data_tindakan()
    {
        return $this->belongsTo(DataTindakan::class, 'pelayanan_id');
    }

    public function data_obat()
    {
        return $this->belongsTo(DataObat::class, 'obat_id');
    }
}
