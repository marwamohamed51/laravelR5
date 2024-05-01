<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;

//task3 --> student form
Route::get('studentForm', [StudentController::class,'create']);
Route::post('studentResult',[StudentController::class,'store'])->name('studentResult');

// Route::get('carvilla', [MyController::class, 'my_data']);
// Route::get('insertClient', [ClientController::class, 'store']);


// Route::get('/', function () {
//     return view('welcome');
// });


//regular expression
// Route::get('marwa/{id?}', function ($id = 16) {
//     return "welcome to my first website " .$id;
// }) -> where(['id' => '[0-9]+']);

//where number
// Route::get('marwa/{id?}', function ($id = 16) {
//     return "welcome to my first website " .$id;
// }) -> whereNumber(['id']);

//where Alpha (string parameter only)
// Route::get('course/{name?}', function ($name = 'Roia') {
//     return "My name is: " .$name;
// }) -> whereAlpha(['name']);


// Route::get('course/{name}', function ($name) {
//     return "My name is: " .$name;
// }) -> whereIn('name',['Maram','Marwa','Mariam']);


// Route::prefix('cars')->group(function () {
//     Route::get('bmw', function () {
//         return "Category is BMW";
//     });

//     Route::get('kia', function () {
//         return "Category is Kia";
//     });
// });

// return unfound page to home page
// Route::fallback(function(){
// // return "Required page is not found";
//     return redirect('/');
// });

// Route::get('studentForm', function(){
//     return view('studentForm');
// });


// Route::post('formResult', function(){
//     // return "Data received successfuly :)";
//     return view('formResult');
// })->name('formResult');


// Route::post('formResult',[MyController::class,'formResult'])->name('formResult');

//session3 --> client form
// Route::get('form', [ClientController::class,'create']);
// Route::post('formResult',[ClientController::class,'store'])->name('formResult');


