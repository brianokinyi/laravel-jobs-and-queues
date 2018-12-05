<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Mail;

class EmailController extends Controller
{
    /**
     * Display the page to input your email.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test-email');
    }

    public function send()
    {
        Log::info("Request cycle without Queues started");
        Mail::send('emails.welcome', ['data'=>'data'], function ($message) {

            $message->from('brianokinyi.bo@gmail.com', 'Brian Okinyi');

            $message->to('brianokinyi.bo@gmail.com');

        });
        Log::info("Request cycle without Queues finished");
    }
}
