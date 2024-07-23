<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Surat_masuk;
use App\Models\Surat_keluar;
use App\Models\DataTindakan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahPegawai = Pegawai::count();
        $jumlahPasien = Surat_masuk::count();
        $jumlahObat = Surat_keluar::count();
        $jumlahTindakan = DataTindakan::count();

        return view('pages.home.index', compact('jumlahPegawai', 'jumlahPasien', 'jumlahObat', 'jumlahTindakan'));
    }
}
