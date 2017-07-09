<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="欢迎登录和注册魅族账号，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。">
    <meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账号  MX M9 MX2">
    <meta content="width=1080" name="viewport">
    <title>账号管理</title>
    <link href="{{ asset('/home/meizu/css/base.css') }}" type="text/css" rel="Stylesheet">
    <link href="{{ asset('/home/meizu/css/head.css') }}" type="text/css" rel="Stylesheet">
    <link href="{{ asset('/home/meizu/css/cycode.css') }}" rel="stylesheet">
    <link href="{{ asset('/home/meizu/css/actmanage.css') }}" type="text/css" rel="Stylesheet">
<script type="text/javascript" src="{{ asset('/home/meizu/js/flow.js') }}"></script><script type="text/javascript">
    var ReceiveEmail = '';
    var isHit = '';
    var isBindPhone = true;
    var isBindEmail = false;
</script>
</head>
<body style="min-height: 848px;">
    <div id="content" class="content">
    
<input id="mz_csrf_tks" value="" type="hidden">
<div id="header-top" class="headWrap">
    <a href="http://www.meizu.com/index.html" class="headLogo"><i class="i_icon"></i></a>
    <ul class="headLeft">
        <li class="head-store">
            <a href="http://store.meizu.com/" class="" hidefocus=""><i class="i_icon"></i></a>
        </li>
        <li class="head-products">
            <a href="http://www.meizu.com/products/pro5/summary.html" class="" hidefocus=""><i class="i_icon"></i></a>
        </li>
        <li class="head-retail">
            <a href="http://retail.meizu.com/" class="" hidefocus=""><i class="i_icon"></i></a>
        </li>
        <li class="head-flyme">
            <a href="http://www.flyme.cn/" class="" hidefocus=""><i class="i_icon"></i></a>
        </li>
        <li class="head-services">
            <a href="http://service.meizu.com/" class="" hidefocus=""><i class="i_icon"></i></a>
        </li>
        <li class="head-bbs">
            <a href="http://bbs.meizu.cn/" class="" hidefocus=""><i class="i_icon"></i></a>
        </li>
    </ul>

    <div class="headRight">
        <span id="loginWrap" style="">
            <a id="head-name" class="linkAGray" href="https://i.flyme.cn/uc/webjsp/member/detail" title="用户571954172">用户571954172</a>
            <span id="show-msg-pub" class="none">1</span>
            <span class="line_head">|</span>
            <a id="head-logout" class="linkAGray" href="javascript:window.location.href%20=%20'https://login.flyme.cn/sso/logout?useruri='+encodeURIComponent(window.location.href);">退出</a>
        
        </span>

        <!--密码风险提示-->
        <div id="show-psw-tip" class="none">
            <div class="tip-content">
                <div class="tip-span-msg">当前密码风险较高，请尽快修改密码</div>
                <div class="tip-cancel"></div>
            </div>
        </div>

        <span id="unloginWrap" style="display:none;">
            <a href="javascript:window.location.href%20=%20'https://login.flyme.cn/sso/logout?useruri='+encodeURIComponent(window.location.href);" class="head-name">登录</a>
            <span class="line_head">|</span>
            <a href="https://i.flyme.cn/register" class="head-logout">注册</a>
        </span>
    </div>
</div>

        <div class="flymeContent">
            

<style type="text/css">
    .navWrap{
        height: 58px;
        border-bottom: #e4e7e9 1px solid;
    }
    .navWrap .nav{
        display: block;
        float: left;
        line-height: 58px;
    }
    .navWrap .nav li{
        position: relative;
        display: inline-block;
        margin-right: 40px;
        width: 100px;
        height: 100%;
        float: left;
    }
    .navWrap .nav li a{
        display: inline-block;
        width: 100%;
        height: 56px;
        font-size: 16px;
        text-align: center;
    }
    .navWrap .nav .current{
        margin: 0px auto;
        height: 2px;
        width: 100px;
        overflow: hidden;
        background-color: #1daeed;
    }
