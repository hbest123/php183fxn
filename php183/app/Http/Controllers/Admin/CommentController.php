<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    // 评论首页

    public function index(Request $request){

        // 多表查询

        $data=\DB::table("comment")
            ->select("comment.*","shopping.sname",'shopping.avatar as gimg',"user.name")
            ->join("user","user.id",'=','comment.uid')
            ->join("shopping","shopping.id",'=','comment.gid')
            ->get();

        // 加载页面

        return view("admin.comments.index",['title'=>'评论列表'])->with("data",$data);
    }




}
