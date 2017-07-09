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

//后台管理路由开始

//中间件
Route::group(['middleware'=>'adminlogin'],function(){


//---------------------后台管理员操作----------------------------------------


//后台主页
Route::get('/admin/index',"Admin\IndexController@index");

//后台管理员添加
Route::get('/admin/admins/add','Admin\AdminController@add');

//后台管理员数据执行添加
Route::post('/admin/admins/insert','Admin\AdminController@insert');

//后台管理员列表
Route::get('/admin/admins/index','Admin\AdminController@index');

//后台管理员数据编辑页
Route::get('/admin/admins/edit/{id}','Admin\AdminController@edit');

//后台管理员数据修改
Route::post('/admin/admins/update','Admin\AdminController@update');

//后台管理员数据删除
Route::get('/admin/admins/delete/{id}','Admin\AdminController@delete');

//后台ajax修改管理员名称
Route::post('/admin/admins/ajaxrename','Admin\AdminController@ajaxRename');




//后台商品分类,资源控制器
Route::resource('/admin/category','Admin\CategoryController');
Route::get('/admin/getallcategory','Admin\CategoryController@get');

//后台用户管理
Route::resource('/admin/user','Admin\UserController');


//后台退出
Route::get('/admin/logout','Admin\LoginController@logout');
});



//后台登录
Route::get('/admin/login','Admin\LoginController@login');
Route::post('/admin/dologin','Admin\LoginController@dologin');

//验证码
Route::get('/kit/captcha/{tmp}', 'Admin\KitController@captcha');



//后台发送邮件测试找回密码
Route::get('send','Admin\MailController@send');
Route::get('/admin/forgot','Admin\ForgotController@forgot');
Route::post('/admin/sendemail','Admin\ForgotController@sendEmail');
Route::get('/admin/link/{token}','Admin\ForgotController@link');
Route::get('/admin/newpass/{id}','Admin\ForgotController@newPass');
Route::get('/admin/info','Admin\ForgotController@info');
Route::post('/admin/updatepass','Admin\ForgotController@updatePass');
//后台管理路由结束


//前台路由开始

//前台注册
Route::get('/home/register','Home\RegisterController@register');
Route::post('/home/add','Home\RegisterController@add');



//前台登录
Route::get('/home/login','Home\LoginController@login');
Route::post('/home/dologin','Home\LoginController@dologin');

//显示前台主页
Route::get('/home/index',"Home\IndexController@index");

//前台退出
Route::get('/home/logout','Home\LoginController@logout');

//前台发送邮件,找回密码
Route::get('/home/forgot','Home\ForgotController@forgot');
Route::post('/home/sendemail','Home\ForgotController@sendEmail');
Route::get('/home/link/{token}','Home\ForgotController@link');
Route::get('/home/newpass/{id}','Home\ForgotController@newPass');
Route::get('/home/info','Home\ForgotController@info');
Route::post('/home/updatepass','Home\ForgotController@updatePass');

//------------------------前台商品管理------------------------------------



//我的商城
Route::get('/home/myshop/index',"Home\MyshopController@index");

//个人信息编辑
Route::get('/home/person/edit/{id}',"Home\PersonController@edit");

//执行修改账户

Route::post('/home/person/update',"Home\PersonController@update");

//执行修改邮箱
Route::post('/home/person/eupdate',"Home\PersonController@eupdate");


//执行修改密码


Route::post('/home/person/pupdate',"Home\PersonController@pupdate");
