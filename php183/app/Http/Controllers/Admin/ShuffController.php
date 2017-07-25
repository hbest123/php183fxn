<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \DB::table('shuff')->select()->get();

        return view('admin.shuff.index',['title'=>'轮播图','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.shuff.add',['title'=>'添加推荐商品']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->except('_token');
        // //处理图片上传
        // //1.如果有图片
        if($request->hasFile('avatar')){
            //拿到图片 判断是否有效的图片
            if($request->file('avatar')->isValid()){
                //获取扩展名
                $ext = $request->file('avatar')->extension();
                //随机文件名,加一个时间戳，保证一秒钟传老多也不重复
                $filename = time().mt_rand(1000000,99999999).'.'.$ext;
                //移动
                $request->file('avatar')->move('./uploads/hot',$filename);

                //添加data数据
                $data['avatar'] = $filename;
            }
            $data = $request->except("avatar","_token");
            $data['avatar'] = $filename;
        }else{
            return redirect('/admin/shuff/create')->with(['info'=>'请选择图片！']);
        }
        //判断是否输入了链接名和地址
        $title = $request->title;
        $discrible = $request->discrible;

        if(!$title){
            //跳回添加页
            return redirect('/admin/shuff/create')->with(['info'=>'请输入标题！']);
          
        }else if(!$discrible){
            //跳回添加页 
            return redirect('/admin/shuff/create')->with(['info'=>'请输入价格！']);
        }

        //插入数据库
        $res = \DB::table('shuff')->insert($data);
        //判断是否添加成功并跳转
        if($res){
            return redirect('/admin/shuff')->with(['info'=>'添加成功!']);
        }else{
            return redirect('/admin/shuff/create')->with(['info'=>'添加失败！']);
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
        $data = \DB::table('shuff')->where('id',$id)->first();

        return view('admin.shuff.edit',['title'=>'编辑轮播图','data'=>$data]);
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
        $data = $request->except('_token','id','_method');
        //dd($data);
        //查询老图片。
        $oldAvatar = \DB::table('shuff')->where('id',$id)->first()->avatar;
        // dd($oldAvatar);
        // dd($user);
        if($oldAvatar){
        if($request->hasFile('avatar')){

            if($request->file('avatar')->isValid()){

                //获取扩展名
                $ext = $request->file('avatar')->extension();
                //随机文件名,加一个时间戳，保证一秒钟传老多也不重复
                $filename = time().mt_rand(1000000,99999999).'.'.$ext;
                //移动
                $request->file('avatar')->move('./uploads/hot',$filename);
                //删除老图片
                //判断这张图片在不在并且不能为默认图片
                if(file_exists('./uploads/hot/'.$oldAvatar) && $oldAvatar!='default.jpg'){
                    //删除
                    unlink('./uploads/hot/'.$oldAvatar);
                }
                //添加data数据
                $data['avatar'] = $filename;

                // dd($data);
            }
            
        }
    }


        $res = \DB::table('shuff')->where('id',$id)->update($data);
        // dd($res);
        
        if($res==1){
            return redirect('/admin/shuff')->with(['info'=>'更新成功啦!']);
        }else{
            return back()->with(['info'=>'更新失败了！']);
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
        $res = \DB::table('shuff')->delete($id);
        if($res == 1){
            return back()->with(['info'=>'删除成功！']);
        }else{
            return back()->with(['info'=>'删除失败！']);
        }
    }
}
