<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurstoryController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\WriteController;
use App\Http\Controllers\SigninController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('/ourstory', [OurstoryController::class, 'index'])->name('ourstory');

Route::get('/membership', [MembershipController::class, 'index'])->name('membership');

Route::controller(WriteController::class)->group(function(){
    Route::get('/write', 'index')->name('write');
    Route::post('/write', 'store')->name('write.store');
});

Route::get('/signin', [SigninController::class, 'index'])->name('signin');
