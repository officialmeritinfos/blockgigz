<?php

use App\Http\Controllers\Admin\Auth\Login;
use App\Http\Controllers\Waitlist\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',[Home::class,'landingPage'])->name('wait-list.home');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    event(new \Illuminate\Auth\Events\Verified(\Illuminate\Support\Facades\Auth::user()));

    return to_route('wait-list.home')->with('success','Email successfully verified and position retained.');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('sysadmin',[Login::class,'landingPage'])->name('sysadmin');
//Admin route
Route::prefix('sysadmin')->group(function (){
    //Login page
    Route::get('login',[Login::class,'landingPage'])->name('login');
    Route::get('login/{email}/authenticate',[Login::class,'authenticateLogin'])->name('login.authenticate');

    Route::middleware(['web','auth'])->group(function (){
        Route::get('dashboard',[\App\Http\Controllers\Admin\Dashboard\Home::class,'landingPage'])->name('dashboard');
        Route::get('users',[\App\Http\Controllers\Admin\Dashboard\Users::class,'landingPage'])->name('users');
    });
});
