<?php

namespace App\Http\Controllers;

use App\Models\DataTindakan;
use App\Http\Requests\DataTindakanRequest;
use Illuminate\Http\Request;

class DataTindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTindakan = DataTindakan::all();
        return view('pages.data_tindakan.index', compact('dataTindakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.data_tindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DataTindakanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataTindakanRequest $request)
    {
        DataTindakan::create($request->validated());

        return redirect()->route('datatindakan.index')
                         ->with('success', 'Data tindakan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataTindakan  $dataTindakan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DataTindakan::findOrFail($id);

        return view('pages.data_tindakan.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\DataTindakanRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataTindakanRequest $request, $id)
    {
        $dataTindakan = DataTindakan::findOrFail($id);
        $dataTindakan->update($request->validated());

        return redirect()->route('datatindakan.index')
                         ->with('success', 'Data Tindakan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataTindakan  $dataTindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataTindakan = DataTindakan::findOrFail($id);
        $dataTindakan->delete();

        return redirect()->route('datatindakan.index')
                         ->with('success', 'Data tindakan berhasil dihapus.');
    }
}
