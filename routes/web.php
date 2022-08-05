<?php

use Illuminate\Support\Facades\Route;

// ----------------------------------------Home/Nav Route----------------------------------------
Route::get('/', function ()                     {return view('welcome');});
Route::get('/contactUs', function ()            {return view('contactUs');});
Route::get('/top10', function ()                {return view('top10');})->name('top10');
Route::get('/movieRecommendation', function ()  {return view('movieRecommendation');})->name('movieRecommendation');
Route::get('/familyMovie', function () {return view('familyMovie');})->name('familyMovie');
Route::get('/tvshow', function ()               {return view('tvshow');})->name('tvshow');
Route::get('/community',[App\Http\Controllers\ContentController::class,'getPosts'])->name('community');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::POST('/addMembers', [App\Http\Controllers\MemberController::class, 'store'])->name('addMembers');
Route::get('/showMembers', [App\Http\Controllers\MemberController::class, 'view'])->name('viewMembers');
Route::get('/deleteMembers/{id}', [App\Http\Controllers\MemberController::class, 'delete'])->name('deleteMembers');
Route::get('/showProjectMembers', [App\Http\Controllers\MemberController::class, 'listMembers'])->name('listMembers');
Route::post('/updateMembers', [App\Http\Controllers\MemberController::class, 'update'])->name('updateMembers');
Route::get('/editMembers/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('editMembers');
Route::get('/contactUs', [App\Http\Controllers\ContactUsFormController::class, 'index'])->name('contactUs');
Route::post('/contactUs', [App\Http\Controllers\ContactUsFormController::class, 'save'])->name('contact.store');
// ----------------------------------------Home/Nav Route----------------------------------------

// ----------------------------------------Reward System [Users]----------------------------------------
Route::get('/showRewards', [App\Http\Controllers\RewardController::class, 'showRewards'])->name('showRewards');
Route::post('/searchRewards', [App\Http\Controllers\RewardController::class, 'searchRewards'])->name('searchRewards');
Route::get('/redeemRewards/{id}',[App\Http\Controllers\RedeemRewardsController::class, 'redeemRewards'])->name('redeemRewards');
Route::post('/redeemRewards',[App\Http\Controllers\RedeemRewardsController::class, 'confirmRedeem'])->name('confirmRedeem');
Route::get('/myReward', [App\Http\Controllers\RedeemRewardsController::class, 'myReward'])->name('myReward');
Route::get('/myReward', [App\Http\Controllers\RedeemRewardsController::class, 'showMyReward'])->name('showMyReward');
// ----------------------------------------Reward System [Users]----------------------------------------

// ----------------------------------------Community Route----------------------------------------
Route::post('/addPost', [App\Http\Controllers\ContentController::class, 'addPost'])->name('addPost');
Route::post('/editPost', [App\Http\Controllers\ContentController::class, 'editPost'])->name('editPost');
Route::get('/delPost/{id}', [App\Http\Controllers\ContentController::class, 'delPost'])->name('delPost');
Route::post('/like-post/{id}', [App\Http\Controllers\ContentController::class, 'likePost'])->name('post.like');
Route::post('/addComment', [App\Http\Controllers\CommentController::class, 'addComment'])->name('addComment');
// ----------------------------------------Community Route----------------------------------------



// ----------------------------------------Admin Route----------------------------------------
Auth::routes();
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/admin-list',[App\Http\Controllers\AdminController::class, 'showAdmin'])->name('admin.adminList')->middleware('is_admin');
Route::get('/admin/admin-list/remove/Admin/{id}', [App\Http\Controllers\AdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin')->middleware('is_admin');
Route::get('/admin/user-list',[App\Http\Controllers\AdminController::class, 'showUser'])->name('admin.userList')->middleware('is_admin');
Route::get('/admin/user-list/remove/User/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.deleteUser')->middleware('is_admin');
Route::get('/admin/comment-list',[App\Http\Controllers\AdminController::class, 'showComment'])->name('admin.commentList')->middleware('is_admin');
Route::get('/admin/post-list/remove/comment/{id}',[App\Http\Controllers\AdminController::class, 'deleteComment'])->name('admin.deleteComment')->middleware('is_admin');
Route::get('/admin/post-list',[App\Http\Controllers\AdminController::class, 'showPost'])->name('admin.postList')->middleware('is_admin');
Route::get('/admin/post-list/remove/post/{id}',[App\Http\Controllers\AdminController::class, 'deletePost'])->name('admin.deletePost')->middleware('is_admin');
// ----------------------------------------Reward System----------------------------------------
Route::get('/admin/rewards',[App\Http\Controllers\RewardController::class, 'index'])->name('admin.rewards')->middleware('is_admin');
Route::post('/admin/rewards',[App\Http\Controllers\RewardController::class, 'store'])->name('admin.addReward')->middleware('is_admin');
Route::get('/admin/showRewards',[App\Http\Controllers\RewardController::class, 'showRewardList'])->name('admin.rewardList')->middleware('is_admin');;
Route::post('/admin/searchRewards',[App\Http\Controllers\RewardController::class, 'search'])->name('admin.search')->middleware('is_admin');
Route::get('/admin/rewards/edit/{id}',[App\Http\Controllers\RewardController::class, 'edit'])->name('admin.editReward')->middleware('is_admin');
Route::get('/admin/rewards/delete/{id}',[App\Http\Controllers\RewardController::class, 'delete'])->name('admin.deleteReward')->middleware('is_admin');
Route::post('/admin/updateRewards',[App\Http\Controllers\RewardController::class, 'update'])->name('admin.updateReward')->middleware('is_admin');
// ----------------------------------------Reward System----------------------------------------
// ----------------------------------------Admin Route----------------------------------------

//-----------------------------------------User Profile----------------------------------------
Route::get('/userProfile/{id}',[App\Http\Controllers\UserController::class, 'userProfile'])->name('userProfile');
Route::get('/editProfile/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('editProfile');
