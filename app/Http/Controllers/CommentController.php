<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Gallery;

class CommentController extends Controller
{
    public function store(Request $request, $gallery_id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'isi' => 'required',
        ]);

        Comment::create([
            'gallery_id' => $gallery_id,
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        return redirect()->route('frontend.single', $gallery_id)->with('success', 'Komentar berhasil dikirim!');
    }

    public function form($gallery_id)
    {
        $gallery = Gallery::findOrFail($gallery_id);
        return view('frontend.comment_form', compact('gallery'));
    }

    public function destroy($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $galleryId = $comment->gallery_id;
        $comment->delete();
        return redirect()->route('frontend.single', $galleryId)->with('success', 'Komentar berhasil dihapus!');
    }
}
