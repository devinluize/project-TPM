<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LoginController;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
}
