<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\TransaksiPasien;
use App\Models\Wilayah;
use App\Models\DataTindakan;
use App\Models\DataObat;
use Illuminate\Http\Request;
use App\Http\Requests\TransaksiPasienRequest;

class TransaksiPasienController extends Controller
{
    public function index()
    {
        // Mengambil semua data transaksi dengan relasi
        $transaksiPasien = TransaksiPasien::with(['wilayah', 'data_tindakan', 'data_obat'])->get();
        return view('pages.transaksipasien.index', compact('transaksiPasien'));
    }

    public function create()
    {
        $pasiens = Wilayah::all();
        $pelayanans = DataTindakan::all();
        $obat = DataObat::all();
        $dataTindakan = DataTindakan::all();
        return view('pages.transaksipasien.create', compact('pasiens', 'pelayanans', 'obat', 'dataTindakan'));
    }

    public function store(TransaksiPasienRequest $request)
    {
        $data = $request->all();
        // Simpan data transaksi pasien
        $transaksiPasien = TransaksiPasien::create($data);

        // Menyimpan data tindakan jika ada
        if (!empty($request->data_tindakan_id)) {
            $transaksiPasien->dataTindakan()->attach($request->data_tindakan_id);
        }

        return redirect()->route('transaksipasien.index');
    }

    public function update(TransaksiPasienRequest $request, $id)
    {
        $data = $request->all();

        $transaksiPasien = TransaksiPasien::findOrFail($id);
        $transaksiPasien->update($data);

        // Menyimpan data tindakan jika ada
        if (!empty($request->data_tindakan_id)) {
            $transaksiPasien->dataTindakan()->sync($request->data_tindakan_id);
        } else {
            $transaksiPasien->dataTindakan()->detach();
        }

        return redirect()->route('transaksipasien.index');
    }


    public function edit($id)
    {
        $transaksi = TransaksiPasien::findOrFail($id);
        $pasiens = Wilayah::all();
        $pelayanans = DataTindakan::all();
        $obat = DataObat::all();
        return view('pages.transaksipasien.edit', compact('transaksi', 'pasiens', 'pelayanans', 'obat'));
    }


    public function destroy($id)
    {
        $transaksi = TransaksiPasien::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksipasien.index')
            ->with('success', 'Transaksi pasien berhasil dihapus.');
    }
}
