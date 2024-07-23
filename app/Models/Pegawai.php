<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use SoftDeletes;

    protected $table = 'pegawai';

    protected $primaryKey = 'id'; // Menyebutkan kolom kunci utama

    public $incrementing = true; // Menyebutkan bahwa kolom kunci utama auto-increment

    protected $fillable = ['nama', 'email', 'no_hp'];

    protected $dates = ['deleted_at'];
}
