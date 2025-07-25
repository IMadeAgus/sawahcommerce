<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/product/{id}', [UserProductController::class, 'show'])->name('userproduct.show');
});

Route::middleware(['auth'])->get('/dashboard', function () {
    if (auth()->guard('web')->user()->role === 'admin') {
        return app(AdminController::class)->index();
    }
    return app(UserController::class)->index();
})->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::resource('products', ProductController::class)->names([
        'index' => 'admin.products.index',
        'show' => 'admin.products.show',
        'create' => 'admin.products.create',
        'store' => 'admin.products.store',
        'edit' => 'admin.products.edit',
        'update' => 'admin.products.update',
        'destroy' => 'admin.products.destroy',
    ])->parameters([
        'products' => 'id'
    ]);
     Route::resource('categories', CategoryController::class)->names([
        'index' => 'admin.categories.index',
        'show' => 'admin.categories.show',
        'create' => 'admin.categories.create',
        'store' => 'admin.categories.store',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ])->parameters([
        'categories' => 'id'
    ]);
});

Route::middleware(['auth', 'role:user'])->group(function(){
});

require __DIR__.'/auth.php';
