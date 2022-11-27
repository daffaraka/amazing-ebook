<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
use App\Models\BookCategory;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/contact-page', [HomeController::class,'contactPage'])->name('contactPage');

// Category
Route::get('category',[CategoryController::class,'index'])->name('category.index');
Route::get('category/filter/{id}',[CategoryController::class,'filter'])->name('category.filter');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/show/{id}',[CategoryController::class,'show'])->name('category.show');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

// Book
Route::get('book',[BookController::class,'index'])->name('book.index');
Route::get('book/create',[BookController::class,'create'])->name('book.create');
Route::post('book/store',[BookController::class,'store'])->name('book.store');
Route::get('book/show/{id}',[BookController::class,'show'])->name('book.show');
Route::get('book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::get('book/delete/{id}',[BookController::class,'destroy'])->name('book.delete');


// Publisher
Route::get('publisher',[PublisherController::class,'index'])->name('publisher.index');
Route::get('publisher/create',[PublisherController::class,'create'])->name('publisher.create');
Route::post('publisher/store',[PublisherController::class,'store'])->name('publisher.store');
Route::get('publisher/show/{id}',[PublisherController::class,'show'])->name('publisher.show');
Route::get('publisher/edit/{id}',[PublisherController::class,'edit'])->name('publisher.edit');
Route::post('publisher/update/{id}',[PublisherController::class,'update'])->name('publisher.update');
Route::get('publisher/list-book/{id}',[PublisherController::class,'list_book'])->name('publisher.list_book');
Route::get('publisher/delete/{id}',[PublisherController::class,'destroy'])->name('publisher.delete');


// Book Category
Route::get('book-category',[BookCategoryController::class,'index'])->name('bc.index');



