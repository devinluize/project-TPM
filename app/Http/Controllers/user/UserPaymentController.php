<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class UserPaymentController extends Controller
{
    public function index()
    {
        return view('user.payment');
    }
}
