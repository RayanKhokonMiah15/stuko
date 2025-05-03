<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gallery = Gallery::all();
        return view('gallery.index',['gallery'=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_foto' => 'required',
        ]);
        Gallery::create([
            'nama_foto' =>  $request->nama_foto,
        ]);

        return redirect('gallery')->with('sipp','udah upload bro');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gallery::where('kodefoto',$id)->delete();
        return redirect('gallery.index')->with('sipp','udah upload bro');
    }
}
