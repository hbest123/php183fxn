<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
     public function add()
    {	
    	//添加管理员
    	return view('admin.admins.add',['title'=>'管理员添加']);
    }

    public function insert(Request $request)
    {	

        $this->validate($request, [
        'name' => 'required|unique:admin|min:6|max:18',
        'email'=>'email|unique:admin',
        'password'=>'required',
        're_password'=>'required|same:password',
        'avatar'=>'required|image'
        ],[

        'name.required'=>'管理员不能为空.',

        'name.unique'=>'管理员已存在.',

        'name.min' => '管理员最小6个字符.',

        'name.max'=>'管理员最大18个字符.',
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

    //dd($data);
  //执行添加数据库中

    $res = \DB::table('admin')->insert(
    $data
    );

    if($res)
    {
    return redirect('/admin/admins/index')->with(['info'=>'添加成功']);
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
       $data =  \DB::table('admin')->where('name','like','%'.$keywords.'%')->paginate($num);
      
       return view('admin.admins.index',['request' => $request->all(),'title'=>'用户列表' ,'data' => $data]);
      
    }


    //编辑功能

    public function edit($id)
    {
        $data = \DB::table('admin')->where('id',$id)->first();
        return view('admin.admins.edit',['title'=>'用户编辑','data'=>$data]);
    }

    //执行编辑

    public function update(Request $request)
    {
        $data = $request->except('_token','id');
        
        //查询老图片

        $oldAvatar = \DB::table('admin')->where('id',$request->id)->first()->avatar;
        
        if($request->hasFile('avatar'))
        {
            if($request->file('avatar')->isValid())
            {
                //获取扩展名
            $ext = $request->file('avatar')->extension();

            //随机文件名
            $filename = time().mt_rand(100000,999999).'.'.$ext;

            $request->file('avatar')->move('./uploads/avatar',$filename);

            //删除老图片
            
            if(file_exists('./uploads/avatar/'.$oldAvatar) && $oldAvatar!='default.jpg')

            {
                unlink('./uploads/avatar/'.$oldAvatar);
            }
            //添加数据到数据库

            $data['avatar'] = $filename;

            }
        }
        //处理更新时间
        $data['updated_at'] = date('Y-m-d H:i:s');

        $res = \DB::table('admin')->where('id',$request->id)->update($data);


        if($res)
        {
        return redirect('/admin/admins/index')->with(['info'=>'修改成功']);
        }

        else{
        return back()->with(['info'=>'修改失败']);
        }
    }

    //删除

    public function delete($id)
    {
       // $res = \DB::table('users')->delete($id);
        $res = \DB::table('admin')->where('id',$id)->delete();
        if($res)
        {
        return redirect('/admin/admins/index')->with(['info'=>'删除成功']);
        }

        else{
        return back()->with(['info'=>'删除失败']);
        }
    }

    //ajax修改用户名

    public function ajaxRename(Request $request)
    {
        //dd($request->all());
        $res = \DB::table('admin')->where('name',$request->input('name'))->first();
        if($res)
        {
            return response()->json(0);
        }else

            {   
        $res = \DB::table('admin')->where('id',$request->input('id'))->update(['name'=>$request->input('name')]);

        if($res)
        {

            return response()->json(1); 
        }else
        {
            return response()->json(2);
        }

        }
    }

}
