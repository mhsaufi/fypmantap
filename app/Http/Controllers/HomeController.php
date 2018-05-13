<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = DB::table('events')
                    ->join('agreements','events.id','=','agreements.event_id')
                    ->where('user_id', Auth::id())
                    ->where('event_type', "Performance")
                    ->get();// where date kena ada

        return view('home', compact('events'));

    }

    public function test(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table('users')->insert([
            ['name' => $name, 'email' => $email, 'password' => $password]
        ]);

        return $name;

    }


}
