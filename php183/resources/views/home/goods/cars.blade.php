<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>购物车-我的购物车</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="购物车，我的购物车">
    <meta name="Keywords" content="魅族手机官网商城、魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="/home/homelte/mei/index_files/css/layout-51312a08ab.css">

    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link href="/home/homelte/mei/index_files/css/cart-a5ee4bd832.css" rel="stylesheet">
</head>
<body>
<script charset="utf-8" src="/home/homelte/mei/index_files/v.htm"></script><script src="/home/homelte/mei/index_files/js/hm.js"></script><script src="/home/homelte/mei/index_files/js/flow.js"></script><script src="/home/homelte/mei/index_files/js/analytics-min.js"></script><script>
    var layoutHeaderData = false;
</script>
<div class="layout-header clearfix layout-header-order login" id="layoutHeader">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_blank" href="http://www.meizu.com/" class="layout-header-logo-link" alt="魅族科技" data-mdesc="购物车页头logo" data-mtype="store_cart_yt_logo">
                <i class="layout-font layout-font-logo"></i>
            </a>
        </div>
        <ul class="layout-header-bread">
            <li class="layout-header-bread-block active">购物车</li>
            <li class="layout-header-bread-block ">确认订单</li>
            <li class="layout-header-bread-block ">在线支付</li>
            <li class="layout-header-bread-block ">完成</li>
        </ul>
        <ul class="layout-header-right">
            <li class="layout-header-right-item">
                <a class="layout-header-right-link" href="https://ordercenter.meizu.com/list/index.html" target="_blank" data-mdesc="购物车页头-我的订单" data-mtype="store_cart_yt_order">我的订单</a>
            </li>
            <li class="layout-header-right-item signout">
                <a class="layout-header-right-link" data-mdesc="购物车页头-登录" data-mtype="store_cart_yt_login" href="javascript:window.location.href='https://login.flyme.cn/vCodeLogin?sid=unionlogin&amp;service=store&amp;autodirct=true&amp;useruri=http://store.meizu.com/member/login.htm?useruri='+%20encodeURIComponent(encodeURIComponent(window.location.href));">登录</a>
            </li>
            <li class="layout-header-right-item signout">
                <a class="layout-header-right-link" data-mdesc="购物车页头-注册" data-mtype="store_cart_yt_register" target="_blank" href="https://member.meizu.com/register">注册</a>
            </li>
            <li class="layout-member signin">
                <a class="layout-member-link" target="_blank" href="http://me.meizu.com/member/index"><span class="layout-member-username" id="topbarUser">用户571954172</span>的商城<i class="layout-member-triangle"></i></a>
                <ul class="layout-member-downmenu">
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="https://me.meizu.com/member/address/index">地址管理</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="页头-收藏" data-mtype="store_index_yt_collect" target="_blank" href="https://me.meizu.com/member/favorite/index">我的收藏</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框2" data-mtype="store_index_yt_my_2" target="_blank" href="https://mcycle.meizu.com/repo/ticket/list">我的回购券</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="https://me.meizu.com/member/advice/index">问题反馈</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="javascript:window.location.href='http://store.meizu.com/member/logout.htm?useruri='+%20encodeURIComponent(encodeURIComponent(window.location.href));">退出</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>

<div class="cart" id="cart">
    <div class="cart-login-tips" id="cartLoginTips">
        您还没有登录！登录后可显示您账号中已加入的商品哦~
        <a class="mz-btn s success" href="javascript:void(0);" data-mdesc="登录提示" data-mtype="store_cart_tip_login">
            去登录
        </a>
    </div>

    <div class="mzcontainer">
        <table class="cart-header">
            <tbody><tr>
                <td class="cart-col-select">
                    <div class="cart-select-all JSelectAll" data-mdesc="全选按钮" data-mtype="store_cart_all">
                        <div class="mz-checkbox checked"></div>
                        <span class="cart-select-title">全选</span>
                    </div>
                </td>
                <td class="cart-col-name">商品</td>
                <td class="cart-col-price">单价(元)</td>
                <td class="cart-col-number">数量</td>
                <td class="cart-col-total">小计(元)</td>
                <td class="cart-col-ctrl">操作</td>
            </tr>
        </tbody></table>

        <ul class="cart-merchant-list" id="merchantList"><li class="cart-merchant">
  <div class="cart-merchant-header">
    
    <div class="cart-select-all">
      <div class="mz-checkbox checked"></div>
      <span class="cart-select-title">魅族</span>
    </div>
    
  </div>
  <table class="cart-merchant-body"><tbody><tr class="cart-product">
  <td class="cart-col-select">
    
    <div class="mz-checkbox checked"></div>
    
    <a href="https://detail.meizu.com/item/meilannote5.html?skuId=2815" class="cart-product-link" target="_blank" data-mdesc="购物车商品位" data-mtype="store_cart_prod">
      <img src="/home/homelte/mei/index_files/images/Cix_s1hGE96AUG5fAAtuFSxnh1Q216.png" class="cart-product-img" alt="魅蓝 Note5">
    </a>
  </td>
  <td class="cart-col-name">
    <a href="https://detail.meizu.com/item/meilannote5.html?skuId=2815" class="cart-product-link" target="_blank" data-mdesc="购物车商品位" data-mtype="store_cart_prod">
      <p>魅蓝 Note5</p>
      
      <span class="cart-product-desc">全网通公开版 月光银 16GB</span>
    </a>
  </td>
  <td class="cart-col-price">
    <p>
      <span class="cart-product-price">899.00</span>
      
    </p>
    
  </td>
  <td class="cart-col-number">
    
    <div class="cart-product-number-adder">
      <p class="cart-product-number-max show">
        
      </p>
    <div class="mz-adder">
  <button class="mz-adder-subtract disabled"></button>
  <div class="mz-adder-num"><input class="mz-adder-input" value="1" type="text"></div>
  <button class="mz-adder-add"></button>
