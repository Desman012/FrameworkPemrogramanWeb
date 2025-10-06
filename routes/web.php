<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;
use Illuminate\Support\Facades\Route;
// use App\

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rahasia', function(){
    return 'Ini path rahasia';
})->middleware(['auth','RoleCheck:admin']);

Route::get('/product/{msg}', [ProductController::class,'index'])
->middleware(['auth', 'verified', 'RoleCheck:admin,owner'])
->name('product');

Route::get('/barang/{id}',[ProductController::class,'show']);

Route::get('/produk', [ProductController::class, 'produk']);

Route::get('/uts', [UtsController::class, 'view'])->name('uts');
Route::get('/uts-web', [UtsController::class, 'web'])->name('web');
Route::get('/uts-db', [UtsController::class, 'db'])->name('db');

require __DIR__.'/auth.php';
