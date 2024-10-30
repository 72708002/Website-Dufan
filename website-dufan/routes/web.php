<?php

use Illuminate\Support\Facades\Route;

Route::get('/center', function () {
    return view('center');
});
Route::get('/finish', function () {
    return view('finish');
});
Route::get('/first', function () {
    return view('first');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/more', function () {
    return view('more');
});
Route::get('/otp', function () {
    return view('otp');
});
Route::get('/pesan', function () {
    return view('pesan');
});
Route::get('/phone', function () {
    return view('phone');
});
Route::get('/phone2', function () {
    return view('phone2');
});
Route::get('/phone3', function () {
    return view('phone3');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/reset', function () {
    return view('reset');
});
Route::get('/reset2', function () {
    return view('reset2');
});
Route::get('/show', function () {
    return view('show');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signinfacebook', function () {
    return view('signinfacebook');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signupfacebook', function () {
    return view('signupfacebook');
});
Route::get('/signupphone', function () {
    return view('signupphone');
});
Route::get('/sosmed', function () {
    return view('sosmed');
});
Route::get('/ticket', function () {
    return view('ticket');
});