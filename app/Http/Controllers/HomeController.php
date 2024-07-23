<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Wilayah;
use App\Models\DataObat;
use App\Models\DataTindakan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahPegawai = Pegawai::count();
        $jumlahPasien = Wilayah::count();
        $jumlahObat = DataObat::count();
        $jumlahTindakan = DataTindakan::count();

        return view('pages.home.index', compact('jumlahPegawai', 'jumlahPasien', 'jumlahObat', 'jumlahTindakan'));
    }
}
