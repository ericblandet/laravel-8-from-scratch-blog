<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


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


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::post('posts/{post:slug}/comments', [CommentController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

//-------------------------
//* Register, login, logout
//-------------------------

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


//-------------------------
//* Admin
//-------------------------

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});

// Route::middleware('can:admin')->group(function () {
//     Route::post('admin/posts', [AdminPostController::class, 'store']);
//     Route::get('admin/posts/create', [AdminPostController::class, 'create'])->name('createPost');
//     Route::get('admin/posts/', [AdminPostController::class, 'index']);
//     Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('editPost');
//     Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->name('updatePost');
//     Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->name('destroyPost');
// });
