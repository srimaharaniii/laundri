@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data</div>

                <div class="card-body">
                    <form method="POST" action="/pelanggan/{{$pelanggan->id}}" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                            <input type="text" value="{{$pelanggan->nm_pelanggan}}" name="nm_pelanggan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat pelanggan</label>
                            <input type="text" value="{{$pelanggan->almt_pelanggan}}" name="almt_pelanggan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Hp</label>
                            <input type="text" value="{{$pelanggan->no_hp}}" name="no_hp" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
