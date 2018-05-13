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
                  ->where('users_id', Auth::id())
                  ->where('event_type', "Performance")
                  ->get();//where date kena ada

        $update = DB::table('events')
                  ->where('users_id', Auth::id())
                  ->get();// where date kena ada

        return view('home', compact('events', 'update'));
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
