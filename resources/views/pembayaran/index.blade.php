@extends('layouts.template')

@section('title')
    Data Pembayaran
@endsection

@section('headline')
    Data Pembayaran
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <a href="/pembayaran/tambah" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Tambah Data</a>
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
                        <th scope="col">penyerahan</th>
                        <th scope="col">nm_jenis</th>
                        <th scope="col">berat</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ( $pembayaran as $data )
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                <td>{{$data->penyerahan}}</td>
                                <td>{{$data->nm_jenis}}</td>
                                <td>{{$data->berat}}</td>

                                    <a href="" class="btn btn-warning btn-sm"><i class="fa fa-info"></i></a>
                                        <a href="/pembayaran/edit/{{$data->id}}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>

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
                                                Yakin Data pembayaran a.n. {{$data->nama}} ingin dihapus?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <form action="penyeeahan/{{$data->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
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
            </div>
        </div>
    </div>
</div>
@endsection

