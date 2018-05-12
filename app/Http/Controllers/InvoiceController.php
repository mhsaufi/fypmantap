<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show() {

    	$invoice = DB::table('invoices')->where('users_id',Auth::id())->get();

    	return view('invoices', compact('invoice'));

    }
}
