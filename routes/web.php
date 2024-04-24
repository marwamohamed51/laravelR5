<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('marwa', function () {
    return "welcome to my website ";
});
