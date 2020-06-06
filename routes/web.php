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



Route::post('/admin/login', "UserController@login");
Route::view('/admin/login', 'admin.index');
Route::get('/admin/logout', function(){
    session()->forget('userid');
    return redirect('/admin/login');
});
Route::view('/', 'admin.members');

