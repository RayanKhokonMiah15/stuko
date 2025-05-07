<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Genre;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        return view('gallery.create', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_foto' => 'required',
            'tempat' => 'required',
            'caption' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif',
            'genre_id' => 'required|exists:genre,id'
        ], [
            'nama_foto.required' => 'Nama Foto wajib diisi.',
            'tempat.required' => 'Tempat wajib diisi.',
            'caption.required' => 'Caption wajib diisi.',
            'foto.required' => 'Foto wajib diisi.',
            'foto.mimes' => 'Foto harus berekstensi jpg, jpeg, png, atau gif.',
            'genre_id.required' => 'Genre wajib dipilih.',
            'genre_id.exists' => 'Genre tidak valid.'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'nama_foto' => $request->input('nama_foto'),
            'tempat' => $request->input('tempat'),
            'caption' => $request->input('caption'),
            'foto' => $foto_nama,
            'genre_id' => $request->input('genre_id')
        ];

        Gallery::create($data);

        return redirect('gallery')->with('sipp', 'Foto berhasil diupload!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('gallery.show', ['gallery' => $gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Gallery::findOrFail($id);
        $genre = Genre::all();
        return view('gallery.edit', compact('data', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     */
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

        // Jika user upload foto baru
        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['foto'] = $foto_nama;
        }

        Gallery::where('id', $id)->update($data);

        return redirect('gallery')->with('sipp', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gallery::where('id', $id)->delete();
        return redirect('gallery')->with('sipp', 'Data berhasil dihapus!');
    }
}
