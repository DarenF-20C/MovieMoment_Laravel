<?php

use Illuminate\Support\Facades\Route;

// ----------------------------------------Home/Nav Route----------------------------------------
Route::get('/', function ()                     {return view('welcome');});
Route::get('/contactUs', function ()            {return view('contactUs');});
Route::get('/top10', function ()                {return view('top10');});
Route::get('/movieRecommendation', function ()  {return view('movieRecommendation');});
Route::get('/familyMovie', function ()          {return view('familyMovie');});
Route::get('/tvshow', function ()               {return view('tvshow');});
Route::get('/community',[App\Http\Controllers\ContentController::class,'getPosts'])->name('community');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::POST('/addMembers', [App\Http\Controllers\MemberController::class, 'store'])->name('addMembers');
Route::get('/showMembers', [App\Http\Controllers\MemberController::class, 'view'])->name('viewMembers');
Route::get('/deleteMembers/{id}', [App\Http\Controllers\MemberController::class, 'delete'])->name('deleteMembers');
Route::get('/showProjectMembers', [App\Http\Controllers\MemberController::class, 'listMembers'])->name('listMembers');
Route::post('/updateMembers', [App\Http\Controllers\MemberController::class, 'update'])->name('updateMembers');
Route::get('/editMembers/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('editMembers');
// ----------------------------------------Home/Nav Route----------------------------------------



// ----------------------------------------Community Route----------------------------------------
Route::post('/addPost', [App\Http\Controllers\ContentController::class, 'addPost'])->name('addPost');
Route::post('/editPost', [App\Http\Controllers\ContentController::class, 'editPost'])->name('editPost');
Route::get('/delPost/{id}', [App\Http\Controllers\ContentController::class, 'delPost'])->name('delPost');
Route::post('/like-post/{id}', [App\Http\Controllers\ContentController::class, 'likePost'])->name('post.like');
Route::post('/addComment', [App\Http\Controllers\CommentController::class, 'addComment'])->name('addComment');
// ----------------------------------------Community Route----------------------------------------



// ----------------------------------------Admin Route----------------------------------------
Auth::routes();
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/admin-list',[App\Http\Controllers\AdminController::class, 'showAdmin'])->name('admin.adminList')->middleware('is_admin');
Route::get('/admin/admin-list/remove/User/{id}', [App\Http\Controllers\AdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin')->middleware('is_admin');
Route::get('/admin/user-list',[App\Http\Controllers\AdminController::class, 'showUser'])->name('admin.userList')->middleware('is_admin');
Route::get('/admin/user-list/remove/User/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.deleteUser')->middleware('is_admin');
Route::get('/admin/comment-list',[App\Http\Controllers\AdminController::class, 'showComment'])->name('admin.commentList')->middleware('is_admin');
Route::get('/admin/post-list',[App\Http\Controllers\AdminController::class, 'showPost'])->name('admin.postList')->middleware('is_admin');
// ----------------------------------------Admin Route----------------------------------------
