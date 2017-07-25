<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
    //显示购物车

    public function index()
    {

    	$carts = \DB::table('cart')->get();
        $friendlink = \DB::table('friendlink')->select()->get();
    	return view('home.carts.carts',['carts'=>$carts,'friendlink'=>$friendlink]);
        
    }

     // 加入购物车方法

    public function add(Request $request){
    
    // 数据处理
    $sid = $request->sid;

    $count = \DB::table('cart')->where('sid', $sid)->first()->count;

    $count = ++$count;
       
    \DB::table('cart')->where('sid', $sid)->update(['count'=>$count]);

    echo 1;
    }

    // ajax 购物车添加

    public function dec(Request $request){
        
    // 数据处理
    $sid = $request->sid;

    $count = \DB::table('cart')->where('sid', $sid)->first()->count;

    $count = --$count;
       
    \DB::table('cart')->where('sid', $sid)->update(['count'=>$count]);

    echo 1;

    }


    // 购物车的删除

    public function del(Request $request){

    // 数据处理
    $sid = $request->sid;  
    \DB::table('cart')->where('sid', $sid)->delete();

    echo 1;
    }

    // 结算方法

    // public function jiesuan(Request $request){


    //     // 查询当前登录者的收货地址

    //     $uid=session('lenovoHomeUserInfo.id');

    //     // 查询数据

    //     $addr=\DB::table("addr")->where("uid",$uid)->get();


    //     // 接收到商品数据

    //     $idArr=$request->input('goods');


    //     // 读取session

    //     $shop=session("shop");

    //     // 声明新数组

    //     $newArr=array();

    //     // 遍历购物车中所有的商品

    //     foreach ($idArr as $key => $value) {
    //         # code...

    //         foreach ($shop as $k => $v) {
    //             # code...

    //             // 判断是否用户选择的商品

    //             if ($v['id']==$value) {
    //                 # code...

    //                 $newArr[]=$v;
    //             }
    //         }
    //     }


    //     // 加载结算页面

    //     return view("home.jiesuan")->with("newShop",$newArr)->with("addr",$addr);
    // }


    //结算方法

    public function jiesuan(Request $request)
    {


    //查询到当前登录用户的id

    $uid=session('slave')->id;
    
    // 查询数据

    $addr=\DB::table("address")->where("uid",$uid)->get();

    //接收到商品数据

        $idarr = $request->input('goods');

        //声明新数组

        $newshop = array();

        if($idarr){
        foreach($idarr as $k=>$v) {
        $shop = \DB::table('cart')->where('sid',$v)->first();

        $newshop[] = $shop;
         }
        return view('home.carts.jiesuan')->with('newshop',$newshop)->with("addr",$addr);
            }

    else{

         return redirect('/home/carts')->with(['info'=>'您还没有选择任何商品!!!']);

         }
    }

}
