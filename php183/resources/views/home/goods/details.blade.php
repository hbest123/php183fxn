<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Mobile Shop</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('/home/meizu/xmeizu/css/bootstrap.min.css') }}"  type="text/css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/home/meizu/xmeizu/css/style.css') }}">
    
    
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('/home/meizu/xmeizu/font-awesome/css/font-awesome.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('/home/meizu/xmeizu/fonts/font-slider.css') }}" type="text/css">
    
    <!-- jQuery and Modernizr-->
    <script src="{{ asset('/home/meizu/xmeizu/js/jquery-2.1.1.js') }}"></script>
    
    <!-- Core JavaScript Files -->       
    <script src="{{ asset('/home/meizu/xmeizu/js/bootstrap.min.js') }}"></script>
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="{{ asset('/home/meizu/xmeizu/css/ShopShow.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('/home/meizu/xmeizu/css/MagicZoom.css') }}" type="text/css" />
<script src="{{ asset('/home/meizu/xmeizu/js/MagicZoom.js') }}" type="text/javascript"></script>

</head>
<body>
    <!--Top-->
    <nav id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                </div>
                <div class="col-xs-6">
                    <ul class="top-link">
                        <li><a href="account.html"><span class="glyphicon glyphicon-user"></span>个人中心</a></li>
                        <li><a href="contact.html"><span class="glyphicon glyphicon-envelope"></span>联系我们</a></li>
                        <li><a class="" href="{{ asset('/home/carts') }}"><img src="{{ asset('/home/meizu/xmeizu/images/carts.png')}}" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--Header-->
    <header class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="logo"><img src="{{ asset('/home/meizu/images/meizu.png')}}" /></div>
            </div>
           <div class="col-md-4">
                <form class="form" action="{{url('/home/search')}}" method="get">  
                    <input type="text" name = "keywords" class="input-medium search-query" placeholder="搜索商品">  
                    <button type="submit" class="">搜索</button>  
                </form>
            </div>
            
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ asset('/home/index')}}">主页</a></li>
                        <li><a href="#">热销商品</a></li>
                        <li><a href="#">详情</a></li>
                    </ul>
                </div>
            </div>
    </header>
    
    <!--//////////////////////////////////////////////////-->
    <!--///////////////////Product Page///////////////////-->
    <!--//////////////////////////////////////////////////-->
    <div id="page-content" class="single-page">
        <div class="container">
            
            <div class="row">
                <div id="main-content" class="col-md-12">
                    <div class="product">
                        <div class="col-md-3">
                          <div id="tsShopContainer">
                         <div id="tsImgS"><a href="/uploads/shopping/{{ $shop->avatar }}" title="Images" class="MagicZoom" id="MagicZoom"><img width="300" height="300" src="/uploads/shopping/{{ $shop->avatar }}" /></a></div>
                         <div id="tsPicContainer">
                        <div id="tsImgSArrL" onclick="tsScrollArrLeft()"></div>
                        <div id="tsImgSCon">
                <ul>
                    <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="/uploads/shopping/{{ $shop->avatar }}" tsImgS="/uploads/shopping/{{ $shop->avatar }}" /></li>
                    <li onclick="showPic(1)" rel="MagicZoom"><img height="42" width="42" src="/uploads/shopping/{{ $shop->avatar }}" tsImgS="/uploads/shopping/{{ $shop->avatar }}" /></li>
                    <li onclick="showPic(2)" rel="MagicZoom"><img height="42" width="42" src="/uploads/shopping/{{ $shop->avatar }}" tsImgS="/uploads/shopping/{{ $shop->avatar }}" /></li>
                    <li onclick="showPic(3)" rel="MagicZoom"><img height="42" width="42" src="/uploads/shopping/{{ $shop->avatar }}" tsImgS="/uploads/shopping/{{ $shop->avatar }}" /></li>
                    
                
            </ul>
        </div>
        <div id="tsImgSArrR" onclick="tsScrollArrRight()"></div>
    </div>
    <img class="MagicZoomLoading" width="16" height="16" src="images/loading.gif" alt="Loading..." />
