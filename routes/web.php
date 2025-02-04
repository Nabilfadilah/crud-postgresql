<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("posts", [PostController::class, 'index'])->name("post.index");
Route::get("posts/create", [PostController::class, 'create'])->name("post.create");
Route::post("posts/create", [PostController::class, 'store'])->name("post.store");
Route::get("posts/{id}/edit", [PostController::class, 'edit'])->name("post.edit");
Route::put("posts/{id}", [PostController::class, 'update'])->name("post.update");
