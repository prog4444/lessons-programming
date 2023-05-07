<?php

use App\Admin\Controllers\PostController;
use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('posts', PostController::class);
    $router->resource('zadachas', ZadachaController::class);
    $router->post('post/store', [PostController::class, 'store'])->name('post.store');

});
 