</style>
<div id="navWrap" class="navWrap">
    <ul class="nav">
        <li id="accountManage"><a href="https://i.flyme.cn/uc/webjsp/member/detail" class="linkABlue">账号管理</a><div class="current"></div></li>
        <li id="contact"><a href="https://pay.meizu.com/meibi/account" class="linkAGray">魅币</a></li>
    </ul>
</div>
<div class="clear"></div>

            <div class="topWrap">
                

                
                <div class="top-rightWrap">
                    <div id="nickNameTitle" class="lineWrap nickname">
                        <label id="nickName">
                        用户571954172
                        </label>
                        <a id="nickNameEdite" class="pointer modify"><i class="i_icon"></i></a>

                    </div>
                  
                   
                    <div id="setUserNameWrap" class="lineWrap grayTip ftop">
                        修改昵称
                    </div>
                    <div id="setaccount" class="modify_content">
                        <form role="form" enctype="multipart/form-data" method="post" action="{{url('/home/person/update')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="uid" value="{{ $data->id }}">

                        <div>
                            <div class="normalInput">
                                <input name="nickname" id="flyme" class="username" maxlength="32" placeholder="请输入昵称" value="{{ $data->nickname }}"type="text">
                                
                            </div><div class="clear"></div>
                            <label class="flymeTip">账号保存后不可修改</label>
                        </div>

                        <div id="setUserNameWrap" class="lineWrap grayTip ftop">
                       修改头像
                    </div>
                    <div class="clear"></div>

                    <div>
                        <img style ="width:50px" height:"50px" src="/uploads/avatar/{{$data->avatar}}"/>

                    <input name="avatar" id="flyme"  maxlength="40" placeholder="头像" type="file">
                                
                    <div class="clear"></div>
                            
                    </div>


                        <div>
                            <div id="setUserNameWrap" class="lineWrap grayTip ftop">
                           修改手机号
                        </div>
                            <div class="normalInput">
                            
                                <input name="phone" id="flyme" class="username" maxlength="32" placeholder="请输入手机号" type="text" value="{{ $data->phone }}">
                                
                            </div><div class="clear"></div>
                            
                        </div>
                    <div class="fBtnleft">
                    <button  type="submit">修改</button>
                    <button  type="reset">取消</button>
                     
                    <div class="clear"></div>
                    </div>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="mainWrap">




                <div class="titleWrap grayBorderB grayBorderTop">
                    <div class="title-leftWrap">
                        <span>账号安全</span>
                    </div>
                    <div class="title-rightWrap">
                        <span>安全等级：</span>
                        <span id="safeLevel" class="orange">50</span>
                        <a id="safeLevelTip" class="pointer"><i class="i_icon"></i></a>
                    </div>
                    <div class="clear"></div>
                </div>

                 <!--修改邮箱-->           
                    <div id="changePasswordWrap" class="grayBorderB modify_content">
                        <div class="cEmail-titleWrap">
                            <span>修改邮箱</span>
                        </div>
                       <form role="form" enctype="multipart/form-data" method="post" action="{{url('/home/person/eupdate')}}">
                            {{ csrf_field() }}

                            <input type="hidden" name="id" value="{{ $data1->id }}">
                            <div class="lineWrap">
                                
                                <div class="normalInput">
                                    <input name="email" id="ce-u-new_pwd1" maxlength="16" autocomplete="off" type="email" value="{{ $data1->email }}">
                                    
                                    <a id="pwdBtn" class="pwdBtnShow noselect" onselectstart="return false">
                                        <i class="i_icon"></i>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="fBtnleft">
                    <button  type="submit">修改</button>
                    <button  type="reset">取消</button>
                     
                    <div class="clear"></div>
                    </div>
                        </form>
                    </div>
                <!--修改密码-->           
                    <div id="changePasswordWrap" class="grayBorderB modify_content">
                        <div class="cEmail-titleWrap">
                            <span>修改密码</span>
                        </div>
                        <form role="form" enctype="multipart/form-data" method="post" action="{{url('/home/person/pupdate')}}">

                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $data1->id }}">
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">原密码</label>
                                </div>
                                <input value="" name="password1" id="ce-u-current_pwd" class="normalInput" maxlength="16" type="password">
                            </div>
                            <div class="lineWrap">
                                <div class="leftWrap">
                                    <label class="leftLabel">新密码</label>
                                </div>
                                <div class="normalInput">
                                    <input name="newpassword" id="ce-u-new_pwd1" maxlength="16" autocomplete="off" type="password">
                                    
                                    <a id="pwdBtn" class="pwdBtnShow noselect" onselectstart="return false">
                                        <i class="i_icon"></i>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                           <div class="fBtnleft">
                    <button  type="submit">修改</button>
                    <button  type="reset">取消</button>
                     
                    <div class="clear"></div>
                    </div>
                        </form>
                    </div>
            </div>
           
