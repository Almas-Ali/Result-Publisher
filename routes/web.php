<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resultController;

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

Route::get('/', [resultController::class, 'index'])->name('index');
Route::post('result', [resultController::class, 'result'])->name('result');
Route::get('all-results', [resultController::class, 'all_results'])->name('all_results');
Route::get('about', [resultController::class, 'about'])->name('about');