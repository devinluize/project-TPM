<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sendMail(){
        Mail::from($request->contact_email)->send(new ContactMail($request->contact_message));

        return "E-mail has been sent.";
    }
}
