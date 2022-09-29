<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ApiController;
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
    return view('home');
});
Route::get('/list',[ApiController::class,'show'])->name('list.show');
Route::get('/add', function (){
    return view('add');
})->name('add.create');
Route::get('/search',[ApiController::class,'search'])->name('search.search');
Route::post('/save',[ApiController::class,'save'])->name('save.save');
Route::get('/edit/{id}',[ApiController::class,'edit']);
Route::post('/update',[ApiController::class,'updated']);
Route::get('/registration',[ApiController::class, 'registration'])->name('registration.submit');
Route::post('/registration',[ApiController::class, 'Sutmitdata']);
Route::get('login',[ApiController::class, 'login'])->name('login.index');
