<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/features', function () {
    return view('pages.features');
});

Route::get('/faq', function () {
    return view('pages.faq');
});