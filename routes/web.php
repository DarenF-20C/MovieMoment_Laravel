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

Route::get('/movieRecommendation', function () {
    return view('movieRecommendation');
});

Route::get('/movieDetail', function () {
    return view('movieDetail');
});

Route::get('/top10', function () {
    return view('top10');
});

Route::get('/familyMovie', function () {
    return view('familyMovie');
});

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//--Category route--//
Route::get('/addCategory', [App\Http\Controllers\CategoryController::class,'index'])->name('add.Category');

Route::post('/addCategory', [App\Http\Controllers\CategoryController::class, 'store'])->name('storeCategory');

//-Manage Movie route--
Route::get('/addMovie', [App\Http\Controllers\ManageMovieController::class,'index'])->name('add.Movie');

Route::post('/addMovie' , [App\Http\Controllers\ManageMovieController::class, 'store'])->name('storeMovie');

Route::get('/showMovie', [App\Http\Controllers\ManageMovieController::class, 'view'])->name('viewMovie');

Route::get('/deleteMovie/{id}',[App\Http\Controllers\ManageMovieController::class,'delete'])->name('deleteMovie');

Route::get('editMovie/{id}',[App\Http\Controllers\ManageMovieController::class,'edit'])->name('editMovie');

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

