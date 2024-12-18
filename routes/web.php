<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});

