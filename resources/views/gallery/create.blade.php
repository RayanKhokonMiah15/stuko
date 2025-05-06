@extends('layouts.app')
@section('content')
<form action ="{{route('gallery.store')}}" method="post">
    @csrf
    <div class="col-12">
        <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h6>Lu mau tambah data? Di sini Isinya</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Foto</label>
                    <input type="text" class="form-control" name="nama_foto">
                </div>
            </div>
            <div class="form-group">
                <label>Genre</label>
                <select name="genre_id" class="form-control" required>
                    @foreach($genre as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                    @endforeach
                </select>                
            <div class="card-body">
                <div class="form-group">
                    <label>Tempat</label>
                    <input type="text" class="form-control" name="tempat">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Caption</label>
                    <input type="text" class="form-control" name="caption">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>





@endsection