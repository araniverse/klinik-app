<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;
use App\Http\Requests\WilayahRequest;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Wilayah::all();

        return view('pages.wilayah.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.wilayah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WilayahRequest $request)
    {
        $data = $request->all();

        Wilayah::create($data);

        return redirect()->route('wilayah.index')
                         ->with('success', 'Wilayah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Implement if needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Wilayah::findOrFail($id);

        return view('pages.wilayah.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WilayahRequest $request, $id)
    {
        $data = $request->all();

        $item = Wilayah::findOrFail($id);
        $item->update($data);

        return redirect()->route('wilayah.index')
                         ->with('success', 'Wilayah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Wilayah::findOrFail($id);
        $item->delete();

        return redirect()->route('wilayah.index')
                         ->with('success', 'Wilayah berhasil dihapus.');
    }
}
