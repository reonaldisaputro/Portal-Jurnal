<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PdfAuthorController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{article_news:slug}', [FrontController::class, 'details'])->name('front.details');
Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');
Route::get('/author/{author:slug}', [FrontController::class, 'author'])->name('front.author');
Route::get('/search', [FrontController::class, 'search'])->name('front.search');




// TOLONG 2 ROUTE INI DIBUATKAN MIDDLEWARE KALAU AUTHORS LOGIN
Route::get('/pdf-authors/create', [PdfAuthorController::class, 'create'])->name('pdf_authors.create');
Route::post('/pdf-authors', [PdfAuthorController::class, 'store'])->name('pdf_authors.store');
