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

Route::redirect('/', 'en/admin/login');
Route::group(['prefix' => '{language}'], function () {
    Route::any('/admin/login', "UserController@login");
    Route::get('/admin/dashboard', "UserController@welcome");
    Route::get('/admin/logout',"UserController@logout");
    Route::any('/admin/editmember/{id}',"UserController@edit");
    Route::any('/admin/addmember',"UserController@register");
    Route::any('/admin/managemember/{id?}',"UserController@manage");
    Route::any('/admin/pendingmember/{id?}',"UserController@pending");
    Route::any('/admin/addcategory',"ProductController@addcat");
    Route::any('/admin/managecategory/{id?}',"ProductController@managecat");
    Route::any('/admin/editcategory/{id}',"ProductController@editcat");
    Route::any('/admin/additem',"ProductController@additem");
    Route::any('/admin/edititem/{id}',"ProductController@edititem");
    Route::any('/admin/manageitem/{id?}',"ProductController@manageitem");
    Route::get('/admin/approveitem/{id}',"ProductController@approveitem");

    
});

// انسخ دا وعدل فيه هيكون سهل ان شاء الله 
Route::get('en/admin/editcomments ',function()
{   //('/admin/edit') -> is the URL 
    return view('admin/EditComments');
    // ('admin/members')-> is the page that will open 
});