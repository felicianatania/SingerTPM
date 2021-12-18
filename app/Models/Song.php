<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'singer', 'album', 'country', 'release', 'price',//'genreID',
    ];

    // public function genre(){
    //     return $this -> hasOne(Genre::class);
    // }
}

