<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('causes', [CausesController::class, 'index'])->name('causes');

Route::get('donation', [DonateController::class, 'index'])->name('donate');
Route::post('donation/store', [DonateController::class, 'store'])->name('donate.store');
Route::get('/success', [DonateController::class, 'success'])->name('success');


Route::get('team', [OurTeamController::class, 'index'])->name('team');
Route::get('contact', [ContacController::class, 'index'])->name('contact');
Route::get('service', [ServiceController::class, 'index'])->name('service');

