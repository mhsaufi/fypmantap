<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function checkEmail(Request $request){

        $count = DB::table('users')->where('email',$request->email)->count();

        return $count;
    }
}
