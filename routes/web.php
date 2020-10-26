<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPageLoader;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\AdminPageLoader;
use App\Http\Controllers\Articles;

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

Route::get('/', [PublicPageLoader::class,'home']);
Route::get('admin-login', [PublicPageLoader::class,'admin_login']);

// Dashboard Routes
Route::get('admin-dashboard', [AdminPageLoader::class,'dashboard']);
Route::get('write-new-blog', [AdminPageLoader::class,'write_new']);

// authentication endpoints
Route::post('admin-login-exe', [Authentication::class,'admin_login']);

// articles route
Route::post('add-new-blog-exe', [Articles::class,'add_new']);