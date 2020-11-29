<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('home', [HomeController::class, 'showHome']);
Route::get('admin', [HomeController::class, 'showAdmin']);

Route::get('Artikel', [ArtikelController::class, 'index']);
Route::get('Artikel/create', [ArtikelController::class, 'create']);
Route::post('Artikel', [ArtikelController::class, 'store']);
Route::get('Artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('Artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('Artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('Artikel/{artikel}', [ArtikelController::class, 'destroy']);

Route::get('User', [UserController::class, 'index']);
Route::get('User/create', [UserController::class, 'create']);
Route::post('User', [UserController::class, 'store']);
Route::get('User/{user}', [UserController::class, 'show']);
Route::get('User/{user}/edit', [UserController::class, 'edit']);
Route::put('User/{user}', [UserController::class, 'update']);
Route::delete('User/{user}', [UserController::class, 'destroy']);


Route::get('login1',[AuthController:: class,'showLogin']);
Route::post('login1',[AuthController:: class,'loginProcess']);
Route::get('logout',[AuthController:: class,'logout']);
Route::get('register1',[AuthController:: class,'showregister']);
Route::post('register1',[AuthController:: class,'registerProcess']);
