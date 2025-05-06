<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table ='gallery';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_foto','genre_id','tempat', 'caption'];

    public function Genre() {
        return $this->belongsTo('App\Models\Genre');
    }
}
