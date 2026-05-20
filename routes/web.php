<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\TestHomeController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\ApplypitchController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\MarketlocationController;
use App\Http\Controllers\MarketcharacterController;

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/apply-pitch', [ApplypitchController::class,'index'])->name('apply-pitch');
Route::get('/market-location', [MarketlocationController::class,'index'])->name('market-location');
Route::get('/market-character', [MarketcharacterController::class,'index'])->name('market-character');
// Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm']);
Route::get('/subscribe', [SubscriberController::class, 'store']);
Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
// Route::get('/apply-pitch', [ApplypitchController::class,'index'])->name('apply-pitch');
// Route::post('/apply-pitch', [ApplypitchController::class, 'processForm']);
// Route::post('/save-user-details', [UserController::class, 'saveUserDetails']);
// Route::post('/verify-email', [UserController::class, 'verifyEmail']);
Route::get('/net-zero-markets', [HomeController::class, 'showNetZeroMarkets'])->name('NetZeroMarket');
Route::get('/eating-with-theSeason', [HomeController::class, 'showSustainableEating'])->name('EatingWithTheSeason');

// Route::post('/save-additional-data', [UserController::class, 'saveAdditionalData']);

// Route::post('/completed-step', [UserController::class, 'saveAdditionalData'])->name('completed-step');
Route::post('/save-user-details', [UserController::class, 'saveUserDetails']);
Route::post('/verify-email', [UserController::class, 'verifyEmail'])->name('verify-email');
Route::post('/completed-step', [UserController::class, 'saveAdditionalData'])->name('completed-step');

Route::get('/test-home',[HomeController::class,'TestHome']);