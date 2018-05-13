<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailingController extends Controller
{
    public function mailPassword(Request $request)
    {
    	$email = $request->email;

    	$subject = "Password Reset";
    	$content = "Your new password is hahahahha";

        Mail::send('mail.mail_muger',['mail'=>$content], function ($message) use ($email) {
            $message->from('info@muger.com', 'MUGER');
            $message->to($email);
        });
    }
}