</div>
    

<div id="flymeFooter" class="footerWrap" style="top: 1200px;">
    <div class="footerInner">
        <div class="footer-layer1">
            <div class="footer-innerLink">
                <a href="http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a>
                <img class="foot-line" src="person_files/space.gif">
                <a href="http://hr.meizu.com/" target="_blank" title="工作机会">工作机会</a>
                <img class="foot-line" src="person_files/space.gif">
                <a href="http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a>
                <img class="foot-line" src="person_files/space.gif">
                <a href="http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a>
                <img class="foot-line" src="person_files/space.gif">
                
                <div href="javascript:void(0);" id="globalName" class="footer-language" title="简体中文">
                    简体中文&nbsp;&nbsp;&nbsp;
                    <div id="globalContainer" class="footer-language_menu" style="left: 469px;">
                        <a href="https://i.flyme.cn/uc/webjsp/member/detail?lang=en_US" id="i18n-link" title="English" class="ClobalItem">English</a>
                        <script>
                            ;(function() {
                                var u = decodeURIComponent(location.href)
                                var r = /lang=([^&\s]+)/
                                var lowB = !('addEventListener' in window)
                                var addEvent = lowB ? window.attachEvent : window.addEventListener

                                if(r.test(u)) u = u.replace(r, 'lang=en_US')
                                else u += (~u.indexOf('?') ? '&' : '?') + 'lang=en_US'

                                addEvent(lowB ? 'onload' : 'load', function() {document.getElementById('i18n-link').setAttribute('href',u)})
                            }());
                        </script>
                    </div>
                </div>
            </div>
            <div class="footer-service">
                <span class="service-label">客服热线</span>
                <span class="service-num">400-788-3333</span>
                <a id="service-online" class="service-online" href="javascript:void(0);" title="在线客服">在线客服</a>
            </div>
            <div class="footer-outerLink">
                <a class="footer-sinaMblog" href="http://weibo.com/meizumobile" target="_blank"><i class="i_icon"></i></a>
                
                <a id="footer-weChat" class="footer-weChat" href="javascript:void(0);" target="_blank"><i class="i_icon"></i></a>
                <a class="footer-qzone" href="http://user.qzone.qq.com/2762957059" target="_blank"><i class="i_icon"></i></a>
            </div>
        </div>
        <div class="clear"></div>
        <div id="flymeCopyright" class="copyrightWrap">
            <div class="copyrightInner">
                <span>©2017 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span>
                <a href="http://www.miitbeian.gov.cn/" class="linkAGray" target="_blank">备案号: 粤ICP备13003602号-4</a>
                <a href="http://www3.res.meizu.com/static/cn/widget/footer/images/icp2_b2dcb54.jpg" class="linkAGray" target="_blank">经营许可证编号: 粤B2-20130198</a>
                <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true" class="linkAGray">营业执照</a>
            </div>
        </div>
    </div>
</div>


</body></html>