<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/new', function () {
    return view('new');
});
Route::get('/style', function () {
    return view('style');
});
Route::get('/script', function () {
    return view('script');
});

