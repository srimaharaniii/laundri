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
                            <label for="exampleInputPassword1" class="form-label">nama pelanggan</label>
                            <select name="rumpun" id="" class="form-control">
                                <option value="">-Pilih nama pelanggan-</option>
                                @foreach ($penyerahan as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">jenis</label>
                                <input type="text" name="jenis" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">tgl_penyerahan</label>
                                <input type="date" name="tgl_penyerahan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">tgl_selesai</label>
                                <input type="date"name="tgl_selesai" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">tgl_pengambilan</label>
                                <input type="date" name="tgl_pengambilan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">berat</label>
                                <input type="text" name="berat" class="form-control" id="exampleInputPassword1">
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
