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

//��̨����·�ɿ�ʼ

//�м��
Route::group(['middleware'=>'adminlogin'],function(){


//---------------------��̨����Ա����----------------------------------------


//��̨��ҳ
Route::get('/admin/index',"Admin\IndexController@index");

//��̨����Ա���
Route::get('/admin/admins/add','Admin\AdminController@add');

//��̨����Ա����ִ�����
Route::post('/admin/admins/insert','Admin\AdminController@insert');

//��̨����Ա�б�
Route::get('/admin/admins/index','Admin\AdminController@index');

//��̨����Ա���ݱ༭ҳ
Route::get('/admin/admins/edit/{id}','Admin\AdminController@edit');

//��̨����Ա�����޸�
Route::post('/admin/admins/update','Admin\AdminController@update');

//��̨����Ա����ɾ��
Route::get('/admin/admins/delete/{id}','Admin\AdminController@delete');

//��̨ajax�޸Ĺ���Ա����
Route::post('/admin/admins/ajaxrename','Admin\AdminController@ajaxRename');




//��̨��Ʒ����,��Դ������
Route::resource('/admin/category','Admin\CategoryController');
Route::get('/admin/getallcategory','Admin\CategoryController@get');

//��̨�û�����
Route::resource('/admin/user','Admin\UserController');


//��̨�˳�
Route::get('/admin/logout','Admin\LoginController@logout');
});



//��̨��¼
Route::get('/admin/login','Admin\LoginController@login');
Route::post('/admin/dologin','Admin\LoginController@dologin');

//��֤��
Route::get('/kit/captcha/{tmp}', 'Admin\KitController@captcha');



//��̨�����ʼ������һ�����
Route::get('send','Admin\MailController@send');
Route::get('/admin/forgot','Admin\ForgotController@forgot');
Route::post('/admin/sendemail','Admin\ForgotController@sendEmail');
Route::get('/admin/link/{token}','Admin\ForgotController@link');
Route::get('/admin/newpass/{id}','Admin\ForgotController@newPass');
Route::get('/admin/info','Admin\ForgotController@info');
Route::post('/admin/updatepass','Admin\ForgotController@updatePass');
//��̨����·�ɽ���


//ǰ̨·�ɿ�ʼ

//ǰ̨ע��
Route::get('/home/register','Home\RegisterController@register');
Route::post('/home/add','Home\RegisterController@add');



//ǰ̨��¼
Route::get('/home/login','Home\LoginController@login');
Route::post('/home/dologin','Home\LoginController@dologin');

//��ʾǰ̨��ҳ
Route::get('/home/index',"Home\IndexController@index");

//ǰ̨�˳�
Route::get('/home/logout','Home\LoginController@logout');

//ǰ̨�����ʼ�,�һ�����
Route::get('/home/forgot','Home\ForgotController@forgot');
Route::post('/home/sendemail','Home\ForgotController@sendEmail');
Route::get('/home/link/{token}','Home\ForgotController@link');
Route::get('/home/newpass/{id}','Home\ForgotController@newPass');
Route::get('/home/info','Home\ForgotController@info');
Route::post('/home/updatepass','Home\ForgotController@updatePass');

//------------------------ǰ̨��Ʒ����------------------------------------



//�ҵ��̳�
Route::get('/home/myshop/index',"Home\MyshopController@index");

//������Ϣ�༭
Route::get('/home/person/edit/{id}',"Home\PersonController@edit");

//ִ���޸��˻�

Route::post('/home/person/update',"Home\PersonController@update");

//ִ���޸�����
Route::post('/home/person/eupdate',"Home\PersonController@eupdate");


//ִ���޸�����


Route::post('/home/person/pupdate',"Home\PersonController@pupdate");
