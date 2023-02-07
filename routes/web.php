<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TaskController;
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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/',[FrontendController::class,'index'])->name('front.home');
Route::get('/contact',[FrontendController::class,'contact'])->name('front.contact');
Route::get('/about',[FrontendController::class,'about'])->name('front.about');


Route::get('/task/create',[TaskController::class,'create'])->name('task.create');
Route::post('/task',[TaskController::class,'store'])->name('task.store');
Route::get('/task',[TaskController::class,'index'])->name('task.index');

