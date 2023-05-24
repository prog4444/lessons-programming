<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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
//     return view('admin.index');
// });

Auth::routes();
// admin new 
Route::get('/admin', function () {
    return redirect()->action([HomeController::class, 'index']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::resource('users', UserController::class);


# create post 
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/show', [PostController::class, 'index'])->name('show.index');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');
Route::post('/store/edit', [PostController::class, 'store_edit'])->name('store.edit');

# create masala

Route::get('masala/show', [ZadachaController::class, 'index'])->name('masala.index');
Route::post('masala/store', [ZadachaController::class, 'store'])->name('masala.store');
Route::get('masala/create', [ZadachaController::class, 'masala'])->name('masala.create');
Route::get('/masala/{post}', [ZadachaController::class, 'show'])->name('masala.show');
Route::get('/masala/{post}/edit', [ZadachaController::class, 'edit'])->name('masala.edit');
Route::patch('/masala/{post}', [ZadachaController::class, 'update'])->name('masala.update');
Route::delete('/masala/{post}', [ZadachaController::class, 'delete'])->name('masala.delete');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# create comment
Route::get('/', [CommentController::class, 'index'])->name('comments');
Route::get('/answer', [CommentController::class, 'answer'])->name('answer')->middleware('auth');
Route::post('/answer', [CommentController::class, 'answerStore'])->name('answer.store')->middleware('auth');
Route::get('/comments/{id}', [CommentController::class, 'comments'])->name('comments.list');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');

# show / zadacha / books / view
Route::get('/showzadacha', [ZadachaController::class, 'showZadacha'])->name('showzadacha');
Route::get('/showzadacha/one', [ZadachaController::class, 'showZadachaOne'])->name('showzadachaOne');
Route::get('/showzadacha/tho', [ZadachaController::class, 'showzadachaTho'])->name('showzadachaTho');

Route::get('/books', [BookController::class, 'books'])->name('books');



