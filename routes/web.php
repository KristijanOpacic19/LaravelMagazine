<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\BlogController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\BlogController::class, 'index'])->name('home');

Route::get('/category/{slug}', [\App\Http\Controllers\BlogController::class, 'category'])->name('category');

Route::get('/article/{slug}/{id}', [\App\Http\Controllers\BlogController::class, 'article'])->name('article');

Route::get('/page/{slug}/', [\App\Http\Controllers\BlogController::class, 'page'])->name('page');

Route::get('/contact-us', [\App\Http\Controllers\BlogController::class, 'contactUs'])->name('contact-us');

Route::get('/search', [\App\Http\Controllers\BlogController::class, 'search'])->name('search');

Route::post('/newsletter', [\App\Http\Controllers\BlogController::class, 'store'])->name('newsletter');

Route::post('/save-comment/{slug}/{id}', [\App\Http\Controllers\BlogController::class, 'save_comment'])->name('save-comment');

Route::post('/sendmessage', [\App\Http\Controllers\crudController::class, 'insetData'])->name('sendmessage');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);

Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::get('auth/google', [SocialController::class, 'redirectToGoogle']);

Route::get('auth/google/callback',  [SocialController::class, 'handleGoogleCallback']);





Route::group(['middleware' => ['auth']], function() {
    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/dashboard', AdminController::class);
});


Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');

//Category
Route::get('/viewcategory', [\App\Http\Controllers\AdminController::class, 'viewCategory'])->name('viewcategory');

Route::post('/addcategory', [\App\Http\Controllers\crudController::class, 'insetData'])->name('addcategory');

Route::get('/editcategory/{id}', [\App\Http\Controllers\AdminController::class, 'editCategory'])->name('editcategory');

Route::post('/updatecategory/{id}', [\App\Http\Controllers\crudController::class, 'updateData'])->name('updatecategory');

Route::post('/multipledelete', [\App\Http\Controllers\AdminController::class, 'multipleDelete'])->name('multipledelete');

//Settings
Route::get('/settings', [\App\Http\Controllers\AdminController::class, 'settings'])->name('settings');

Route::post('/addsettings', [\App\Http\Controllers\crudController::class, 'insetData'])->name('addsettings');

Route::post('/updatesettings/{id}', [\App\Http\Controllers\crudController::class, 'updateData'])->name('updatesettings');

//Posts
Route::get('/add-post', [\App\Http\Controllers\AdminController::class, 'addPost'])->name('add-post');

Route::post('/addpost', [\App\Http\Controllers\crudController::class, 'insetData'])->name('addpost');

Route::get('/all-posts', [\App\Http\Controllers\AdminController::class, 'allPosts'])->name('all-posts');

Route::get('/editpost/{id}', [\App\Http\Controllers\AdminController::class, 'editPost'])->name('editpost');

Route::post('/updatepost/{id}', [\App\Http\Controllers\crudController::class, 'updateData'])->name('updatepost');

//comment
Route::post('/comment/store', 'CommentController@store')->name('comment.add');

//Pages
Route::get('/add-page', [\App\Http\Controllers\AdminController::class, 'addPage'])->name('add-page');

Route::post('/addpage', [\App\Http\Controllers\crudController::class, 'insetData'])->name('addpage');

Route::get('/all-pages', [\App\Http\Controllers\AdminController::class, 'allPages'])->name('all-pages');

Route::get('/editpage/{id}', [\App\Http\Controllers\AdminController::class, 'editPage'])->name('editpage');

Route::post('/updatepage/{id}', [\App\Http\Controllers\crudController::class, 'updateData'])->name('updatepage');

//Messages
Route::get('/messages', [\App\Http\Controllers\AdminController::class, 'messages'])->name('messages');

//Advertisements
Route::get('/add-adv', [\App\Http\Controllers\AdminController::class, 'addAdv'])->name('add-adv');

Route::post('/addadv', [\App\Http\Controllers\crudController::class, 'insetData'])->name('addadv');

Route::get('/all-advs', [\App\Http\Controllers\AdminController::class, 'allAdv'])->name('all-adv');

Route::get('/editadv/{id}', [\App\Http\Controllers\AdminController::class, 'editAdv'])->name('editadv');

Route::post('/updateadv/{id}', [\App\Http\Controllers\crudController::class, 'updateData'])->name('updateadv');
