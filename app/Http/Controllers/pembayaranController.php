<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data penyerahan
        $nomor = 1;
        $pembayaran = Pembayaran:: all();
        return view('pembayaran.index', compact('pembayaran','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
         return view('pembayaran.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $pembayaran = new Pembayaran();
        $pembayaran->penyerahan = $request->penyerahan;
        $pembayaran->nm_jenis = $request->nm_jenis;
        $pembayaran->berat = $request->berat;
        $pembayaran->save();

        return redirect('/pelanggan');
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