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

Route::get('/movieRecommendation',function(){
    return view('movieRecommendation');
});










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);

Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::POST('/addMembers', [App\Http\Controllers\MemberController::class, 'store'])->name('addMembers');

Route::get('/showMembers', [App\Http\Controllers\MemberController::class, 'view'])->name('viewMembers');

Route::get('/deleteMembers/{id}', [App\Http\Controllers\MemberController::class, 'delete'])->name('deleteMembers');

Route::get('/showProjectMembers', [App\Http\Controllers\MemberController::class, 'listMembers'])->name('listMembers');

Route::post('/updateMembers', [App\Http\Controllers\MemberController::class, 'update'])->name('updateMembers');

Route::get('/editMembers/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('editMembers');

