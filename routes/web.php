<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('index', function () {
    return view('index');
});

Route::get('category', function () {
    return view('category');
});


Route::get('contact', function () {
    return view('contact');
});

Route::get('single', function () {
    return view('single');
});