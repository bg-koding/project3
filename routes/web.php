<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});



// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });