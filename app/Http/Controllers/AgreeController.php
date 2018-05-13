<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AgreeController extends Controller
{
	public function show(){
    $agreements = DB::table('agreements')->where('users_id',Auth::id())->get();

    	return view('agreement', compact('agreements'));
    }

    public function update(Request $Request, Event $id){

    	return $id;

    }
}
