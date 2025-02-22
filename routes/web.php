<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorPDFController;
use App\Http\Controllers\PdfAuthorController;
use App\Http\Controllers\AuthorAuthController;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{article_news:slug}', [FrontController::class, 'details'])->name('front.details');
Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');
Route::get('/author/{author:slug}', [FrontController::class, 'author'])->name('front.author');
Route::get('/search', [FrontController::class, 'search'])->name('front.search');

// Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::get('/mahasiswa/register', function () {
    // return redirect('/admin');
    return view('author.create');
});
Route::post('/author/store', [AuthorController::class, 'store'])->name('author.store');








// AUTHOR AUTH
// Route::get('login', [AuthorAuthController::class, 'login_page'])->name('login');
// Route::group(['prefix' => 'author-auth'], function () {
//     Route::get('register', [AuthorAuthController::class, 'register_page'])->name('author.register.page');
//     Route::post('login', [AuthorAuthController::class, 'login_process'])->name('author.login.process');
//     Route::post('register', [AuthorAuthController::class, 'register_process'])->name('author.register.process');
//     Route::get('logout', [AuthorAuthController::class, 'logout'])->name('author.logout.process');
// });


// Route::prefix('author')->middleware(['auth:author'])->group(function () {
//     Route::get('/pdf-authors/create', [AuthorPDFController::class, 'create'])->name('pdf_authors.create');
//     Route::post('/pdf-authors', [AuthorPDFController::class, 'store'])->name('pdf_authors.store');
// });
