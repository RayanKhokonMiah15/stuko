<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Gallery;
use App\Models\Genre;

class FrontendController extends Controller
{
    // Halaman utama (index) - tampilkan gallery dan genre
    public function index(): View
    {
        $galleries = Gallery::all();
        $genres = Genre::all();

        return view('frontend.index', compact('galleries', 'genres'));
    }

    // Halaman about
    public function about(): View
    {
        return view('frontend.about');
    }

    //Halaman testmoni
    public function testimoni(): View
    {
        return view('frontend.testimoni');
    }

    // Halaman contact
    public function contact(): View
    {
        return view('frontend.contact');
    }

    // Halaman work
    public function work(): View
    {
        $galleries = Gallery::all();
        return view('frontend.work', compact('galleries'));
    }

    // Halaman single dengan parameter ID
    public function single($id): View
    {
        $gallery = Gallery::findOrFail($id);
        return view('frontend.single', compact('gallery'));
    }
}