<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['namespace'=>'Main','prefix' => ''], function(){
    Route::get('/', [App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');
    Route::get('/category/{category}', [App\Http\Controllers\Main\CategoryController::class, 'category'])->name('main.category');
    Route::get('/post/{post}', [App\Http\Controllers\Main\ShowController::class, 'show'])->name('main.show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin','prefix' => 'admin_panel'], function(){
    Route::group(['namespace'=>'Main'], function(){
        Route::get('/', [App\Http\Controllers\Admin\Main\IndexController::class, 'index'])->name('admin.main.index');
    });

    Route::group(['namespace'=>'Post','prefix' => 'posts'], function(){
        Route::get('/', [App\Http\Controllers\Admin\Post\IndexController::class, 'index'])->name('admin.post.index');
        Route::get('/create', [App\Http\Controllers\Admin\Post\CreateController::class, 'create'])->name('admin.post.create');
        Route::post('/', [App\Http\Controllers\Admin\Post\StoreController::class, 'store'])->name('admin.post.store');
        Route::get('/{post}/edit', [App\Http\Controllers\Admin\Post\EditController::class, 'edit'])->name('admin.post.edit');
        Route::patch('/{post}', [App\Http\Controllers\Admin\Post\UpdateController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}', [App\Http\Controllers\Admin\Post\DeleteController::class, 'delete'])->name('admin.post.delete');
    });

    Route::group(['namespace'=>'Category','prefix' => 'categories'], function(){
        Route::get('/', [App\Http\Controllers\Admin\Category\IndexController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [App\Http\Controllers\Admin\Category\CreateController::class, 'create'])->name('admin.category.create');
        Route::post('/', [App\Http\Controllers\Admin\Category\StoreController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}/edit', [App\Http\Controllers\Admin\Category\EditController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [App\Http\Controllers\Admin\Category\UpdateController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [App\Http\Controllers\Admin\Category\DeleteController::class, 'delete'])->name('admin.category.delete');
    });

    Route::group(['namespace'=>'Tag','prefix' => 'tags'], function(){
        Route::get('/', [App\Http\Controllers\Admin\Tag\IndexController::class, 'index'])->name('admin.tag.index');
        Route::get('/create', [App\Http\Controllers\Admin\Tag\CreateController::class, 'create'])->name('admin.tag.create');
        Route::post('/', [App\Http\Controllers\Admin\Tag\StoreController::class, 'store'])->name('admin.tag.store');
        Route::get('/{tag}/edit', [App\Http\Controllers\Admin\Tag\EditController::class, 'edit'])->name('admin.tag.edit');
        Route::patch('/{tag}', [App\Http\Controllers\Admin\Tag\UpdateController::class, 'update'])->name('admin.tag.update');
        Route::delete('/{tag}', [App\Http\Controllers\Admin\Tag\DeleteController::class, 'delete'])->name('admin.tag.delete');
    });

});


