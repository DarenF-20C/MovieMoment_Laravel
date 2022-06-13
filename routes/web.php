<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/top10', function () {
    return view('top10');
});

Route::get('/recommend', function () {
    return view('recommend');
});

Route::get('/community',[App\Http\Controllers\ContentController::class,'getPosts'])->
name('community');

Route::post('/addPost', [App\Http\Controllers\ContentController::class, 'addPost'])->
name('addPost');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
