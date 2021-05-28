<?php

use Illuminate\Support\Facades\Route;
use App\Models\artist;

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
    $artist = Artist::all();
    return view('welcome',compact('artist'));
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});
Route::get('/admin/artist',[App\Http\Controllers\ArtistController::class,'index'])->name('index');
Route::get('/admin/artist/create',[App\Http\Controllers\ArtistController::class,'create'])->name('create');
Route::post('/admin/artist/create',[App\Http\Controllers\ArtistController::class,'store'])->name('store');
Route::get('/admin/artist/edit/{id}',[App\Http\Controllers\ArtistController::class,'edit'])->name('edit');
Route::put('/admin/artist/update/{artist}',[App\Http\Controllers\ArtistController::class,'update'])->name('update');
Route::get('/admin/artist/delete/{id}',[App\Http\Controllers\ArtistController::class,'destroy'])->name('destroy');