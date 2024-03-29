<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;


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


Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);
Route::resource('users', UserController::class);
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.index');

Route::get('/', function () {
    return view('welcome');
});



// Route::get("admin/categories/create",[CategoryController::class,'create']);
// Route::post("admin/categories/create",[CategoryController::class,'store']);
// Route::get("admin/categories/",[CategoryController::class,'index']);
// Route::get("admin/categories/",[CategoryController::class,'edit']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
