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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
})->name('about.page');

Route::get('/contact', function(){
    return view('contact');
})->name('contact.page');

Route::get('/pengguna/{id}', function ($id) {
    return "Halaman Pengguna dengan ID: " . $id;
})->name('pengguna.page');

Route::prefix('manage')->group(function () {
    Route::get('/edit-profile', function() {
        return view('manage.edit');
    })->name('edit.page');
});
