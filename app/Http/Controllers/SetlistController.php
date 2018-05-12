<?php

namespace App\Http\Controllers;

use App\Song;
use App\Setlist;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class SetlistController extends Controller
{
    public function show() 
    {

		$songs = DB::table('songs')->where('users_id',Auth::id())->get();

    	$setlists = DB::table('setlists')->where('users_id', Auth::id())->get();


    	return view('setlist', compact('songs'), compact('setlists'));
    
    	}

    public function addSong(Request $request)
    {
    	$song = new Song;

    	$song->song_title = $request->song_title;
    	$song->duration = $request->duration;
    	$song->users_id = Auth::id();

    	$song->save();
        
    	return back();
    }

    public function addSetlist(Request $request)
    {
    	$setlist = new Setlist;

    	$setlist->set_title = $request->set_title;
    	$setlist->price = $request->price;
    	$setlist->users_id = Auth::id();

    	$setlist->save();
    	
    	return back();
    }

}
