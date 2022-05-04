<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;


    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/login',[AuthController::class,'getlogin'])->name('getlogin');
    Route::post('/login',[AuthController::class,'postlogin'])->name('postlogin');
    Route::get('/register',[AuthController::class,'getregister'])->name('getregister');
    Route::post('/register',[AuthController::class,'postregister'])->name('postregister');

    Route::get('/haayouselected/{selectedid}/{notselectedid}',[HomeController::class,'updatedetails'])->name('updatedetails');

    Route::middleware('checkauth')->group(function(){
        Route::get('/dashboard',[ProfileController::class,'getdashboard'])->name('UserDashboard');
        Route::get('/logout',[ProfileController::class,'logout'])->name('logout');
    });


