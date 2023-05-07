<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrixController;
use App\Http\Controllers\ZadachaController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('der');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# create comment
Route::get('/', [CommentController::class, 'index'])->name('comments');
Route::get('/answer', [CommentController::class, 'answer'])->name('answer')->middleware('auth');
Route::post('/answer', [CommentController::class, 'answerStore'])->name('answer.store')->middleware('auth');
Route::get('/comments/{id}', [CommentController::class, 'comments'])->name('comments.list');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');

# create post 
Route::get('post/store', [PostController::class, 'index'])->name('post.index');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');
# create masala
Route::get('masala/store', [ZadachaController::class, 'index'])->name('masala.index');
Route::post('masala/store', [ZadachaController::class, 'store'])->name('masala.store');

# show / zadacha / books / view
Route::get('/showzadacha', [ZadachaController::class, 'showZadaacha'])->name('showzadacha');
Route::get('/books', [BookController::class, 'books'])->name('books');



