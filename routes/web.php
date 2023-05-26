<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\CatagoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs', function () {
    return view('swagger.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///Route::resource('caragory', 'CatagoryController');
Route::resource('caragory', CatagoryController::class);
Route::get('/catagory.create', [App\Http\Controllers\CatagoryController::class, 'create'])->name('catagory.create');
Route::get('/catagory.show', [App\Http\Controllers\CatagoryController::class, 'show'])->name('catagory.show');

Route::get('/catagory.edit', [App\Http\Controllers\CatagoryController::class, 'edit'])->name('catagory.edit');


Route::get('/catagory.index', [App\Http\Controllers\CatagoryController::class, 'index'])->name('catagory.index');


Route::post('/catagory.store', [App\Http\Controllers\CatagoryController::class, 'store'])->name('catagory.store');
Route::PUT('/catagory.update', [App\Http\Controllers\CatagoryController::class, 'update'])->name('catagory.update');


Route::DELETE('/catagory.destroy', [App\Http\Controllers\CatagoryController::class, 'destroy'])->name('catagory.destroy');
