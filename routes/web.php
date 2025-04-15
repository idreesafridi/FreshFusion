<?php

use Illuminate\Support\Facades\Route;

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
