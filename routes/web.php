<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
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


Route::get('/',[BooksController::class,'index'])->name('books.index');
Route::get('books/{id}/show',[BooksController::class,'show'])->name('books.show');
Route::get('books/create',[BooksController::class,'create'])->name('books.create');
Route::post('books/store',[BooksController::class,'store'])->name('books.store');