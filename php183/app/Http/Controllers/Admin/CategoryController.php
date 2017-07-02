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
        //
         $data = \DB::table('category')->select("*",\DB::raw("concat(path,',',id) AS sort_path"))->orderBy('sort_path')->get();

        foreach($data as $key=>$val){

            $num = substr_count($val->path, ',');
            $data[$key]->name = str_repeat('|---',$num).$data[$key]->name;
        }
        return view('admin.category.index',['title'=>'分类列表','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = \DB::table('category')->select("*",\DB::raw("concat(path,',',id) AS sort_path"))->orderBy('sort_path')->get();

        foreach($data as $key=>$val){

            $num = substr_count($val->path, ',');
            $data[$key]->name = str_repeat('|---',$num).$data[$key]->name;
        }
        return view('admin.category.add',['title'=>'添加分类','data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $data = $request->except('_token');

       if($data['pid'] == 0)
       {

        $data['path'] = 0;
        $data['status'] = 1;
       }else
       {
        $parent_path = \DB::table('category')->where('id',$data['pid'])->first()->path;
        $data['path'] = $parent_path.','.$data['pid'];
        $data['status'] = 1;
       }
        
       $res = \DB::table('category')->insert($data);
       if($res)
       {
         return redirect('/admin/category/create')->with(['info'=>'添加成功']);
       }else

       {
         return redirect('/admin/category/create')->with(['info'=>'添加失败']);
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
        //
        $allData = \DB::table('category')->select("*",\DB::raw("concat(path,',',id) AS sort_path"))->orderBy('sort_path')->get();

        foreach($allData as $key=>$val){

            $num = substr_count($val->path, ',');
           $allData[$key]->name = str_repeat('|---',$num).$allData[$key]->name;
        }
       $data = \DB::table('category')->where('id',$id)->first();
       return view('admin.category.edit',['title'=>'编辑分类','data'=>$data,'allData'=>$allData]);


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
        //
        $data = $request->except('_token','_method');
        if($data['pid'] == 0)
       {

        $data['path'] = 0;
        $data['status'] = 1;
       }else
       {
        $parent_path = \DB::table('category')->where('id',$data['pid'])->first()->path;
        $data['path'] = $parent_path.','.$data['pid'];
        $data['status'] = 1;
       }
        
       $res = \DB::table('category')->where('id',$id)->update($data);
       if($res)
       {
         return redirect('/admin/category')->with(['info'=>'修改成功']);
       }else

       {
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
        //

        $res = \DB::table('category')->where('pid',$id)->first();
        if($res)
        {
            return back()->with(['info'=>'有子类,不允许删除']);
        }
        $res = \DB::table('category')->delete($id);

        if($res)
        {
            return redirect('/admin/category')->with(['info'=>'删除成功']);
        }else
        {
            return back()->with(['info'=>'删除失败']);
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
