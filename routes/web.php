<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('home' ,function(){
    return view('client.pages.home');
})->name('home');

Route::middleware('auth.admin')->name('admin.')->group(function(){
    Route::get('admin' ,function(){
        return view('admin.pages.dashboard');
    })->name('admin');
    Route::get('admin/user' ,function(){
        return view('admin.pages.user');
    })->name('user');
    Route::get('admin/product' ,function(){
        return view('admin.product.product');
    })->name('product');
    Route::get('admin/product_category' ,function(){
        return view('admin.product_category.category');
    })->name('product_category');
    Route::get('admin/blog' ,function(){
        return view('admin.pages.blog');
    })->name('blog');
    Route::get('admin/product/create' ,function(){
        return view('admin.product.create_product');
    })->name('product.create_product');
    Route::get('admin/product_category/create' ,function(){
        return view('admin.product_category.create');
    })->name('product_category.create');
});



Route::get('Cocacola' ,function(){
    return '<h1>CocaCola</h1>';
})->name('Cocacola');
Route::get('Chivas' ,function(){
    return '<h1>Chivas</h1>';
})->name('Chivas')->middleware('age.18');


require __DIR__.'/auth.php';
