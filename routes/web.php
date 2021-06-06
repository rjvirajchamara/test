<?php

use App\Http\Controllers\BookshopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ProdecytController;
use App\Http\Controllers\product\product;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\test;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/bus', [BusController::class, 'index']);

Route::post('/miss_delet',[TeacherController::class,'destroy']);

Route::post('/miss', [TeacherController::class,'index']);

Route::get('/miss', [TeacherController::class,'create']);

Route::put('/miss', [TeacherController::class,'edit']);

Route::post('/books', [BookshopController::class,'index']);

Route::get('/joingdate', [TeacherController::class,'joingdate']);



