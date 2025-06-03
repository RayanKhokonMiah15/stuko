<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'gallery_id', 'nama', 'isi',
    ];

    // Tambahkan accessor untuk tanggal
    public function getTanggalKomentarAttribute()
    {
        return $this->created_at ? $this->created_at->translatedFormat('d F Y') : null;
    }

    public function getIsEditedAttribute()
    {
        return $this->updated_at && $this->updated_at->ne($this->created_at);
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }
}
