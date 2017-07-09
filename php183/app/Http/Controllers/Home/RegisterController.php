<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //加载注册页面

    public function register()

    {
    	return view('home.register.register');
    }

    //执行注册

   public function add(Request $request)
    {	

    	if(!$request['accept'])
    	{
    		return redirect('/home/register')->with(['info'=>'接收协议才能继续']);
    	}

        $this->validate($request, [
        'name' => 'required|unique:user|min:3|max:18',
         'email'=>'email|unique:user',
        'password'=>'required',
        're_password'=>'required|same:password',
        ],[

        'name.required'=>'用户名不能为空.',

        'name.unique'=>'用户名已存在.',

        'name.min' => '用户最小3个字符.',

        'name.max'=>'用户名最大18个字符.',
        'email.email'=>'请输入正确的邮箱.',
        'email.unique'=>'邮箱已存在.',
        'password.required'=>'密码不能为空.',
        're_password.required'=>'确认密码不能为空.',
        're_password.same'=>'确认密码不一致.',
     
        ]);

        //处理加密

        $data = $request->except('_token','re_password','accept');
        $data['password'] = encrypt($data['password']);
        

	    $data['remember_token'] = str_random(50);
	    $data['auth'] = 1;
	    $data['status'] = 1;
	    $time = date('Y-m-d H:i:s');
	    $data['created_at'] = $time;
	    $data['updated_at'] = $time;

	  //执行添加数据库中


        $id = \DB::table('user')->insertGetId($data);

        $res = \DB::table('userdetail')->insert(['uid' => $id]);

        if($res)
        {
        return redirect('/home/login')->with(['info'=>'添加成功']);
        }

        else{
        return back()->with(['info'=>'添加失败']);
        }


	    }

	}
