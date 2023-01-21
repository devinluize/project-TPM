<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RegisterController;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
}
