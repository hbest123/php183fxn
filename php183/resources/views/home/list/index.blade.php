<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>魅族商城-列表页</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/css/bootstrap.min.css') }}"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/css/style.css') }}">
	
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/font-awesome/css/font-awesome.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/fonts/font-slider.css" type="text/css') }}">
	
	<!-- jQuery and Modernizr-->
	<script src="{{asset('/home/meizu/xmeizu/js/jquery-2.1.1.js') }}"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="{{asset('/home/meizu/xmeizu/js/bootstrap.min.js') }}"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
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
                <form class="form" action="{{url('/home/list')}}/{{ $tid }}" method="get">  
                    <input type="text" name = "keywords" class="input-medium search-query" placeholder="搜索商品">  
                    <button type="submit" class="">搜索</button>  
                </form>
            </div>
            
        </div>
    </header>
    <div class="container">
    <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ asset('/home/index') }}">主页</a></li>
                        <li><a href="#">商品列表</a></li>
                    </ul>
                </div>
            </div>
    </div>
	<div id="page-content" class="single-page">
		<div class="container">
			
			<div class="row">
                <div id="main-content" class="col-md-12">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="products">
                             @foreach($shop as $ke=>$va)
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="product" style="border:solid 1px #f0f0f0">
                                        <div class="image"><a href="{{ asset('/home/detail') }}/{{ $va->id }}"><img src="/uploads/shopping/{{ $va->avatar }}" /></a></div>
                                        <div class="">
                                            {{ $va->sname }}
                                        </div>
                                        <div class="caption">
                                            
                                            <div class="price">{{ $va->price }}元</div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                                @endforeach
                            </div>
                        </div>
                    </div>
                  
                </div>
               
            </div>
		</div>
        <center>
       {{ $shop->appends($request)->links() }}
       </center>  
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
</body>
</html>
