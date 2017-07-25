<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //生成订单

    public function index(Request $request)
    {
    	//获取收货地址id

    	$aid = $request->input('aid');
    	$ids = $request->input('ids');
    	$nums = $request->input('nums');
    	$prices = $request->input('prices');

    	//获取用户id

    	$uid = session('slave')->id;

    	//生成订单号

    	$code = 'XYZ_'.time().rand();

    	//生成订单时间

    	$time = time();

    	//生成订单

    	for($i=0;$i<count($ids);$i++)
    	{

    		$data = array();

    		$data['code']=$code;
    		$data['time']=$time;
    		$data['uid']=$uid;
    		$data['aid']=$aid;
    		$data['sid']=1;
    		$data['gid']=$ids[$i];
    		$data['num']=$nums[$i];
    		$data['price']=$prices[$i];

    		\DB::table('order')->insert($data);

    	}

    	foreach ($ids as $k => $v) {
    		
    		\DB::table('cart')->where('sid',$v)->delete();
    	}


    	return redirect("/home/orders/pay/$code");	
    }

    //支付方法

    public function pay($code)
    {	
    	$data = \DB::table('order')->where('code',$code)->first();
    	return view('home.pay.pay',['data'=>$data]);
    }


    //前台展示订单列表

    public function list()
    {  

        //获取用户id

        $uid = session('slave')->id;

        $friendlink = \DB::table('friendlink')->select()->get();

        $data=\DB::table("order")->select("order.*","user.name","orstatus.name as ssname","shopping.avatar","shopping.sname","shopping.color")
                ->join("user","user.id","=","order.uid")
                ->join("shopping","shopping.id","=","order.gid")
                ->join("orstatus","order.sid",'=',"orstatus.id")->where('uid',$uid)
                ->get();



     $newArr=array();
     foreach ($data as $key => $value) {

        $newArr[$value->code]=$value;
     }

    
     return view("home.orders.index",['friendlink'=>$friendlink])->with('data',$newArr);
    }


     //查看订单详情

    public function xlist(Request $request)
    {
        // 获取订单号

        $code=$request->input("code");

        // 查询订单号下所有的商品

        $data=\DB::table("order")->select("order.*","shopping.sname","shopping.avatar","shopping.color")->join("shopping","shopping.id","=","order.gid")->where("code",$code)->get();

        // 数据展示到界面

        return view("home.orders.xlist")->with("data",$data);
    }


    //展示收货地址详情
    public function addr()
    {
        // 获取数据

        $aid=$_GET['aid'];

        // 查询订单收货地址信息

        $data=\DB::table("address")->find($aid);

        // 加载页面

        return view("home.orders.addr")->with("data",$data);
    }
}
