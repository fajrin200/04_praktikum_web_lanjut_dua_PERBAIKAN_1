<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route 
Route::get('/',[HomeController::class,'index']);

// Route Prefix
Route::prefix('/program')->group(function () {
    Route::get('/',[ProgramController::class,'program']);
});

// Route 
Route::get('/about',[AboutController::class,'about']);

// Route Resource
Route::get('/contact',[ContactController::class,'index']);
Route::post('/upload',[ContactController::class,'store']);