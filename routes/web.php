<?php

use Illuminate\Support\Facades\Route;

// WEB Homepage
Route::get('/', function () {
    return view('homepage');
});
