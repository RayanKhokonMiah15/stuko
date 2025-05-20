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
        // Ambil semua data gallery dan genre
        $galleries = Gallery::with('genre')->get(); // Gunakan eager loading untuk relasi
        $genres = Genre::all();

        return view('frontend.index', compact('galleries', 'genres'));
    }

    // Halaman about
    public function about(): View
    {
        return view('frontend.about');
    }

    // Halaman testimoni
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
        // Ambil semua data gallery dengan relasi genre
        $galleries = Gallery::with('genre')->get();
        return view('frontend.work', compact('galleries'));
    }

    // Halaman single dengan parameter ID
    public function single($id): View
    {
        // Cari galeri berdasarkan ID, termasuk relasi genre
        $gallery = Gallery::with('genre')->findOrFail($id);
        return view('frontend.single', compact('gallery'));
    }
}