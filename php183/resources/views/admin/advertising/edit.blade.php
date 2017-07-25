@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        广告管理
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">广告管理</a></li>
        <li class="active">添加</li>
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
            <form role="form" enctype="multipart/form-data" method="post" action="{{url('/admin/advertising')}}/{{ $data->id }}" >
              {{csrf_field()}}
              {{ method_field("PATCH") }}
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
                  <label for="exampleInputName">广告主题</label>
                  <input type="text" name="title" value="{{ $data->title}}" class="form-control" id="exampleInputName" placeholder="请输入广告主题">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">内容描述</label>
                  <input type="text" name="content" value="{{ $data->content}}" class="form-control" id="exampleInputName" placeholder="请输入广告描述">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">图片描述</label>
                  <input type="file" name="avatar" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">位置</label>
                  <select name="status" class="form-control">
                   
                    <option value="1">主页小广告</option>
                    <option value="2">详情页</option>
                    <option value="3">注册页</option>
                  </select>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">编辑</button>
                </div>
            </form>
          </div>
          <!-- /.box --> 
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection