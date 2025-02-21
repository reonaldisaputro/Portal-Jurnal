<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorPDFController;
use App\Http\Controllers\PdfAuthorController;
use App\Http\Controllers\AuthorAuthController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{article_news:slug}', [FrontController::class, 'details'])->name('front.details');
Route::get('/search', [FrontController::class, 'search'])->name('front.search');
Route::get('/news', [FrontController::class, 'news'])->name('front.news');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
