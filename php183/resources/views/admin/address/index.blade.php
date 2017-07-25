@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       收货地址管理
        <small>地址列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">收货地址管理</a></li>
        <li class="active">地址列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          
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
                  <th>收货人</th>
                  <th>收货地址</th>
                  <th>联系方式</th>
                  <th>收货时间</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{$val->id}}</td>
                  <td class="name">{{$val->receive}}</td>
                  <td>{{$val->location}}</td>
                  <td>{{$val->phone}}</td>
                  <td>{{$val->created_at}}</td>
                </tr>

                <!-- Button trigger modal -->

                @endforeach
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

<script type="text/javascript">


</script>

@endsection