<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Genre;

class FrontendController extends Controller
{
    // Halaman utama (index) - tampilkan gallery dan genre
    public function index(Request $request): View
    {
        $genreId = $request->query('genre');
        $query = Gallery::with(['genre', 'comments']);
        if ($genreId) {
            $query->where('genre_id', $genreId);
        }
        $galleries = $query->get();
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
    public function work(Request $request): View
    {
        // Ambil semua data gallery dengan relasi genre
        $galleries = Gallery::with('genre')->get();
        $genres = \App\Models\Genre::all();
        return view('frontend.work', compact('galleries', 'genres'));
    }

    // Halaman single dengan parameter ID
    public function single($id): View
    {
        // Cari galeri berdasarkan ID, termasuk relasi genre dan comments
        $gallery = Gallery::with(['genre', 'comments'])->findOrFail($id);
        return view('frontend.single', compact('gallery'));
    }
}