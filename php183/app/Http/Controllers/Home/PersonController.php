<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    //用户个人信息编辑页

	public function edit($id)
	{

	$data = \DB::table('userdetail')->where('uid',$id)->first();
  	$data1 = \DB::table('user')->where('id',$id)->first();
    return view('home.goods.person',['data'=>$data,'data1'=>$data1]);
    }

    //修改信息

    public function update(Request $request)
	{
   
   		$data = $request->except('_token');
        
        //查询老图片

        $oldAvatar = \DB::table('userdetail')->where('uid',$request->uid)->first()->avatar;
        
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
        //$data['updated_at'] = date('Y-m-d H:i:s');

        $res = \DB::table('userdetail')->where('uid',$request->uid)->update($data);


        if($res)
        {
        return redirect('/home/myshop/index')->with(['info'=>'修改成功']);
        }

        else{
        return back()->with(['info'=>'修改失败']);
        }
    }

    //修改邮箱

    public function eupdate(Request $request)
    {
    	$data = $request->except('_token');
        
        
        //处理更新时间
        //$data['updated_at'] = date('Y-m-d H:i:s');

        $res = \DB::table('user')->where('id',$request->id)->update($data);


        if($res)
        {
        return redirect('/home/myshop/index')->with(['info'=>'修改成功']);
        }

        else{
        return back()->with(['info'=>'修改失败']);
        }
    }

    //修改密码

    public function pupdate(Request $request)
    {
    	

    	//$data = $request->except('_token');
        
        $password =encrypt($request->newpassword);

       	$id = $request->id;

       	//dd($password);
       	//dd($id);
        
        //处理更新时间
        //$data['updated_at'] = date('Y-m-d H:i:s');

      $res = \DB::table('user')
            ->where('id', $id)
            ->update(['password' => $password]);

        //dd($res);
        if($res)
        {
        return redirect('/home/myshop/index')->with(['info'=>'修改成功']);
        }

        else{
        return back()->with(['info'=>'修改失败']);
        }
    }

}
