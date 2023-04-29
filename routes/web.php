<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\TrixController;
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


Route::get('/', [CommentController::class, 'index'])->name('comments');
Route::get('/answer', [CommentController::class, 'answer'])->name('answer')->middleware('auth');
Route::post('/answer', [CommentController::class, 'answerStore'])->name('answer.store')->middleware('auth');
Route::get('/comments/{id}', [CommentController::class, 'comments'])->name('comments.list');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');


Route::get('/trix', [TrixController::class, 'index'])->name('trix');
Route::post('/upload', [TrixController::class, 'upload']);
Route::post('/store', [TrixController::class, 'store'])->name('store');
