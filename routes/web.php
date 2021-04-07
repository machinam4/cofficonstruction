<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/details/{project}', [HomeController::class, 'details'])->name('details');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Auth::routes();
Route::get('/admin', [ProjectController::class, 'index'])->name('admin');
Route::get('/admin/create', [ProjectController::class, 'create'])->name('admin.projectForm');
Route::post('/admin/edit/{project}', [ProjectController::class, 'edit'])->name('admin.editprojectForm');
Route::post('/admin/store', [ProjectController::class, 'store'])->name('admin.addproject');
Route::patch('/admin/update/{project}', [ProjectController::class, 'update'])->name('admin.editproject');
Route::delete('/admin/destroy/{project}', [ProjectController::class, 'destroy'])->name('admin.deleteproject');
