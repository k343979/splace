<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentsController;



// use App\Http\Controllers\Controller;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'search']);


Route::get('/add', [AddController::class, 'index']);
Route::post('/add', [AddController::class, 'store']);

Route::get('/{id}', [ClientController::class, 'profile'])->name('detail');

Route::get('/comment/{id}', [CommentsController::class, 'index']);
Route::post('/comment/{id}', [CommentsController::class, 'store']);