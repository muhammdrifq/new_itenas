<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\tb_prodi;
use Illuminate\Http\Request;
use App\Models\tb_koordinator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'name' => 'required|string|unique:users',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|min:8|',
            'password_confirmation' => 'min:8:|required_with:password|same:password'

        ]);

        $message = [
            'required' => 'Data tidak boleh kosong',
            'unique' => 'User Sudah ada!',
            'email' => 'Email maksimal :max karakter',
            'min' => 'Password minimam :min karakter',
            'same' => 'Konfirmasi Password tidak sama dengan Password',
        ];

        $validation = Validator::make($request->all(), $message);
        if ($validation->fails()) {
            session()->put('danger', 'Data yang anda input tidak valid, silahkan di ulang');
            return back()->withErrors($validation)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $koorRole = Role::where('name', 'koordinator')->first();
        $user->attachRole($koorRole);


        $koordinator = new tb_koordinator();
        $koordinator->id_user = $user->id;
        $koordinator->id_prodi = "-";
        $koordinator->nomorinduk = "-";
        $koordinator->no_telepon = "-";
        $koordinator->profile_pict = "-";
        return redirect()->route('koordinator.prodi.index')
                ->with('Sukses', 'Akun Koordinator berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $koordinator = tb_koordinator::findOrFail($id);
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
        $koordinator = tb_koordinator::findOrFail($id);
        return view('koordinator.prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAkun(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:dns|max:255',
            'password' => 'required_|min:8|confirmed'

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
