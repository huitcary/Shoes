<?php

use App\Http\Controllers\ShoeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [PageController::class, 'Home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/shoe', [PageController::class, 'shoe']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/shoe', [ShoeController::class, 'index']);
