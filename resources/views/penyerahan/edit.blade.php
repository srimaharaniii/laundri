@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Data penyerahan') }}
                </div>

                <div class="card-body">

                    <div class="card-body">
                        <form action="/penyerahan" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Pelanggan</label>
                            <select name="pelanggan" id="" class="form-control">
                                <option value="">-Nama Pelanggan-</option>
                                @foreach ($pelanggan as $item)
                                    <option value="{{$item->id}}">{{$item->nm_pelanggan}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jenis</label>
                                <input type="text" name="jenis" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tgl_Penyerahan</label>
                                <input type="date" name="tgl_penyerahan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tgl_selesai</label>
                                <input type="date" name="tgl_selesai" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tgl_Pengambilan</label>
                                <input type="date" name="tgl_pengambilan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Berat</label>
                                <input type="berat" name="berat" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary float-end">submit</button>
                        </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
