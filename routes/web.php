<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CacaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('contact', [CacaController::class, 'index'])->name('contact.index');