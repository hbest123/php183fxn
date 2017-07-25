<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //用户列表

        $num = $request->input('num',10);
        $keywords = $request->input('keywords','');

        //查询数据库
        $data = \DB::table('user')->where('name','like','%'.$keywords.'%')->paginate($num);
      
        return view('admin.users.index',['request' => $request->all(),'title'=>'用户列表' ,'data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加用户
        return view('admin.users.add',['title'=>'用户添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //执行用户添加

        $this->validate($request, [
        'name' => 'required|unique:user|min:3|max:18',
        'email'=>'email|unique:user',
        'password'=>'required',
        're_password'=>'required|same:password',
        
        ],[

        'name.required'=>'管理员不能为空.',

        'name.unique'=>'管理员已存在.',

        'name.min' => '管理员最小3个字符.',

        'name.max'=>'管理员最大18个字符.',
        'email.email'=>'请输入正确的邮箱.',
        'email.unique'=>'邮箱已存在.',
        'password.required'=>'密码不能为空.',
        're_password.required'=>'确认密码不能为空.',
        're_password.same'=>'确认密码不一致.',
        

        ]);

        //处理加密
        $data = $request->except('_token','re_password');
        $data['password'] = encrypt($data['password']);
        

        $data['remember_token'] = str_random(50);
        $time = date('Y-m-d H:i:s');
        $data['created_at'] = $time;
        $data['updated_at'] = $time;

      

        $id = \DB::table('user')->insertGetId($data);

        $res = \DB::table('userdetail')->insert(['uid' => $id]);

        if($res)
        {
        return redirect('/admin/user')->with(['info'=>'添加成功']);
        }

        else{
        return back()->with(['info'=>'添加失败']);
        }

        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //用户编辑
        $data = \DB::table('user')->where('id',$id)->first();
        return view('admin.users.edit',['title'=>'用户编辑','data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //执行修改页面
        $data = $request->except('_token','_method');

        $data['updated_at'] = date('Y-m-d H:i:s');

        $res = \DB::table('user')->where('id',$id)->update($data);


        if($res)
        {
        return redirect('/admin/user')->with(['info'=>'修改成功']);
        }

        else{
        return back()->with(['info'=>'修改失败']);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        //删除用户
        $data = \DB::table('user')->where('id',$id)->delete();
        $res = \DB::table('userdetail')->where('uid',$id)->delete();


        if($res &&  $data)
        {
        return redirect('/admin/user')->with(['info'=>'删除成功']);
        }

        else{
        return back()->with(['info'=>'删除失败']);
        }
    }
}
