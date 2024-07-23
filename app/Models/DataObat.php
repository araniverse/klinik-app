<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataObat extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel, jika berbeda dari nama model dalam bentuk jamak
    protected $table = 'data_obat';

    protected $fillable = [
        'nama_obat', 'aturan_pakai', 'harga'
    ];

    // Jika ada relasi yang diperlukan, tambahkan di sini
    // Contoh: jika Anda masih memerlukan relasi ke Pegawai, Anda bisa menghapus baris ini
    // public function pegawai()
    // {
    //     return $this->belongsTo(Pegawai::class, 'id_pegawai');
    // }
}
