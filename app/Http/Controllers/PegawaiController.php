<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Http\Requests\PegawaiRequest;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Pegawai::all();
        return view('pages.pegawai.index')->with('items', $items);
    }

    public function create()
    {
        return view('pages.pegawai.create');
    }

    public function store(PegawaiRequest $request)
    {
        $data = $request->only(['nama', 'email', 'no_hp']);
        Pegawai::create($data);
        return redirect()->route('pegawai.index');
    }

    public function edit($id)
    {
        $item = Pegawai::findOrFail($id);
        return view('pages.pegawai.edit')->with('item', $item);
    }

    public function update(PegawaiRequest $request, $id)
    {
        $data = $request->only(['nama', 'email', 'no_hp']);
        $item = Pegawai::findOrFail($id);
        $item->update($data);
        return redirect()->route('pegawai.index');
    }

    public function destroy($id)
    {
        $item = Pegawai::findOrFail($id);
        $item->delete();
        return redirect()->route('pegawai.index');
    }
}
