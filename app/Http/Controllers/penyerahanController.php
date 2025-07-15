<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Penyerahan;


class penyerahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data dosen
        $nomor = 1;
        $penyerahan = Penyerahan::all();
        return view('penyerahan.index',compact('penyerahan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
         $pelanggan = Pelanggan::all();
         $jenis = Jenis::all();
         $penyerahan = Penyerahan::all();
        return view('penyerahan.form',compact('pelanggan','penyerahan','jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $penyerahan = new Penyerahan();
        $penyerahan->pelanggans_id = $request->pelanggan;
        $penyerahan->jenis_id = $request->jenis;
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
        // menampilkan data detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // form edit
        $penyerahan = Penyerahan::find($id);
        $pelanggan = Pelanggan::all();
        $jenis = Jenis::all();
        return view('penyerahan.edit',compact('penyerahan','pelanggan','jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $penyerahan = new Penyerahan();
        $penyerahan->pelanggans_id = $request->pelanggan_id;
        $penyerahan->jenis_id = $request->jenis_id;
        $penyerahan->tgl_penyerahan = $request->tgl_penyerahan;
        $penyerahan->tgl_selesai = $request->tgl_selesai;
        $penyerahan->tgl_pengambilan = $request->tgl_pengambilan;
        $penyerahan->harga = $request->harga;
        $penyerahan->berat = $request->berat;
        $penyerahan->save();

        return redirect('/penyerahan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus


        $penyerahan = Penyerahan::find($id);
        $penyerahan->delete();
        return redirect('/penyerahan');
    }
}
