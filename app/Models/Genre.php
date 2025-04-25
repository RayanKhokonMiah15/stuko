<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    use HasFactory;
    protected $table ='genre';
    protected $primarykey = 'kodegenre';
    protected $fillable = ['genre', 'deskripsi_genre'];
}
