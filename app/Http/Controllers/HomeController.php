<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
