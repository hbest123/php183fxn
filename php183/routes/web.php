<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/admin/index',"Admin\IndexController@index");

Route::get('/admin/user/add','Admin\UserController@add');
Route::post('/admin/user/insert','Admin\UserController@insert');
Route::get('/admin/user/index','Admin\UserController@index');
Route::get('/admin/user/edit/{id}','Admin\UserController@edit');
Route::post('/admin/user/update','Admin\UserController@update');
Route::get('/admin/user/delete/{id}','Admin\UserController@delete');
Route::post('/admin/user/ajaxrename','Admin\UserController@ajaxRename');

//分类管理
Route::resource('/admin/category','Admin\CategoryController');
Route::get('/admin/getallcategory','Admin\CategoryController@get');
