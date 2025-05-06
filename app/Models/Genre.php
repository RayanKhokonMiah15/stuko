<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table ='genre';
    protected $primarykey = 'id';
    protected $fillable = ['genre', 'deskripsi_genre'];

    public function Gallery() {
        return $this->hasMany('App\Models\Gallery');
    }
}
