<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactController;

class ContactController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
