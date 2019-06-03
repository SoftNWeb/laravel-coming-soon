<?php

namespace Softnweb\ComingSoon\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Softnweb\ComingSoon\Models\ComingSoon;
use Softnweb\ComingSoon\Mail\ComingSoonMailable;
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