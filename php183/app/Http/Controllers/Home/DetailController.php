<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    //商品详情页
	public function index($id)
	{
    
    $category = \DB::table('category')->select()->get();

	$shop = \DB::table('shopping')->where('id',$id)->first();

	
	$friendlink = \DB::table('friendlink')->select()->get();
	//dd($data);
    return view('home.goods.details',['shop'=>$shop,'category'=>$category,'friendlink'=>$friendlink]);

							
	}

	//执行加入购物车操作

	public function carts(Request $request)
	{
		//获取数据
		 $data = $request->all();
		// dd($data);
		 $sid = \DB::table('cart')->where('sid',$data['sid'])->first();

		 if($sid)
		 {
		 	$sid->count = $sid->count + $data['count'];

		 	$res = \DB::table('cart')->where('sid', $data['sid'])->update(['count' => $sid->count]);
		 }

		 else{
		 $res = \DB::table('cart')->insert($data);

		}

		  if($res)
        {

            return response()->json(1); 
        }else
        {
            return response()->json(2);
        }
	}
}
