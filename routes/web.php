<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/where', function () {
    return base_path();
});

Route::get('/api-catalog', function () {
    return view('api-catalog');
});
