<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询数据库/用DB::raw来处理sql语句
         $data = \DB::table('category')->select("*",\DB::raw("concat(path,',',id) As sort_path"))->orderBy('sort_path')->get();
        //处理
        foreach ($data as $key => $val) {
            //数path字段里的逗号个数


            $num = substr_count($val->path,',');
            //根据层级关系加|--符号，表示层级关系
            $data[$key]->name = str_repeat('|--', $num).$data[$key]->name;
        }
        return view('/admin.category.index',['title'=>'分类添加','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //查询数据库/用DB::raw来处理sql语句
        $data = \DB::table('category')->select("*",\DB::raw("concat(path,',',id) As sort_path"))->orderBy('sort_path')->get();
        //处理
        foreach ($data as $key => $val) {
            //数path字段里的逗号个数
            $num = substr_count($val->path,',');



            //根据层级关系加|--符号，表示层级关系
            $data[$key]->name = str_repeat('|--', $num).$data[$key]->name;

            
        }

        // dd($data);
        //加载添加分类页面，
        return view('/admin.category.add',['title'=>'分类添加'],['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except("_token");
        
        //处理图片上传
        //1.如果有图片
        if($request->hasFile('avatar')){

            //拿到图片 判断是否有效的图片
            if($request->file('avatar')->isValid()){
                //获取扩展名
                $ext = $request->file('avatar')->extension();
                //随机文件名,加一个时间戳，保证一秒钟传老多也不重复
                $filename = time().mt_rand(1000000,99999999).'.'.$ext;
                // dd($filename);
                //移动
                $request->file('avatar')->move('./uploads/avatar',$filename);

                //添加data数据
                // $data['avatar'] = $filename;
                
            }

            $data = $request->except("avatar","_token");
            $data['avatar'] = $filename;
            // dd($data);
        }
        //查询父path
        //判断
        if($data['pid'] == 0){
            $data['path'] = 0;
            $data['status'] = 1;
        }else{
             //查找父ID   
            $parent_path = \DB::table('category')->where('id',$data['pid'])->first()->path;

            $data['path'] = $parent_path.','.$data['pid'] ;
            $data['status'] = 1;
            // dd($data);
    }

    //插入数据库
    $res = \DB::table('category')->insert($data);
    //判断是否添加成功并跳转
    if($res){
        return redirect('/admin/category/create')->with(['info'=>'添加成功!']);
    }else{
        return redirect('/admin/category/create')->with(['info'=>'添加失败！']);
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
        //所有分类数据//查询数据库/用DB::raw来处理sql语句
        $allData = \DB::table('category')->select("*",\DB::raw("concat(path,',',id) As sort_path"))->orderBy('sort_path')->get();
        //处理
        foreach ($allData as $key => $val) {
            //数path字段里的逗号个数
            $num = substr_count($val->path,',');
            //根据层级关系加|--符号，表示层级关系
            $allData[$key]->name = str_repeat('|--', $num).$allData[$key]->name;
        }
        //查询要修改的一条数据//当前分类数据
        $data = \DB::table('category')->where('id',$id)->first();
        return view('/admin.category.edit',['title'=>'分类编辑','data'=>$data,'allData'=>$allData]);


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
        $oldAvatar = \DB::table('category')->where('id',$id)->first()->avatar;
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
                $request->file('avatar')->move('./uploads/avatar',$filename);
                //删除老图片
                //判断这张图片在不在并且不能为默认图片
                if(file_exists('./uploads/avatar/'.$oldAvatar) && $oldAvatar!='default.jpg'){
                    //删除
                    unlink('./uploads/avatar/'.$oldAvatar);
                }
                //添加data数据
                $data['avatar'] = $filename;

                // dd($data);
            }
            
        }
        }else if($request->hasFile('avatar')){

            //获取扩展名
                $ext = $request->file('avatar')->extension();
                //随机文件名,加一个时间戳，保证一秒钟传老多也不重复
                $filename = time().mt_rand(1000000,99999999).'.'.$ext;
                //移动
                $request->file('avatar')->move('./uploads/avatar',$filename);

                //添加data数据
                $data['avatar'] = $filename;

        }else{
            return back()->with(['info'=>'未选择图片！']);
        }

        //查询父path
        
        //判断
        if($data['pid'] == 0){
            $data['path'] = 0;
            $data['status'] = 1;
        }else{

            //查找父ID   
            $parent_path = \DB::table('category')->where('id',$data['pid'])->first()->path;

            $data['path'] = $parent_path.','.$data['pid'] ;
            //状态
            $data['status'] = 1;
            // dd($data);
             }

        
        $res = \DB::table('category')->where('id',$id)->update($data);
        // dd($res);
        
         if($res==1){
            return redirect('/admin/category')->with(['info'=>'更新成功啦!']);
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
       $res1 = \DB::table('category')->where('pid',$id)->first();
        if($res1){
            return back()->with(['info'=>'有子分类，不可删除']);
        }else{
            \DB::table('category')->delete($id);
            return back()->with(['info'=>'删除成功!']);
        }
    }

    //递归查询所有多级分类
    public function getCategoryByPid($pid)
    {
        //根据pid查询子分类
        $data = \DB::table('category')->where('pid',$pid)->get();

        $allData = [];
        foreach ($data as $key => $val) {
           $val->sub = $this->getCategoryByPid($val->id);
           $allData[] = $val;
        }
        return $allData;
    }

    public function get()
    {
        $data = $this->getCategoryByPid(0);
        dd($data);
    }
}