</div></div>
    
  </td>
  <td class="cart-col-total">
    <span class="cart-product-price total">899.00</span>
  </td>
  <td class="cart-col-ctrl"><div class="cart-product-remove" data-mdesc="删除单个商品按钮" data-mtype="store_cart_del"></div></td>
</tr></tbody></table>
</li></ul>

    </div>
    <div class="cart-footer" id="cartFooter">
        <div class="mzcontainer">
            <div class="cart-footer-left">
                <div class="cart-select-all JSelectAll" data-mdesc="全选按钮" data-mtype="store_cart_all">
                    <div class="mz-checkbox checked"></div>
                    <span class="cart-select-title">全选</span>
                </div>
                <span class="cart-remove-selected" data-mdesc="删除选中商品" data-mtype="store_cart_batch" id="removeSelected">删除选中的商品</span>
                <span class="cart-footer-count">
        共<span class="cart-footer-num" id="totalCount">1</span>件商品， 已选择
                    <span class="cart-footer-num blue" id="totalSelectedCount">1</span>件
                    </span>
            </div>
            <div class="cart-footer-right">
                    <span class="cart-footer-sum">
        已优惠<span class="cart-footer-num red" id="totalDiscount">0.00</span>元， 合计(不含运费)：
                    <span class="cart-footer-total" id="totalPrice">899.00</span>
                    </span>
                <div class="mz-btn success" id="cartSubmit" data-mdesc="去结算按钮" data-mtype="store_cart_checkout">去结算</div>
            </div>
        </div>
    </div>

</div>

