@extends('layouts.app')
@section('content')


<form action ="{{url('gallery'."/".$data->id)}}" method="post" enctype="multipart/form-data">
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
                    <label>Tempat</label>
                    <input type="text" class="form-control" name="tempat" value="{{$data->tempat}}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Caption</label>
                    <input type="text" class="form-control" name="caption" value="{{$data->caption}}">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Foto Saat Ini</label><br>
                    @if($data->foto)
                        <img src="{{ asset('storage/'.$data->foto) }}" style="max-width:120px;max-height:120px;border-radius:8px;">
                    @else
                        <span class="text-muted">Belum ada foto</span>
                    @endif
                </div>
                <div class="form-group" style="margin-top:10px;">
                    <label>Ganti Foto (opsional)</label>
                    <input type="file" class="form-control-file" name="foto">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Genre</label>
                    <select name="genre_id" class="form-control" required>
                        @foreach($genre as $g)
                            <option value="{{ $g->id }}" {{ $g->id == $data->genre_id ? 'selected' : '' }}>{{ $g->genre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-warning">Simpan</button>
            </div>
        </div>
    </div>





@endsection