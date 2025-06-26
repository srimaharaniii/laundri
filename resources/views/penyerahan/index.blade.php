@extends('layouts.template')

@section('title')
    Data Penyerahan
@endsection

@section('headline')
    Data Penyerahan
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <a href="/penyerahan/tambah" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Tambah Data</a>
        </h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Tgl Penyerahan</th>
                                <th scope="col">Tgl Selesai</th>
                                <th scope="col">Tgl Pengambilan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Berat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $penyerahan as $data)
                                <tr>
                                    <th scope="row">{{$nomor++}}</th>
                                    <td>{{$data->pelanggan}}</td>
                                    <td>{{$data->jenis}}</td>
                                    <td>{{$data->tgl_penyerahan}}</td>
                                    <td>{{$data->tgl_selesai}}</td>
                                    <td>{{$data->tgl_pengambilan}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>{{$data->berat}}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-info"></i></a>
                                        <a href="/penyerahan/edit/{{$data->id}}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>


                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                        <i class="fa fa-trash"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin Data Penyerahan a.n. {{$data->nama}} ingin dihapus?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <form action="penyerahan/{{$data->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>

                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="5" scope="row">Data Tidak Ada</th>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
    </div>

@endsection
