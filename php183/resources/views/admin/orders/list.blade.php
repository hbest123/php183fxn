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
                    <th>商品名</th>
                    <th>商品图片</th>
                    <th>购买价格</th>
                    <th>购买数量</th>
                    <th>小计</th>
                </tr>
                </thead>
                <tbody>
         <?php 

              $number=0;
              $money=0;
              ?>
              @foreach($data as $value)
              <tr>
                  <td>{{$value->sname}}</td>
                  <td>
                       <img width="100px" height="100px" src="/Uploads/shopping/{{$value->avatar}}" alt="">
                  </td>
                  <td>{{$value->price}}</td>
                  <td>{{$value->num}}</td>
                  <td>{{$value->price*$value->num}}</td>
                 <?php 
                 $number+=$value->num;

                $money+=$value->price*$value->num;
                 ?>
              </tr>


              @endforeach

      <tr>
        <td>合计</td>
        <td>价格：</td>
        <td>{{$money}}</td>
        <td>数量：</td>
        <td>{{$number}}</td>
      </tr>

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