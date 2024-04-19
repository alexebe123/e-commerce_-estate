<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstatesController;

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

Route::get('/',[EstatesController::class,'index'])->name("index");
Route::get('/create_estate',[EstatesController::class,'create'])->name('create_estate');
Route::POST('/create_estate',[EstatesController::class,"store"])->name('store');


Auth::routes();

Route::get('/index', [App\Http\Controllers\EstatesController::class, 'index'])->name('home');
Route::get('/controllpanel',[EstatesController::class,'controllpanel'])
->name('controllpanel')
->middleware(['auth', 'password.confirm']);