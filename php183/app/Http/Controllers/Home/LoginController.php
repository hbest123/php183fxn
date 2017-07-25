<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //用户登录

	public function login()
	{

   	 return view('home.login.login');

	}

	//登录
	 public function dologin(Request $request)
    {
    	$data = $request->except('_token');

        //是否记住我
        $remember_token = \Cookie::get('remember_token');

        if($remember_token)
        {
           $admin = \DB::table('user')->where('remember_token',$remember_token)->first();
           //存入session
           session(['slave'=>$admin]);

           return redirect('/home/index')->with(['info'=>'登录成功']);
        }

        //判断验证码是否正确
    	$code = session('code');

    	if($code != $data['code'])
    	{
    		return back()->with(['info'=>'验证码错误']);
    	}

    	//查询用户
    	$user = \DB::table('user')->where('name',$data['name'])->first();
    	if(!$user)
    	{
    		return back()->with(['info'=>'该管理员不存在']);
    	}
    	
    	$password = decrypt($user->password);


    	if($password != $data['password'])
    	{
    		return back()->with(['info'=>'用户名或密码不存在']);
    	}

    	session(['slave'=>$user]);

        //写入cookie
        if($request->has('remember_me'))
        {
        \Cookie::queue('remember_token',$user->remember_token,10);
        }

    	return redirect('/home/index')->with(['info'=>'登录成功']);
    }

    //退出
    public function logout(Request $request)
    {
        $request->session()->forget('master');
        return redirect('/home/login')->with(['info'=>'退出成功']);
    }

}
