<?php

use Illuminate\Support\Facades\App;
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
    Route::get('/admin/logout',"UserController@logout");
    Route::get('/admin/edit',function($language)
    {
        App::setLocale($language);
        return view('admin.members');
    });
});

// انسخ دا وعدل فيه هيكون سهل ان شاء الله 
Route::get('/admin/edit',function()
{   //('/admin/edit') -> is the URL 
    return view('admin/members');
    // ('admin/members')-> is the page that will open 
});