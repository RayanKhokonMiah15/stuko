@extends('layouts.app')
@section('content')


<form action ="{{url('genre'."/".$data->kodegenre)}}" method="post">
    @csrf
    @method('PUT')
    <div class="col-12">
        <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h6>Lu mau edit data? meh sini </h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Genre </label>
                    <input type="text" class="form-control" name="genre" value="{{$data->genre}}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Deskripsi Genre</label>
                    <input type="text" class="form-control" name="deskripsi_genre" value="{{$data->deskripsi_genre}}">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-warning">Simpan</button>
            </div>
        </div>
    </div>





@endsection