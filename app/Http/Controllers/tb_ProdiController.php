<?php

namespace App\Http\Controllers;

use App\Models\tb_prodi;
use Illuminate\Http\Request;

class tb_ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = tb_prodi::all();
        return view('koordinator.prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function show(tb_prodi $tb_prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_prodi $tb_prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_prodi $tb_prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_prodi $tb_prodi)
    {
        //
    }
}
