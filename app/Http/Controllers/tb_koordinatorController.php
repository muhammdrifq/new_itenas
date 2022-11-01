<?php

namespace App\Http\Controllers;

use App\Models\tb_koordinator;
use App\Models\tb_prodi;
use Illuminate\Http\Request;

class tb_koordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koor = tb_koordinator::all();
        return view('koordinator.koor.index', compact('koor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koordinator.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_prodi' => 'required',

        ]);

        $prodi = new tb_prodi();
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect()->route('koordinator.prodi.index')
            ->with('Sukses', 'Data Prodi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodi = tb_prodi::findOrFail($id);
        return view('koordinator.prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = tb_prodi::findOrFail($id);
        return view('koordinator.prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_prodi' => 'required',

        ]);

        $prodi = tb_prodi::findOrFail($id);
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect()->route('koordinator.prodi.index')
            ->with('Sukses', 'Data prodi berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodi = tb_prodi::find($id);

        if (!tb_prodi::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('prodi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
