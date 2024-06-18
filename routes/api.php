<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('contact', function () {
    return view('contactus');
})->name('contactus');

Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');
// http://localhost/laravelR5/public/api/admin/test