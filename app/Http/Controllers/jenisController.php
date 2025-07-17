<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data dosen
        $nomor = 1;
        $jenis = Jenis::all();
        return view('jenis.index',compact('jenis','nomor'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
        return view('jenis.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $jenis = new Jenis();
        $jenis->nm_jenis = $request->nm_jenis;
        $jenis->harga = $request->harga;
        $jenis->save();

        return redirect('/jenis');
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
        $jenis = Jenis::find($id);
        return view('jenis.edit',compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $jenis = Jenis::find($id);
        $jenis->nm_jenis = $request->nm_jenis;
        $jenis->harga = $request->harga;
        $jenis->save();

        return redirect('/jenis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus

        $jenis = Jenis::find($id);
        $jenis->delete();

        return redirect('/jenis');
    }

}
