<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountAccessController;
use Inertia\Inertia;

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

Route::get('/', [AccountAccessController::class, 'login_page']);

Route::post('/login', [AccountAccessController::class, 'login_account'])->name('login');
