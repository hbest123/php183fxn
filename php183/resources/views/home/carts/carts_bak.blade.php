<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>魅族购物车页面</title>
<link href="{{ asset('/home/meizu/css/myCart.css') }}" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{{ asset('/home/meizu/js/myCart.js') }}"></script>
<script src="{{ asset('/home/meizu/xmeizu/js/jquery-2.1.1.js') }}"></script>
</head>

<body>


<div id="content">
 <table width="100%" border="0" cellspacing="0" cellpadding="0" id="shopping">
 <form action="{{ url('/home/carts/reorder') }}" method="post" name="myform">
 {{ csrf_field() }}
  <tr>
    <td class="title_1"><input id="allCheckBox" type="checkbox" value="" onclick="selectAll()" />全选</td>
    <td class="title_2" colspan="2">店铺宝贝</td>
    <td class="title_3">获积分</td>
    <td class="title_4">单价（元）</td>
    <td class="title_5">数量</td>
    <td class="title_6">小计（元）</td>
    <td class="title_7">操作</td>
  </tr>
  <tr>
    <td colspan="8" class="line"></td>
  </tr>
 @foreach($good as $key=>$val)
   <tr id="product1">
    <td class="cart_td_1"><input name="cartCheckBox" type="checkbox" value="product1" onclick="selectSingle()" /></td>
    <td class="cart_td_2"><img src="{{ asset('/home/meizu/images/cart1.jpg') }}" alt="shopping"/></td>
    <td class="cart_td_3"><a href="#">{{ $val->name }}</a><br/>
        颜色：{{ $val-> color}}<br/>
        {{ $val-> ptype}}
        {{ $val-> ntype}} <br/>
        保障：<img src="{{ asset('/home/meizu/images/taobao_icon_01.jpg') }}" alt="icon" /></td>
    <td class="cart_td_4">5</td>
    <td class="cart_td_5">{{ $val-> price}}</td>

    <td class="cart_td_6"><img class = "minus" src="{{ asset('/home/meizu/images/taobao_minus.jpg') }}" alt="minus" onclick="changeNum('num_1','minus')" class="hand"/> <input id="num_1" type="text"  value="1" class="num_input" readonly="readonly"/>
     <img src="{{ asset('/home/meizu/images/taobao_adding.jpg') }}" alt="add" onclick="changeNum('num_1','add')"  class="hand"/></td>
    <td class="cart_td_7">11</td>
    <td class="cart_td_8"><a href="javascript:deleteRow('product1');">删除</a></td>
  </tr>
  @endforeach
   <tr>
   <td  colspan="3"><a href="javascript:deleteSelectRow()"><img src="{{ asset('/home/meizu/images/taobao_del.jpg') }}" alt="delete"/></a></td>
    <td colspan="5" class="shopend">商品总价（不含运费）：<label id="total" class="yellow"></label> 元<br />
    可获积分 <label class="yellow" id="integral"></label> 点<br />
    <input name=" " type="image" src="{{ asset('/home/meizu/images/jiesuan.png') }}" /></td>
  </tr>
  </form>
</table>
<div style="text-align:center;">

</div>
</div>

<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


</script>
</body>
</html>
