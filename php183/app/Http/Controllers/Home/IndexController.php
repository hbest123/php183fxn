<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //前台主页

    public function index()
    {

    	
    	$data = \DB::table('shuff')->select()->get();
    	

    	$adver = \DB::table('advertising')->where('status', 1)->get();
        
    	$category = \DB::table('category')->select()->get();

        $hot = \DB::table('shopping')
         -> where('stype', 1)
         -> orderBy('id')
        -> take(12)
        -> get();

        
    	//$hot = \DB::table('shopping')->where('stype',1)->get(); 

        $friendlink = \DB::table('friendlink')->select()->get();
        
    	return view('home.index.index',['data'=>$data,'adver'=>$adver,'category'=>$category,'hot'=>$hot,'friendlink'=>$friendlink]);
    }

    //前台搜索页

    public function search(Request $request)
    {
         $keywords = $request->input('keywords','');
         $shop =  \DB::table('shopping')->where('sname','like','%'.$keywords.'%')->get();
         $friendlink = \DB::table('friendlink')->select()->get();
         return view('home.list.search',['shop'=>$shop,'friendlink'=>$friendlink]);
    }
   
}
