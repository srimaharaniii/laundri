<?php

namespace App\Http\Controllers;

use App\Models\Penyerahan;
use Illuminate\Http\Request;

class penyerahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data penyerahan
        $nomor = 1;
        $penyerahan = Penyerahan:: all();
        return view('penyerahan.index', compact('penyerahan','nomor'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
         return view('penyerahan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $penyerahan = new Penyerahan();
        $penyerahan->pelanggan = $request->pelanggan;
        $penyerahan->jenis = $request->jenis;
        $penyerahan->tgl_penyerahan = $request->tgl_penyerahan;
        $penyerahan->tgl_selesai = $request->tgl_selesai;
        $penyerahan->tgl_pengambilan = $request->tgl_pengambilan;
        $penyerahan->harga = $request->harga;
        $penyerahan->berat = $request->berat;
        $penyerahan->save();

         return redirect('/penyerahan');
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
        //
    }
}
