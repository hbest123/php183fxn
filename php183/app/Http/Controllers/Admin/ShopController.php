<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \DB::table('shopping')->select()->get();

        return view('admin.shop.index',['title'=>'商品列表','data'=>$data]);
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

        return view('admin.shop.add',['title'=>'添加商品','data'=>$data]);
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
        // dd($data);
        //处理图片上传
        // //1.如果有图片
        if($request->hasFile('avatar')){
            //拿到图片 判断是否有效的图片
            if($request->file('avatar')->isValid()){
                //获取扩展名
                $ext = $request->file('avatar')->extension();
                //随机文件名,加一个时间戳，保证一秒钟传老多也不重复
                $filename = time().mt_rand(1000000,99999999).'.'.$ext;
                //移动
                $request->file('avatar')->move('./uploads/shopping',$filename);

                //添加data数据
                $data['avatar'] = $filename;
            }
            $data = $request->except("avatar","_token");
            $data['avatar'] = $filename;
        }else{
            return redirect('/admin/shop/create')->with(['info'=>'请选择图片！']);
        }



        $sname = $request->sname;
        $price = $request->price;
        $color = $request->color;
        $store = $request->store;

        $pid = $request->pid;



        if(!$sname){
            return redirect('/admin/shop/create')->with(['info'=>'请添加商品名！']);
        }else if(!$price){
            return redirect('/admin/shop/create')->with(['info'=>'请添加价格！']);
        }else if(!$color){
            return redirect('/admin/shop/create')->with(['info'=>'请添加颜色！']);
        }

        
        
        $data1=[];
        $data1['tid'] = $data['pid'];
        $data1['stype'] = $data['stype'];
        $data1['sname'] = $data['sname'];
        $data1['price'] = $data['price'];
        $data1['avatar'] = $data['avatar'];
        $data1['color'] = $data['color'];
        $data1['store'] = $data['store'];
        //dd($data['pid']);
        //$res1 = \DB::table('category')->where('pid','0')->first();

        // if($data['pids']==0){
        //     return back()->with(['info'=>'不可添加商品!']);
        // }else{
            $res = \DB::table('shopping')->insert($data1);
        // }

        
        
        
        if($res){
            return redirect('/admin/shop')->with(['info'=>'添加成功！']);
        }else{
            return back()->with(['info'=>'添加失败！']);
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


      

       

        //当前查询到的商品
        $data = \DB::table('shopping')->where('id',$id)->first();
        
        return view('admin.shop.edit',['title'=>'编辑商品','data'=>$data,'allData'=>$allData]);
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
         $data = $request->except('_token','_method',$id);
        //查询老图片。
        $oldAvatar = \DB::table('shopping')->where('id',$id)->first()->avatar;
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
                $request->file('avatar')->move('./uploads/shopping',$filename);
                //删除老图片
                //判断这张图片在不在并且不能为默认图片
                if(file_exists('./uploads/shopping/'.$oldAvatar) && $oldAvatar!='default.jpg'){
                    //删除
                    unlink('./uploads/shopping/'.$oldAvatar);
                }
                //添加data数据
                $data['avatar'] = $filename;

                // dd($data);
            }
            
        }
    }

        $res = \DB::table('shopping')->where('id',$id)->update($data);
        if($res){
            return redirect('/admin/shop')->with(['info'=>'修改成功！']);
        }else{
            return back()->with(['info'=>'修改失败！']);
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
        $res = \DB::table('shopping')->delete($id);
        if($res){
            return back()->with(['info'=>'删除成功！']);
        }else{
            return back()->with(['info'=>'删除失败！']);
        }
    }
}
