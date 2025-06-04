<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class,'index'])->name('admin.index');

Route::get('/pasien', [PasienController::class,'index'])->name('pasien.index');

Route::get('/kelurahan', [KelurahanController::class,'index']);

Route::get('/books', [BookController::class,'index']);
Route::get('/books/create', [BookController::class,'create']);
Route::post('/books/store', [BookController::class,'store']);
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/update/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);


Route::get('/prodi', [ProdiController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});

Route::get('salam/{name}', function($name){
    return "Assalamualaikum Warahmatullahi Wabaraktuh $name";
});

Route::get('produk/{id}', function($id){
    return view('produk/index',['idproduk'=>$id]);
});

Route::get('profil', function(){
    return view('profil',['prodi'=>'Teknik Informatika']);
});


