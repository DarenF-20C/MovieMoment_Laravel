<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/addMembers', function () {
    return view('addMembers');
});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/addMembers', [App\Http\Controllers\MemberController::class, 'store'])->name('addMembers');

Route::get('/addCompany', [App\Http\Controllers\CompanyController::class, 'store'])->name('storeCompany');
