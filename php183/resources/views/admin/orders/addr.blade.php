@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       地址详情管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">地址详情管理</a></li>
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
                
                <tbody>
         
               <tr>
                  <td>姓名</td>
                  <td>{{$data->name}}</td>
                  </tr>
                  <tr>
                  <td>电话</td>
                  <td>{{$data->phone}}</td>
                  </tr>
                  <tr>
                  <td>所在省市</td>
                  <td>{{$data->addr}}</td>
                  </tr>
                  <tr>
                  <td>详细信息</td>
                  <td>{{$data->addinfo}}</td>
                  </tr>

                  <tr>
                  <td>邮箱</td>
                  <td>{{$data->email}}</td>
                  </tr>

               
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