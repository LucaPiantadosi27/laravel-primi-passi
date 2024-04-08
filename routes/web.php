<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $saluto = "Hello Laravel!";

    return view('homepage', compact('saluto'));
});


Route::get("/secondPage", function () {
    return view("secondPage");
});


Route::get("/trdPage", function () {
    return view("trdPage");
});


Route::get("/fourthPage", function () {

    return view("fourthPage");

});
