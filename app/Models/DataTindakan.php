<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTindakan extends Model
{
    use HasFactory;

    protected $table = 'data_tindakan';

    protected $fillable = [
        'nama_tindakan',
        'deskripsi',
        'biaya',
    ];
}

