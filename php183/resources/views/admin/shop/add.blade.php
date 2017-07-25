@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品管理
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品管理</a></li>
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
              <h3 class="box-title">快速添加</h3>
            </div>
            

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="post" action="{{ url('/admin/shop') }}" >
              {{csrf_field()}}
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
                  <label for="exampleInputName">商品名</label>
                  <input type="text" name="sname" value="" class="form-control" id="exampleInputName" placeholder="请输入商品名">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputName">商品价格</label>
                  <input type="text" name="price" value="" class="form-control" id="exampleInputName" placeholder="请输入商品价格">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">商品图片</label>
                  <input type="file" name="avatar" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">商品内存</label>
                  <input type="text" name="store" value="" class="form-control" id="exampleInputName" placeholder="请输入商品内存">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">商品颜色</label>
                  <input type="text" name="color" value="" class="form-control" id="exampleInputName" placeholder="请输入商品颜色">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">父分类</label>
                  <select name="pid" class="form-control">
                    
                    @foreach($data as $key => $val)
                    <option 

                    @if($val->pid == 0)

                    disabled="disabled"

                    @endif
                    value="{{ $val->id }}">{{ $val->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputName">商品类型</label>
                  <select name="stype" class="form-control">
                    <option selected value="0">正常</option>
                   
                    <option value="1">热销</option>

                    <option value="2">下架</option>
                  
                  </select>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
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