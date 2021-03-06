<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenditureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');});

Route::get('/dashboard', [ExpenditureController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/graphic', [ExpenditureController::class, 'graphic'])->middleware(['auth'])->name('graphic');

require __DIR__.'/auth.php';
