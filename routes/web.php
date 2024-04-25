<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('marwa/{id?}', function ($id = 16) {
    return "welcome to my first website " .$id;
});