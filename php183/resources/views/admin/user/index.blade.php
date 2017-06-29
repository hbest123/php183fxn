@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       用户管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">用户管理</a></li>
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
            <form action="{{url('/admin/user/index')}}" method="get">
            <div class ="row">
            <div class="col-md-2">
            <!-- select -->
				<div class="form-group">
                 
                  <select class="form-control" name="num">
                    <option value="10"
					@if(!empty($request['num']) && $request['num']=='10')
						selected="selected" 
					@endif
                    >10</option>
                    <option value="20"
					@if(!empty($request['num']) && $request['num']=='20')
						selected="selected" 
					@endif
                    >20</option>
                    <option value="30"
					@if(!empty($request['num']) && $request['num']=='30')
						selected="selected" 
					@endif
                    >30</option>
                    <option value="40"
					@if(!empty($request['num']) && $request['num']=='40')
						selected="selected" 
					@endif
                    >40</option>
                    <option value="50"
					@if(!empty($request['num']) && $request['num']=='50')
						selected="selected" 
					@endif
                    >50</option>
                  </select>
                </div>
                </div>
                <div class="col-md-4 col-md-offset-6">

                 <div class="input-group input-group">
                <input name="keywords" value="{{$request['keywords'] or '' }}" type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">搜索</button>
                    </span>
                    </div>
              </div>
              </div>
              </form>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>用户名</th>
                  <th>邮箱</th>
                  <th>头像</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{$val->id}}</td>
                  <td class="name">{{$val->name}}</td>
                  <td>{{$val->email}}</td>
                  <td><img style ="width:50px" height:"50px" src="/uploads/avatar/{{$val->avatar}}"/></td>
                  <td>编辑|删除</td>
                </tr>
                @endforeach
                </tbody>
                
              </table>

              {{ $data->appends($request)->links() }}
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

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".name").on('dblclick',function(){
//获取id

var id = $(this).parent('.parent').find('.ids').html();
//alert(id);
//获取原来的值

var oldName = $(this).html();
var inp = $("<input type='text'>");
inp.val(oldName);
$(this).html(inp);

 inp.on('blur',function(){
//执行ajax
var newName = inp.val();
 	$.ajax('/admin/user/ajaxrename',{

 		//失去焦点时获取新的用户名


		type:'POST',
		data:{id:id,name:newName},
		success:function(data){
			
			if(data=='0')
			{
				alert('用户名已存在');
			}
		},
		error:function(data){
			
			alert('数据异常');
		},
		dataType:'json'
});

 });
 
});
</script>

@endsection