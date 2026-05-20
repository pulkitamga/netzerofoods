<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplypitchController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\MarketlocationController;
use App\Http\Controllers\MarketcharacterController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/apply-pitch', [ApplypitchController::class,'index'])->name('apply-pitch');
Route::get('/market-locations', [MarketlocationController::class,'index'])->name('market-locations');
Route::get('/market-character', [MarketcharacterController::class,'index'])->name('market-character');
Route::get('/subscribe', [SubscriberController::class, 'store']);
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm']);

//Route::get('/', function () {
    //return view('welcome');
//});