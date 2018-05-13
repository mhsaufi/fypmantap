<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class MailingController extends Controller
{
    public function mailPassword(Request $request)
    {
    	$email = $request->email;
    	$length = 8;
    	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    	$new_password = substr(str_shuffle($chars),0,$length);

    	$subject = "Password Reset";
    	$content = "Your new password is ".$new_password;
    	$content .= "<br>";
    	$content .= "use this new password to login and change your password";

        Mail::send('mail.mail_muger',['mail'=>$content], function ($message) use ($email) {
            $message->from('info@muger.com', 'MUGER');
            $message->to($email);
        });

        $sql = "UPDATE users SET password = '".Hash::make($new_password)."' WHERE email = '".$email."'";

        Db::update($sql);
    }
}
