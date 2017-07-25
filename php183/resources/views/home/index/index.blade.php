<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>魅族商城</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/css/bootstrap.min.css')}}"  type="text/css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/css/style.css')}}">
    
    
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/font-awesome/css/font-awesome.min.css')}}"  type="text/css">
    <link rel="stylesheet" href="{{asset('/home/meizu/xmeizu/fonts/font-slider.css')}}" type="text/css">
    
    <!-- jQuery and Modernizr-->
    <script src="{{asset('/home/meizu/xmeizu/js/jquery-2.1.1.js')}}"></script>
    
    <!-- Core JavaScript Files -->       
    <script src="{{asset('/home/meizu/xmeizu/js/bootstrap.min.js')}}"></script>
    
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
                        @if(session('slave'))
                        <li><a href="account.html"><span class="glyphicon glyphicon-user"></span>{{ session('slave')->name }} 你好!</a></li>
                        @endif
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
        <!--Navigation-->
    <nav id="menu" class="navbar">
        <div class="container">
            <div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
              <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home/index') }}">主页</a></li>
                    @foreach($category as $key=>$val)
                    <li class="dropdown">
                    <a href="{{ url('/home/list') }}/{{ $val->id }}" class="dropdown-toggle" data-toggle="dropdown">@if($val->pid==0) {{$val->name}} @endif</a>
                        @php
                            $res = \DB::table('category')->where('pid',$val->id)->get();
                        @endphp
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    @foreach($res as $k=>$v)
                                    <li><a href="{{ url('/home/list') }}/{{ $v->id }}">{{ $v->name }}</a></li>
                                    @endforeach 
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    </header>
    
    <!--//////////////////////////////////////////////////-->
    <!--///////////////////HomePage///////////////////////-->
    <!--///////////////////轮播图////////////////////////////-->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
    <div id="page-content" class="home-page">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12">
                    <!-- Carousel -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators hidden-xs">
                            @foreach($data as $key=>$val)
                            <li data-target="#carousel-example-generic" data-slide-to="$key" class="@if($key== 0) active  @endif"></li>
                            @endforeach
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @foreach($data as $key=>$val)
                            <div class="item @if($key== 0) active  @endif">
                                <img style="width:1430px;height:490px;" src="/uploads/hot/{{ $val->avatar }}" alt="First slide">
                                <!-- Static Header -->
                                <div class="header-text hidden-xs">
                                    <div class="col-md-12 text-center">
                                    </div>
                                </div><!-- /header-text -->
                            </div>
                            @endforeach
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div><!-- /carousel -->
                </div>

            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading"><h2><a href="{{ url('/home/category') }}">热门推荐</a></h2></div>
                    <div>
                        @foreach($hot as $key=>$val)
                       
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product" style="border:solid 1px #f0f0f0">
                                <div class="image">
                                <table border='0' style="width:230px;height:230px;">

                                <tr><td align="center">
                                    <a href="{{ url('/home/detail') }}/{{ $val->id }}"><img style="width:200px;height:200px;" src="/uploads/shopping/{{ $val->avatar }}" /></a>
                                   </td> 
                                </tr>

                                <tr>
                                <td align="center"><font color="red">{{ $val->sname}}</font></td>
                                </tr>
                                </table>

                              

                                </div>

                               
                            </div>
                             <br>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

       
            <div class="row">
                
                     @foreach($adver as $key=>$val)
                    <div class="col-sm-4">
                    
                        <img src="/uploads/shopping/{{ $val->avatar }}" />
                    
            </div>
             @endforeach


        </div>

         <hr/><br/><br/>
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
