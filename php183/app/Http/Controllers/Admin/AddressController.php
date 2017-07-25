<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    //收货地址列表

    public function index()
    {	
    	


        //查询数据库
        $data = \DB::table('address')->get();
      
        
    	return view('admin.address.index',['data'=>$data,'title'=>'收货列表']);
    }
}
