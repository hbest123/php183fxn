<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //展示订单列表

    public function index(Request $Request)
    
    {
    	//查询相关数据

    $data=\DB::table("order")->select("order.*","user.name","orstatus.name as ssname")
                ->join("user","user.id","=","order.uid")
                ->join("orstatus","order.sid",'=',"orstatus.id")
                ->get();



     $newArr=array();
     foreach ($data as $key => $value) {

        $newArr[$value->code]=$value;
     }

    
     return view('admin.orders.index',['title'=>'订单管理'])->with('data',$newArr);

    }

    //查看订单详情

    public function list(Request $request)
    {
    	// 获取订单号

        $code=$request->input("code");

        // 查询订单号下所有的商品

        $data=\DB::table("order")->select("order.*","shopping.sname","shopping.avatar")->join("shopping","shopping.id","=","order.gid")->where("code",$code)->get();

        // 数据展示到界面

        return view("admin.orders.list",['title'=>'订单详情'])->with("data",$data);
    }


    //展示收货地址详情
    public function addr()
    {
    	// 获取数据

        $aid=$_GET['aid'];

        // 查询订单收货地址信息

        $data=\DB::table("address")->find($aid);

        // 加载页面

        return view("admin.orders.addr",['title'=>'收货地址详情'])->with("data",$data);
    }


 public function edit(Request $request){

       

          if($_POST) {
            $sid=$request->input("sid");
            $code=$request->input("code");

            $res = \DB::table('order')
            ->where('code', $code)
            ->update(['sid' =>$sid]);

            if ($res) {
               
            return redirect("admin/order");

            }else{

           return back();

            }

        }else{
           
        // 查询所有的订单状态
        $data=\DB::table("orstatus")->get();

        return view("admin.orders.edit",['title'=>'订单状态修改'])->with("data",$data);

        }
    }

}
