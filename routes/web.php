<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/', [OurstoryController::class, 'index'])->name('ourstory');
Route::get('/membership', [MembershipController::class, 'index'])->name('membership');
Route::get('/write', [WriteController::class, 'index'])->name('write');
Route::get('/signin', [SigninController::class, 'index'])->name('signin');
