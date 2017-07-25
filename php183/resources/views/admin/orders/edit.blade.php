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
        <li><a href="#">订单状态管理</a></li>
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

          
       <div class="panel-body">
      <form action="" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <label for="">订单号</label>
          <input class="form-control" type="text" name="" value="{{$_GET['code']}}" id="">
        </div>

        <div class="form-group">
          <label for="">订单状态</label>
          <select class="form-control"  name="sid" id="">
            @foreach($data as $value)
              @if($_GET['sid']==$value->id)
                <option selected value="{{$value->id}}">{{$value->name}}</option>
              @else
                <option value="{{$value->id}}">{{$value->name}}</option>

              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success" value="提交">
        </div>
      </form>
    </div>
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