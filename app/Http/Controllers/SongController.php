<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createSong(Request $request){
        Song::create([
            'title' => $request->title, //ini dia ambil $request->sesuai name di input html VIEW, 'title' brt dia bakal masukin ke atribut title sesuai di model
            'singer' => $request->singer,
            'album' => $request->album,
            'country' => $request->country,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getCreatePage'));
    }

    public function getSongs(){
        $songs = Song::all();
        //$book = DB::table('books')->get(); //yg 'books' itu nama table
        return view('view', ['songs' => $songs]); //yg merah 'songs' itu nama variabel
    }
}
