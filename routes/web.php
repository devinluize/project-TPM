<?php

use App\Http\Controllers\GroupCt;
use App\Http\Controllers\LeadCt;
use App\Http\Controllers\MemberCt;
use App\Http\Controllers\PaymentCt;
use Carbon\Traits\Rounding;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\HttpCache\Store;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/store-team',[GroupCt::class,'store'])
// Route::get('/store-lead',[LeadCt::class,'store'])
// Route::get('/store-member',[MemberCt::class,'store'])
// Route::get('/store-payment',[PaymentCt::class,'store'])
