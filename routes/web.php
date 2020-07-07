<?php

use Illuminate\Support\Facades\Route;

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


Route::redirect('/', 'en/login');
Route::group(['prefix' => '{language}/'], function () {
    Route::group(['prefix' => 'admin/'], function () {
        Route::any('login', "AdminController@login");
        Route::get('dashboard', "AdminController@welcome");
        Route::get('logout',"AdminController@logout");
        Route::any('editmember/{id}',"AdminController@edit");
        Route::any('addmember',"AdminController@register");
        Route::any('managemember/{id?}',"AdminController@manage");
        Route::any('pendingmember/{id?}',"AdminController@pending");
        Route::any('addcategory',"ProductController@addcat");
        Route::any('managecategory/{id?}',"ProductController@managecat");
        Route::any('editcategory/{id}',"ProductController@editcat");
        Route::any('additem',"ProductController@additem");
        Route::any('edititem/{id}',"ProductController@edititem");
        Route::any('manageitem/{id?}',"ProductController@manageitem");
        Route::any('comments/{id?}',"CommentController@manage");
        Route::any('editcomment/{id}',"CommentController@edit");
    });
    Route::any('login', "UserController@login");
    Route::any('register', "UserController@register");
    Route::get('logout',"AdminController@logout");
    Route::get('profile', "UserController@welcome");
    Route::get('showitem/{id}', "UserController@showitem");
    Route::post('addcomment/{id}', "CommentController@add");
    Route::post('addrate/{id}', "CommentController@addrate");
    Route::any('add', "UserController@add");
    Route::get('category/{id}',"UserController@category");


});
Route::get('/admin/approveitem/{id}',"ProductController@approveitem");
Route::get('/admin/approvecomment/{id}',"CommentController@approve");


// انسخ دا وعدل فيه هيكون سهل ان شاء الله 
Route::get('en/showiteasdm',function()
{   //('/admin/edit') -> is the URL 
    return view('ShowItem');
    // ('admin/members')-> is the page that will open 
});

