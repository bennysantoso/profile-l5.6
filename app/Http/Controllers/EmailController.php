<?php

namespace App\Http\Controllers;

use Mail;
use Response;

class EmailController extends Controller
{
    public function sendEmailReminder()
    {
        $data['title'] = "This is Test Mail for Laravel ";

        Mail::send('emailtemplate', $data, function($message) {
            $message->to('benny@rectmedia.com', 'Benny RECTmedia')
                ->subject('Laravel Make Mail')
                ->from('purba@rectmedia.com', 'Purba Hapsara');
        });

        if (Mail::failures()) {
            return response()->make('Sorry! Please try again latter');
        }else{
            return response()->make('Great! Successfully send in your mail');
        }
    }
}
