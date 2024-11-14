<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\User;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        $pelanggan = Pelanggan ::all();
        $user = User ::all();
        return view('home.penjualan.index', compact('penjualan','pelanggan','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penjualan = Penjualan::all();
        $pelanggan = Pelanggan::all();
        $user = User ::all();
        return view('home.penjualan.tambah', compact('penjualan','pelanggan','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'id_pelanggan'=> $request->id_pelanggan,
            'id_user'=> $request->id_user,
            'tgl_penjualan'=> $request->date('tgl_penjualan'),
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penjualan::findOrFail($id)->delete();
        return redirect('/penjualan');
    }
}
