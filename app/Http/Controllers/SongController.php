<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createSong(SongRequest $request){
         // $request->validate([
        //     'title' => 'required',
        //     'price' => 'required|numeric',
        // ]); //kurang baik sebenernya, harus copy lagi ke function lagi misalnya di update

        Song::create([
            'title' => $request->title, //ini dia ambil $request->sesuai name di input html VIEW, 'title' brt dia bakal masukin ke atribut title sesuai di model
            'singer' => $request->singer,
            'album' => $request->album,
            'country' => $request->country,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getSongs'));
    }

    public function getSongs(){
        $songs = Song::all();
        //$book = DB::table('books')->get(); //yg 'books' itu nama table
        return view('view', ['songs' => $songs]); //yg merah 'songs' itu nama variabel
    }

    public function getSongById($id){
        $song = Song::find($id);
        return view('update', ['song' => $song]);
    }

    public function updateSong(SongRequest $request, $id){
        $song = Song::find($id);

        $song -> update([
            'title' => $request->title,
            'singer' => $request->singer,
            'album' => $request->album,
            'country' => $request->country,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getSongs'));
    }

    public function deleteSong($id){
        Song::destroy($id);
        return redirect(route('getSongs'));
    }
}
