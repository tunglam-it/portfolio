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

Route::get('/',[Controllers\Back\HomeController::class,'show'])->name('home');
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

//Contact
Route::post('/contact', [Controllers\ContactController::class,'store'])->name('contact.store');

//About
Route::prefix('about')->name('about.')->group(function () {
  Route::get('/', [Controllers\AboutController::class,'index'])->name('index');
  Route::get('/create', [Controllers\AboutController::class,'create'])->name('create');
  Route::post('/store', [Controllers\AboutController::class,'store'])->name('store');
  Route::get('/edit/{id}', [Controllers\AboutController::class,'edit'])->name('edit');
  Route::post('/update/{id}', [Controllers\AboutController::class,'update'])->name('update');
  Route::get('/delete/{id}', [Controllers\AboutController::class,'delete'])->name('delete');
});

//Service
Route::prefix('service')->name('service.')->group(function () {
  Route::get('/', [Controllers\ServiceController::class,'index'])->name('index');
  Route::get('/create', [Controllers\ServiceController::class,'create'])->name('create');
  Route::post('/store', [Controllers\ServiceController::class,'store'])->name('store');
  Route::get('/edit/{id}', [Controllers\ServiceController::class,'edit'])->name('edit');
  Route::post('/update/{id}', [Controllers\ServiceController::class,'update'])->name('update');
  Route::get('/delete/{id}', [Controllers\ServiceController::class,'delete'])->name('delete');
});
