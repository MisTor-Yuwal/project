<?php

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

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [PageController::class,'home']);
Route::get('/character', [PageController::class,'characters']);
// characters
Route::get('/st', [PageController::class,'st']);
Route::get('/spe', [PageController::class,'spe']);
Route::get('/xxefs', [PageController::class,'xxefs']);
Route::get('/sps', [PageController::class,'sps']);
Route::get('/te', [PageController::class, 'te']);
// characters
Route::get('/maps', [PageController::class,'maps']);
Route::get('/weapons', [PageController::class,'weapons']);
Route::get('/login', [PageController::class,'login']);
Route::get('/signup', [PageController::class,'signup']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
