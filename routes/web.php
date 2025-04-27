<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop-detail', function () {
    return view('shop_detail');
})->name('shop-detail');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/terms&conditions', function () {
    return view('terms_and_policy.terms & conditions');
})->name('terms&conditions');

Route::get('/return-policy', function () {
    return view('terms_and_policy.return_policy');
})->name('return_policy');

Route::get('/FAQs', function () {
    return view('terms_and_policy.faqs & help');
})->name('FAQs');

Route::get('/privacy-policy', function () {
    return view('terms_and_policy.privacy_policy');
})->name('privacy_policy');

// admin routes





Route::get('/admin-order', function () {
    return view('Admin_Panel.order');
})->name('admin-order');

Route::get('/admin-order-detail', function () {
    return view('Admin_Panel.order_details');
})->name('admin-order-detail');

Route::get('/pages', function () {
    return view('Admin_Panel.pages');
})->name('admin-pages');


Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/admin-category', [AdminController::class, 'CategoryList'])->name('admin-category');

    Route::get('/admin-create-category', [AdminController::class, 'CreateCategory'])->name('admin-create-category');
    Route::post('/admin-store-category', [AdminController::class, 'StoreCategory'])->name('admin-store-category');
    Route::get('/admin-edit-category/{id}', [AdminController::class, 'EditCategory'])->name('admin-edit-category');
    Route::put('/admin-update-category/{id}', [AdminController::class, 'UpdateCategory'])->name('admin-update-category');
    Route::delete('/admin-delete-category/{id}', [AdminController::class, 'DeleteCategory'])->name('admin-delete-category');

    Route::get('/admin-product', [AdminController::class, 'ProductList'])->name('admin-product');

    Route::get('/admin-create-product', [AdminController::class, 'CreateProduct'])->name('admin-create-product');

    Route::post('/admin-store-product', [AdminController::class, 'StoreProduct'])->name('admin-store-product');
    Route::get('/admin-edit-product/{id}', [AdminController::class, 'EditProduct'])->name('admin-edit-product');
    Route::put('/admin-update-product/{id}', [AdminController::class, 'UpdateProduct'])->name('admin-update-product');
    Route::delete('/admin-delete-product/{id}', [AdminController::class, 'DeleteProduct'])->name('admin-delete-product');

    Route::get('/admin-user', [AdminController::class, 'UserList'])->name('admin-user');
});

require __DIR__.'/auth.php';
