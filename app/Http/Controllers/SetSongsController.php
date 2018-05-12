<?php

namespace App\Http\Controllers;

use App\Setlist;
use App\SetSong;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SetSongsController extends Controller
{
	public function show(Request $request)

	{
		$setlists = $request->input('id');

		$setsongs = DB::table('songs')
					->join('setsongs','songs.id','=','setsongs.song_id')
					->select('songs.song_title')
					->where('setsongs.setlist_id', $setlists)->get();

		$set_name = DB::table('setlists')
					->select('set_title')
					->where('id', $setlists)
					->get();	

		$data = array($setsongs, $set_name);					

		return $data;
    }
}
