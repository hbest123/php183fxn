<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotController extends Controller
{
    //forgot
    public function forgot()
    {
    	return view('admin.forgot.forgot');
    }
    //执行找回密码
    public function sendEmail(Request $request)
    {	
    	$data = $request->except('_token');
    	$res = \DB::table('admin')->where('email',$data['email'])->first();

    	if(!$res)
    	{	
    		$request->flash();
    		return back()->with(['info'=>'您的邮箱地址不存在']);
    	}
    	
    	\Mail::send('mails.reset',['res'=>$res],function($message) use($data){
			$message->to($data['email']);
			$message->subject('这是邮件的主题');
		});
    }

    public function link($token)
    {
    	$res = \DB::table('admin')->where('remember_token',$token)->first();
    	if($res)
    	{
    	   return redirect('/admin/newpass/'.$res->id);
    	}else
    	{
    		return redirect('/admin/info')->with(['info'=>'不是一个合法的来源']);
    	}
    }
    public function info()
    {
    	return view('admin.forgot.info');
    }
    public function newPass($id)
    {
    	return view('admin.forgot.newpass',['id'=>$id]);
    }

    //执行修改操作

    public function updatePass(Request $request)
    {
    	$this->validate($request,['repassword'=>'same:password',],['repassword.same'=>'密码不一样',]);
    	
    	$id = $request->input('id');
    	$password = encrypt($request->input('password'));
    	$res = \DB::table('admin')->where('id',$id)->update(['password'=>$password]);
    	if($res)
    	{
    		return redirect('/admin/login')->with(['info'=>'请登录']);
    	}
    	else{

    		return redirect('/admin/info')->with(['info'=>'修改失败']);
    	}

    }
}
