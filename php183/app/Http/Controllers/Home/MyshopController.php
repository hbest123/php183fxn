<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyshopController extends Controller
{
    //我的商城

    public function index()
    {
    	$id = session('master')->id;
    	$user = \DB::table('user')->where('id', $id)->first();
    	$userdetail = \DB::table('userdetail')->where('uid', $id)->first();
    	
    	return view('home.goods.myshop',['user'=>$user,'userdetail'=>$userdetail]);
    }

}
