<?php

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
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/category', [App\Http\Controllers\HomeController::class, 'category']);
Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail']);
Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category_show']);
Route::get('/next/', [App\Http\Controllers\HomeController::class, 'paginate_next']);
