@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Data pembayaran') }}
                </div>

                <div class="card-body">

                    <div class="card-body">
                        <form action="/pembayaran" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">penyerahan</label>
                                <input type="text" name="penyerahan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">jenis</label>
                                <input type="text" name="jenis" class="form-control" id="exampleInputPassword1">
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
