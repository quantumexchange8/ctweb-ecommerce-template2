<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog-2-col-mas', function () {
    return view('blog-2-col-mas');
});

Route::get('/blog-2-col', function () {
    return view('blog-2-col');
});

Route::get('/blog-3-col-mas', function () {
    return view('blog-3-col-mas');
});

Route::get('/blog-3-col', function () {
    return view('blog-3-col');
});

Route::get('/blog-details-audio', function () {
    return view('blog-details-audio');
});

Route::get('/blog-details-gallery', function () {
    return view('blog-details-gallery');
});

Route::get('/blog-details-left-sidebar', function () {
    return view('blog-details-left-sidebar');
});

Route::get('/blog-details-video', function () {
    return view('blog-details-video');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index-2', function () {
    return view('index-2');
});

Route::get('/index-3', function () {
    return view('index-3');
});

Route::get('/index-4', function () {
    return view('index-4');
});

Route::get('/index-5', function () {
    return view('index-5');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/product-external', function () {
    return view('product-external');
});

Route::get('/product-sidebar', function () {
    return view('product-sidebar');
});

Route::get('/product-simple', function () {
    return view('product-simple');
});

Route::get('/product-up-thumb', function () {
    return view('product-up-thumb');
});

Route::get('/product-upcoming', function () {
    return view('product-upcoming');
});

Route::get('/product-variable', function () {
    return view('product-variable');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/shop-3-col', function () {
    return view('shop-3-col');
});

Route::get('/shop-filter', function () {
    return view('shop-filter');
});

Route::get('/shop-full', function () {
    return view('shop-full');
});

Route::get('/shop-left-sidebar', function () {
    return view('shop-left-sidebar');
});

Route::get('/shop-list', function () {
    return view('shop-list');
});

Route::get('/shop-no-sidebar', function () {
    return view('shop-no-sidebar');
});

Route::get('/shop-sidebar-right', function () {
    return view('shop-sidebar-right');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});