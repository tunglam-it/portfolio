<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/',function (){
    return view('partialsFE.index');
});
Route::get('/admin',[Controllers\MainController::class,'showDashboard'])->name('admin.showDashboard');

//Main
Route::prefix('main')->name('main.')->group(function () {
  Route::get('/', [Controllers\MainController::class,'index'])->name('index');
  Route::post('/update', [Controllers\MainController::class,'update'])->name('update');
});

//Portfolio
Route::prefix('portfolio')->name('portfolio.')->group(function () {
  Route::get('/', [Controllers\PortfolioController::class,'index'])->name('index');
  Route::get('/create', [Controllers\PortfolioController::class,'create'])->name('create');
  Route::post('/store', [Controllers\PortfolioController::class,'store'])->name('store');
  Route::get('/edit/{id}', [Controllers\PortfolioController::class,'edit'])->name('edit');
  Route::post('/update/{id}', [Controllers\PortfolioController::class,'update'])->name('update');
  Route::get('/delete/{id}', [Controllers\PortfolioController::class,'delete'])->name('delete');
});
