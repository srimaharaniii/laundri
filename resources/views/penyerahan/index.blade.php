@extends('layouts.template')

@section('title')
    Data penyerahan
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
                                <th scope="col">nama Pelanggan</th>
                                <th scope="col">nama Jenis</th>
                                <th scope="col">Tgl Penyerahan</th>
                                <th scope="col">Tgl Selesai</th>
                                <th scope="col">Tgl Pengambilan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $penyerahan as $data)
                                <tr>
                                    <th scope="row">{{$nomor++}}</th>
                                    <td>{{$data->pelanggans->nm_pelanggan}}</td>
                                    <td>{{$data->jenis->nm_jenis}}</td>
                                    <td>{{$data->tgl_penyerahan}}</td>
                                    <td>{{$data->tgl_selesai}}</td>
                                    <td>{{$data->tgl_pengambilan}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>{{$data->berat}}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-info"></i></a>
                                        <a href="/penyerahan/edit/{{$data->id}}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>



                                      <!-- Tombol Delete dengan modal unik per ID -->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$data->id}}">
    <i class="fa fa-trash"></i>
</button>

<!-- Modal unik untuk setiap baris -->
<div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$data->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel{{$data->id}}">Konfirmasi Hapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data penyerahan <strong>{{ $data->nm_pelanggan }}</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="penyerahan/{{ $data->id }}" method="POST">
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
                    <td colspan="5" class="text-center">Data tidak tersedia.</td>
                </tr>
                @endforelse

                        </tbody>
                    </table>
    </div>

@endsection
