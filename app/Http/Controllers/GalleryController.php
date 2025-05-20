<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index', ['gallery' => $gallery]);
    }

    public function create()
    {
        $genre = Genre::all();
        return view('gallery.create', ['genre' => $genre]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_foto' => 'required',
            'tempat' => 'required',
            'caption' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif',
            'genre_id' => 'required|exists:genre,id'
        ]);

        // Simpan file ke storage/app/public/gallery
        $foto_path = $request->file('foto')->store('gallery', 'public');

        $data = [
            'nama_foto' => $request->input('nama_foto'),
            'tempat' => $request->input('tempat'),
            'caption' => $request->input('caption'),
            'foto' => $foto_path, // contoh: gallery/123456.jpg
            'genre_id' => $request->input('genre_id')
        ];

        Gallery::create($data);

        return redirect('gallery')->with('sipp', 'Foto berhasil diupload!');
    }

    public function show(Gallery $gallery)
    {
        return view('gallery.show', ['gallery' => $gallery]);
    }

    public function edit($id)
    {
        $data = Gallery::findOrFail($id);
        $genre = Genre::all();
        return view('gallery.edit', compact('data', 'genre'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_foto' => 'required',
            'tempat' => 'required',
            'caption' => 'required',
            'genre_id' => 'required|exists:genre,id'
        ]);

        $data = [
            'nama_foto' => $request->input('nama_foto'),
            'tempat' => $request->input('tempat'),
            'caption' => $request->input('caption'),
            'genre_id' => $request->input('genre_id')
        ];

        if ($request->hasFile('foto')) {
            // Simpan file baru
            $foto_path = $request->file('foto')->store('gallery', 'public');
            $data['foto'] = $foto_path;
        }

        Gallery::where('id', $id)->update($data);

        return redirect('gallery')->with('sipp', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        Gallery::where('id', $id)->delete();
        return redirect('gallery')->with('sipp', 'Data berhasil dihapus!');
    }
}