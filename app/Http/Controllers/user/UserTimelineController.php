<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class UserTimelineController extends Controller
{
    public function index()
    {
        return view('user.timeline');
    }
}
