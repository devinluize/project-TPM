<?php

use App\Http\Controllers\GroupCt;
use App\Http\Controllers\LeadCt;
use App\Http\Controllers\MemberCt;
use App\Http\Controllers\PaymentCt;
use Carbon\Traits\Rounding;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\HttpCache\Store;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserPaymentController;
use App\Http\Controllers\user\UserTimelineController;

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

Route::post('/store-team',[GroupCt::class,'store']);
Route::post('/store-leader',[LeadCt::class,'store']);
Route::post('/store-member/{id_Tim}',[MemberCt::class,'store']);
Route::post('/store-payment',[PaymentCt::class,'store']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::prefix('user')->group(function () {
    Route::get('/dashboard/', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/payment', [UserPaymentController::class, 'index'])->name('user.payment');
    Route::get('/timeline', [UserTimelineController::class, 'index'])->name('user.timeline');
    Route::get('/register-member/{id}', [MemberCt::class, 'create'])->name('user.register');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/edit-grup/{id}', [GroupCt::class, 'edit'])->name('admin.editGrup');
    Route::get('/update-grup/{id}', [GroupCt::class, 'update']);
    Route::get('/edit-leader/{id}', [LeadCt::class, 'edit'])->name('admin.editLead');
    Route::get('/update-leader/{id}', [LeadCt::class, 'update']);
    Route::get('/edit-member/{id}', [MemberCt::class, 'edit'])->name('admin.editMember');
    Route::get('/update-member/{id}', [MemberCt::class, 'update']);
});

Route::post('/send-mail', [ContactController::class,'sendMail']);
