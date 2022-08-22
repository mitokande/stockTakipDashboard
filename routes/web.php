<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Stock\StockController;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\ApplicationController;
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

Route::get('/', [ApplicationController::class,"home"])->name("home");
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'postLogin'])->name('postLogin');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'postRegister'])->name('postRegister');

Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/addstock',[DashboardController::class,'createStock']);
Route::post('/addstock',[DashboardController::class,'addStock']);

Route::get('/checkbarcode',[DashboardController::class,'checkBarcode']);
Route::get('/liststocks',[DashboardController::class,'listStocks']);


Route::get('/deneme',function(){
    return 'token is '.session('token');
});