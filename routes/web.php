<?php

use Illuminate\Support\Facades\Route;

// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/', function () {
    return view('welcomeApp');
});