<div class="layout-footer clearfix">
    <div class="mzcontainer">
        <ul class="layout-footer-service clearfix">
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot1"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">7天</span>无理由退货
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot2"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">15天</span>换货保障
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot3"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">1年</span>免费保修
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot4"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">百城</span>速达
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot5"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">全场</span>包邮
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot6"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">2000多家</span>专卖店
                </p>
            </li>
        </ul>
        <ul class="layout-footer-nav clearfix">
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">帮助说明</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="https://hd.meizu.com/rules/payment_help.html" data-mdesc="帮助说明下第1个坑" data-mtype="store_index_yw_support_1">支付方式</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="https://hd.meizu.com/rules/deliverynote.html" data-mdesc="帮助说明下第2个坑" data-mtype="store_index_yw_support_2">配送说明</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://store.meizu.com/explain/warranty_services.html" data-mdesc="帮助说明下第3个坑" data-mtype="store_index_yw_support_3">售后服务</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="https://hd.meizu.com/rules/payment_helps.html" data-mdesc="帮助说明下第4个坑" data-mtype="store_index_yw_support_4">付款帮助</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">Flyme</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" href="https://open.flyme.cn/" target="_blank" data-mdesc="Flyme下第1个坑" data-mtype="store_index_yw_flyme_1">开放平台</a></li>
                    <li><a class="layout-footer-nav-link" href="http://www.flyme.cn/firmware.jsp" target="_blank" data-mdesc="Flyme下第2个坑" data-mtype="store_index_yw_flyme_2">固件下载</a></li>
                    <li><a class="layout-footer-nav-link" href="http://app.flyme.cn/" target="_blank" data-mdesc="Flyme下第3个坑" data-mtype="store_index_yw_flyme_3">软件商店</a></li>
                    <li><a class="layout-footer-nav-link" href="http://finder.flyme.cn/" target="_blank" data-mdesc="Flyme下第4个坑" data-mtype="store_index_yw_flyme_4">查找手机</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关于我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/about.html" data-mdesc="关于我们下第1个坑" data-mtype="store_index_yw_about_1">关于魅族</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://hr.meizu.com/" data-mdesc="关于我们下第2个坑" data-mtype="store_index_yw_about_2">加入我们</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/contact.html" data-mdesc="关于我们下第3个坑" data-mtype="store_index_yw_about_3">联系我们</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/legalStatement.html" data-mdesc="关于我们下第4个坑" data-mtype="store_index_yw_about_4">法律声明</a></li>
                </ul>

            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关注我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://weibo.com/meizumobile" data-mdesc="关注我们下第1个坑" data-mtype="store_index_yw_follow_1">新浪微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://t.qq.com/meizu_tech" data-mdesc="关注我们下第2个坑" data-mtype="store_index_yw_follow_2">腾讯微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://user.qzone.qq.com/2762957059" data-mdesc="关注我们下第3个坑" data-mtype="store_index_yw_follow_3">QQ空间</a></li>
                    <li>
                        <a class="layout-footer-nav-link layout-footer-nav-wechat" href="javascript:;" data-mdesc="关注我们下第4个坑" data-mtype="store_index_yw_follow_4">
                            官方微信
                            <img class="layout-footer-nav-wechat-img" src="/home/homelte/mei/index_files/images/weixin.png" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </li>
            <li class="layout-footer-nav-item ">
                <p class="layout-footer-nav-title tel">24小时全国服务热线</p>
                <p><a class="layout-footer-nav-tel" href="tel:400-788-3333" data-mdesc="服务热线电话号码" data-mtype="store_index_yw_tel">400-788-3333</a></p>
                <p>
                    <a class="layout-footer-nav-btn" href="javascript:;" data-mdesc="在线客服按钮" data-mtype="store_index_yw_service" onclick="window.open('http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl='+ encodeURIComponent(document.URL) + '&amp;pagereferrer=' + encodeURIComponent(document.referrer) + '&amp;info=&amp;k=1', '_blank','height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no');">
                        <i class="layout-font layout-font-talk"></i>24小时在线客服
                    </a>
                </p>
            </li>
        </ul>
        <div class="layout-footer-copyright">
            珠海市魅族通讯设备有限公司 ©2017 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank" data-mdesc="底部版权信息第1个坑" data-mtype="store_index_yw_copyright_1">备案号：粤ICP备13003602号-2</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" target="_blank" data-mdesc="底部版权信息第2个坑" data-mtype="store_index_yw_copyright_2">经营许可证编号：粤B2-20130198</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" target="_blank" data-mdesc="底部版权信息第3个坑" data-mtype="store_index_yw_copyright_3">营业执照</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/" rel="nofollow" target="_blank" data-mdesc="底部版权信息第4个坑" data-mtype="store_index_yw_copyright_4">
                <i class="layout-icon layout-icon-license"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" rel="nofollow" target="_blank" data-mdesc="底部版权信息第5个坑" data-mtype="store_index_yw_copyright_5">
                <i class="layout-icon layout-icon-wel"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://credit.szfw.org/CX20151204012550820380.html" rel="nofollow" target="_blank" data-mdesc="底部版权信息第6个坑" data-mtype="store_index_yw_copyright_6">
                <i class="layout-icon layout-icon-trust"></i>
            </a>
          <a class="layout-footer-copyright-link" hidefocus="true" href="http://si.trustutn.org/info?sn=749160913024249024251&amp;certType=1" rel="nofollow" target="_blank" data-mdesc="底部版权信息第7个坑" data-mtype="store_index_yw_copyright_7">
                <i class="layout-icon layout-icon-official"></i>
            </a>
        </div>
    </div>
</div>

<script src="/home/homelte/mei/index_files/js/layout-ca70dcecd0.js" type="text/javascript"></script>
<script>
    var MZSTORECARTDATA = {
        timestamp: 1499344349107,
        cart: {"count":1,"invalidCount":0,"invalids":[],"merchants":[{"mainSkus":[{"cartItemId":69585,"cspuDesc":"全网通公开版 月光银 16GB","image":"//openfile.meizu.com/group1/M00/00/C7/Cix_s1hGE96AUG5fAAtuFSxnh1Q216.png","itemName":"魅蓝 Note5","itemUrl":"//detail.meizu.com/item/meilannote5.html?skuId=2815","maxBuy":5,"merchantName":"魅族","originPrice":899.00,"price":899.00,"quantity":1,"selected":true,"skuId":2815,"subtotal":899.00,"totalOriginPrice":899.00,"totalPrice":899.00}],"merchantName":"魅族","totalPrice":899.00}]}
    };
</script>
<script src="/home/homelte/mei/index_files/js/cart-da2c5f831f.js" type="text/javascript"></script>
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "/home/homelte/mei/index_files/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/home/homelte/mei/index_files/js/flow.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</body></html>