<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/details', [HomeController::class, 'details'])->name('details');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
