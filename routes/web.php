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


Route::group(['prefix' => '{language}'], function () {
    Route::any('/admin/login', "UserController@login");
    Route::get('/admin/dashboard', "UserController@welcome");
    Route::get('/admin/logout',"UserController@logout");
    Route::any('/admin/editmember/{id}',"UserController@edit");
    Route::any('/admin/addmember',"UserController@register");
    Route::get('/admin/managemember/',"UserController@manage");
    Route::post('/admin/managemember/{id}',"UserController@manage");
    
});

// انسخ دا وعدل فيه هيكون سهل ان شاء الله 
Route::get('/admin/edit',function()
{   //('/admin/edit') -> is the URL 
    return view('admin/members');
    // ('admin/members')-> is the page that will open 
});