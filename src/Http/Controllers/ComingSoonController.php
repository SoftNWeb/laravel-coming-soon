<?php

namespace snw\ComingSoon\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use snw\ComingSoon\Models\ComingSoon;
use snw\ComingSoon\Mail\ComingSoonMailable;
use Illuminate\Support\Facades\Mail;

class ComingSoonController extends Controller
{
    public function index()
    {
        return view('comingsoon::comingsoon');
        
    }

    public function send(Request $request)
    {
        Mail::to(config('comingsoon.snw_send_email_to'))->send(new ComingSoonMailable($request->email));
        ComingSoon::create($request->all());
        return redirect('/');
    }
    
}