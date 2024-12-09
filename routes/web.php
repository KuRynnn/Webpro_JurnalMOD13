<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
//Bikin routes untuk ke halaman edit. URL dapat berupa "/books/{book}/edit"

//Bikin routes untuk melakukan update. URL dapat berupa "/books/{book}"

//Bikin routes untuk hapus. URL dapat berupa "/books/{book}"
