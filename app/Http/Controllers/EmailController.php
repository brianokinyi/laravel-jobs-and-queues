<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
