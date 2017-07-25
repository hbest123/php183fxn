<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index(Request $request,$id)
    {
    	$data = \DB::table('shuff')->select()->get();
    	
        $tid = $id;
    	$adver = \DB::table('advertising')->where('status', 1)->get();
        
        $friendlink = \DB::table('friendlink')->select()->get();

        //分页功能
        $num = $request->input('num',3);
        $keywords = $request->input('keywords','');

        //查询数据库
       $shop =  \DB::table('shopping')->where('tid',$id)->where('price','like','%'.$keywords.'%')->paginate($num);
        
    	return view('home.list.index',['request' => $request->all(),'data'=>$data,'shop'=>$shop,'adver'=>$adver,'friendlink'=>$friendlink,'tid'=>$tid]);
    }
}
