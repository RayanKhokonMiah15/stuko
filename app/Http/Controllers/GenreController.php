<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genre = Genre::all();
        return view('genre.index',['genre'=>$genre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'genre' => 'required',
        ]);
        Genre::create([
            'genre' =>$request->genre,
            'deskripsi_genre' =>$request->deskripsi_genre
        ]);

        return redirect('genre')->with('sipp','udah upload bro');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Genre::where('id',$id)->first();
        return view('genre.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'genre' => 'required',
        ]);
        $data = ([
           'genre' =>$request->genre,
            'deskripsi_genre' =>$request->deskripsi_genre
        ]);

        Genre::where ('id',$id)->update($data);
        return redirect('genre')->with('sipp','udah update bro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
         Genre::where('id',$id)->delete();
        return redirect('genre')->with('sipp','udah di hapus bro');
    }
}
