@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       用户管理
        <small>编辑</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">用户管理</a></li>
        <li class="active">编辑</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">快速编辑</h3>
            </div>


            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{url('/admin/admins/update')}}">
              
				    {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $data->id }}">
              <div class="box-body">
              @if(session('info'))
              <div class="alert alert-danger">
                {{ session('info') }}
				</div>
				@endif
            	@if (count($errors) > 0)
   		 	<div class="alert alert-danger">
        	<ul>
           	 @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
           	 @endforeach
        </ul>
    </div>
@endif
				<div class="form-group">
                  <label for="exampleInputName">用户名</label>
                  <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="exampleInputName" placeholder="请输入用户名">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">邮箱</label>
                  <input type="email" value="{{ $data->email }}" name="email"class="form-control" id="exampleInputEmail1" placeholder="请输入邮箱">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">头像</label>
                  <input type="file" value="{{ old('avatar') }}" name="avatar" id="exampleInputFile">

                  <p class="help-block">请选择头像</p>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">更新</button>
              </div>
            </form>
          </div>

        </div>
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection