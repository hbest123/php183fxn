@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       订单管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">订单管理</a></li>
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
                    <th>订单号</th>
                    <th>用户</th>
                    <th>收货人信息</th>
                    <th>状态</th>
                    <th>下单时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
          @foreach($data as $key=>$value)
               <tr>
            <td><a href="/admin/order/list?code={{$value->code}}">{{$value->code}}</a></td>
            <td>{{$value->name}}</td>
          <td>
          <a href="/admin/order/addr?aid={{$value->aid}}">收货人信息</a>
          </td>
         <td>{{$value->ssname}}</td>
          <td>{{date('Y-m-d H:i:s',$value->time)}}</td>

        <td>
         @if($value->sid==4)
            <a href="javascript:;">已完成订单不能修改</a>
          @else
           <a href="/admin/status/edit?sid={{$value->sid}}&code={{$value->code}}">修改状态</a>
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