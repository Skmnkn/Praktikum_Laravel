<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/{name?}', function ($name=null) {
//     return "halo ".$name;
// });

// Route::view('/hello', 'hello', ['name' => 'Kimin']);

// Route::redirect('/hello', '/');

// Route::get('/', function () {
//     return view('tryblade.child');
// });

Route::view('/try', 'tryblade.child');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buku', [App\Http\Controllers\HomeController::class, 'buku'])->name('buku');

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
