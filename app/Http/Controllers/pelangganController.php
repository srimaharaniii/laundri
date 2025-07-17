<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Pelanggan;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data dosen
        $nomor = 1;
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index',compact('pelanggan','nomor'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
        return view('pelanggan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $pelanggan = new Pelanggan();
        $pelanggan->nm_pelanggan = $request->nm_pelanggan;
        $pelanggan->almt_pelanggan = $request->almt_pelanggan;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->save();

        return redirect('/pelanggan');
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
        $pelanggan = pelanggan::find($id);
        return view('pelanggan.edit',compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nm_pelanggan = $request->nm_pelanggan;
        $pelanggan->almt_pelanggan = $request->almt_pelanggan;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->save();

        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus

        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }

}
