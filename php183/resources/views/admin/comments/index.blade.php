@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       评论管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">评论管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速添加</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

             @if(session('info'))
              <div class="alert alert-danger">
                {{ session('info') }}
            </div>
            @endif

          
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>用户名</th>
                    <th>商品名</th>
                    <th>商品图片</th>
                    <th>内容</th>
                    <th>星级</th>
                    <th>时间</th>
                    <th>状态</th>
                </tr>
                </thead>
                <tbody>
         @foreach($data as $value)
        <tr>
          <td>{{$value->id}}</td>
          <td>{{$value->name}}</td>
          <td>{{$value->sname}}</td>
          <td><img width="100px" height="100px" src="/Uploads/shopping/{{$value->gimg}}" alt=""></td>
          <td>{{$value->text}}</td>
          <td style="color:red">{{str_repeat("★",$value->start)}}{{str_repeat('☆',5-$value->start)}}</td>
          <td >{{date("Y-m-d H:i:s",$value->time)}}</td>
          <td>

           
            @if($value->statu==0)
             未审核

            @elseif($value->statu==1)
              
              正常
            @else
             
             黑名单
            @endif

            
          </td>
        
        </tr>


      @endforeach
                <!-- Button trigger modal -->

               
                </tbody>
                
              </table>
              
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('js')

@endsection