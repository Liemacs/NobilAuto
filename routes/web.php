<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AutoDetailsController;

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


Route::get('/', [HomeController::class, 'index']);

// Automobile
Route::get('/automobile', [AutoController::class, 'index'])->name('auto');

// Credit
Route::get('/credit', [CreditController::class, 'index'])->name('credit');

// Credit
Route::get('/contacte', [ContactController::class, 'index'])->name('contacts');

Route::get('/automobile/auto-details', [AutoDetailsController::class, 'index'])->name('auto-details');