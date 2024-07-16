<?php

use App\Http\Controllers\Waitlist\Home;
use Illuminate\Support\Facades\Route;

Route::get('/',[Home::class,'landingPage'])->name('wait-list.home');
