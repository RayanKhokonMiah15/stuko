@extends('layouts.app')
@section('content')


<form action ="{{url('gallery'."/".$data->kodefoto)}}" method="post">
    @csrf
    @method('PUT')
    <div class="col-12">
        <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h6>Lu mau edit data? meh sini </h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Foto</label>
                    <input type="text" class="form-control" name="nama_foto" value="{{$data->nama_foto}}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>tempat</label>
                    <input type="text" class="form-control" name="tempat" value="{{$data->tempat}}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>caption</label>
                    <input type="text" class="form-control" name="caption" value="{{$data->caption}}">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>





@endsection