<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function add()
    {
    	return view('admin.user.add',['title'=>'用户添加']);
    }

    public function insert(Request $request)
    {	

    	$this->validate($request, [
        'name' => 'required|unique:users|min:6|max:18',
     	'email'=>'email|unique:users',
     	'password'=>'required',
     	're_password'=>'required|same:password',
     	'avatar'=>'required|image'
    ],[

    'name.required'=>'用户名不能为空.',
    
    'name.unique'=>'用户名已存在.',

    'name.min' => '用户最小6个字符.',

    'name.max'=>'用户名最大18个字符.',
    'email.email'=>'请输入正确的邮箱.',
    'email.unique'=>'邮箱已存在.',
    'password.required'=>'密码不能为空.',
    're_password.required'=>'确认密码不能为空.',
    're_password.same'=>'确认密码不一致.',
    'avatar.required'=>'您没有上传图片.',
    'avatar.image'=>'您上传的不是一张图片.',

    ]);

   //处理加密

    	

    	$data = $request->except('_token','re_password');
    	$data['password'] = encrypt($data['password']);
    	//$password = decrypt($data['password']);
    	// $data['password'] = \Hash::make($data['password']);

    	// if(\Hash::check('234',$data['password']))
    	// {
    	// 	echo '密码正确';
    	// }

    	// dd($data);
    //上传图片

    if($request->hasFile('avatar'))
    {
    	if($request->file('avatar')->isValid())
    	{
    		//获取扩展名
    		$ext = $request->file('avatar')->extension();

    		//随机文件名
    		$filename = time().mt_rand(100000,999999).'.'.$ext;

    		$request->file('avatar')->move('./uploads/avatar',$filename);

    		//添加数据到数据库

    		$data['avatar'] = $filename;

    	}
    }

  $data['remember_token'] = str_random(50);

  $time = date('Y-m-d H:i:s');
  $data['created_at'] = $time;
  $data['updated_at'] = $time;
  
  //执行添加数据库中

  $res = \DB::table('users')->insert(
    $data
);

if($res)
{
  return redirect('/admin/user/index')->with(['info'=>'添加成功']);
}

else{
 	return back()->with(['info'=>'添加失败']);
}

    }

    public function index(Request $request)
    {
        $num = $request->input('num',10);
        $keywords = $request->input('keywords','');

    	//查询数据库
       $data =  \DB::table('users')->where('name','like','%'.$keywords.'%')->paginate($num);
      
       return view('admin.user.index',['request' => $request->all(),'title'=>'用户列表' ,'data' => $data]);
      
    }

    //ajax修改用户名

    public function ajaxRename(Request $request)
    {
        //dd($request->all());
        $res = \DB::table('users')->where('id','=',$request->input('id'))->where('name','=',$request->input('name'))->first();
        if($res)
        {
            return response()->json(0);
        }
    }
}