</div>
                        </div>
                        <div class="col-md-9 text-center" >
                             <div class="caption">                               
                                <div class="name">
                                商品名称:&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ $shop->sname }}</span>
                                </div><br/>
                                <div class="info">
                                                        
                                型号:&nbsp;&nbsp;&nbsp;&nbsp;<span>魅蓝A5</span><br/>                                    
                               

                                </div>
                                
                                <div class="net">
                                 网络类型:&nbsp;&nbsp;&nbsp;&nbsp;<span>全网通公开版</span><br/>
                                </div>

                                <br/><hr>
                                <div class="prices">
                                价格:&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ $shop->price }}</span><br/>
                                </div>
                                <div class="color">
                                  颜色:&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ $shop->color }}</span><br/>
                                </div>
                               
                                <div class="counts">数量:&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="count" style="width:30px" type="text" value="1">
                                <input type="hidden" name="sid"  value="{{$shop->id}}">
                               
                                <input type="hidden" name="ximg"  value="{{$shop->avatar}}">
                                </div><br/>
                                <button class="carts"><font size="3" color="red">加入购物车</font></button>             
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>  
                    <div class="product-desc">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#description">描述</a></li>
                            <li><a href="#review">评论</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in active">
                                <h4>商品规格</h4>
                                <table class="standard-table">
                            <tbody>
                                    
                                        <tr>
                                            <th>
                                            品牌
                                            </th>
                                            <td>
                                            {{ $shop->sname }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            型号
                                            </th>
                                            <td>
                                            魅蓝 Note5
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            网络类型
                                            </th>
                                            <td>
                                            全网通公开版
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            价格
                                            </th>
                                            <td>
                                            {{ $shop->price }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                            颜色
                                            </th>
                                            <td>
                                           {{ $shop->color }}
                                            </td>
                                        </tr>
                                     
                            </tbody>
                        </table>
                                <div class="row">
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang1.jpg') }}" />
                                    </div>
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang2.jpg') }}" />
                                    </div>
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang3.png') }}" />
                                    </div>
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang4.png') }}" />
                                    </div>
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang5.png') }}" />
                                    </div>
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang6.png') }}" />
                                    </div>
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang7.png') }}" />
                                    </div>                                   
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang8.png') }}" />
                                    </div>
                                    <div  class="col-md-12">
                                    <img src="{{ asset('/home/meizu/xmeizu/images/xiang/xiang9.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div id="review" class="tab-pane fade">
                              <div class="review-text">
                                <p>买家评论</p>
                              </div>
                              <div class="review-form">
                                <h4>写评论</h4>
                                <form name="form1" id="ff" method="post" action="review.php">
                                    <label>
                                    <span>顾客昵称</span>
                                    <input type="text"  name="name" id="name" required>
                                    </label>
                                    <label>
                                    <span>评价内容</span>
                                    <textarea name="message" id="message"></textarea>
                                    </label>
                                    <div class="text-right">
                                        <input class="btn btn-default" type="reset" name="reset" value="重置">
                                        <input class="btn btn-default" type="submit" name="Submit" value="提交">
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>  
   <footer>
        <div class="container">
            <div class="wrap-footer">
                <div class="row">
                   
                    <div class="col-md-3 col-footer footer-2">
                        <div class="heading"><h4>消费者服务</h4></div>
                         @foreach($friendlink as $key=>$val)
                        <ul>
                            <li><a href="{{ $val->address }}">{{ $val->advername }}</a></li>
                        </ul>
                         @endforeach
                    </div>
                   
                    <div class="col-md-3 col-footer footer-4">
                        <div class="heading"><h4>联系我们</h4></div>
                        <ul>
                            <li><span class="glyphicon glyphicon-home"></span>California, United States 3000009</li>
                            <li><span class="glyphicon glyphicon-earphone"></span>电话+91 8866888111</li>
                            <li><span class="glyphicon glyphicon-envelope"></span>邮箱@yoursite.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/"></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    
    <!-- IMG-thumb -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script src="{{ asset('/home/meizu/xmeizu/js/ShopShow.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
        $('.nav-tabs a').on('shown.bs.tab', function(event){
            var x = $(event.target).text();         // active tab
            var y = $(event.relatedTarget).text();  // previous tab
            $(".act span").text(x);
            $(".prev span").text(y);
        });
    });
    </script>


     <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    

$('.carts').on('click',function(){

    //获取商品信息

    var name=$(this).parent().find('.name').find('span').html();

    var type=$(".info").find('span').html();

    var net =$(".net").find('span').html();

    var price =$(".prices").find('span').html();

    var color = $(".color").find("span").html();

    var count = $(".count").val();

    var sid=$("input[name=sid]").val();
    var avatar=$("input[name=ximg]").val();


    //alert(counts);
    $.ajax('/home/detail/carts',{
        type:'post',
        data:{name:name,uid:1,sid:sid,avatar:avatar,ptype:type,ntype:net,count:count,price:price,color:color},
        
        success:function(data)
        {
            if(data=='1')
            {
                alert("加入购物车成功");
                
                window.location.href="/home/carts";
            }else{
                alert("加入失败");
            }
        },

        error:function(data)
        {
            alert('数据异常');
        },
        
        dataType:'json'
    });
});
    </script>
</body>
</html>
