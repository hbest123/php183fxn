@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        分类管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">分类管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看分类列表</h3>
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
                      <th>商品名</th>
                      <th>商品价格</th>
			                <th>商品图片</th>
			                <th>操作</th>
		                </tr>
		            </thead>
		            <tbody>
		               	@foreach($data as $key=>$val)
		                <tr class="parent">
                      <td class="ids">{{ $val->id }}</td>
                      <td class="hname">{{ $val->hname }}</td>
		                	<td class="hprice">{{ $val->hprice }}</td>
		                	<td><img style="width:40px;height:40px;" src="/uploads/hot/{{ $val->avatar }}"></td>
		                	<td><a href="{{ url('/admin/hot/') }}/{{ $val->id }}/edit">编辑</a>
                        <a class="del" href="#">删除</a>
                      </td>
                      <form style="display:none" action="{{ url('/admin/hot') }}/{{ $val->id }}" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                      </form>
                      
		                </tr>
                		@endforeach
              	</table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('js')
  	<script type="text/javascript">
      $(".del").on('click',function(){
          $(this).parent().next().submit();
      });
    </script>
@endsection