<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>会员中心-地址管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="会员中心，地址管理">
    <meta name="Keywords" content="魅族手机官网商城、魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="/home/homelte/mei/address_files/css/layout-51312a08ab.css">

    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="stylesheet" href="/home/homelte/mei/address_files/css/address-90a22321fb.css">
    <link rel="stylesheet" href="/home/homelte/mei/address_files/css/site-base.css">
</head>
<body>
<!-- common header -->
<div class="layout-topbar clearfix login" id="layoutTopbar">
    <div class="mzcontainer">
        <ul class="layout-topbar-left clearfix">
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第1个" data-mtype="store_index_yt_1" target="_blank" href="http://www.meizu.com/">魅族官网</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="http://store.meizu.com/index.html">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第3个" data-mtype="store_index_yt_3" target="_blank" href="http://www.flyme.cn/">Flyme</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="_blank" href="http://retail.meizu.com/index.html">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="_blank" href="http://service.meizu.com/index.html">服务</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第6个" data-mtype="store_index_yt_6" target="_blank" href="http://bbs.meizu.cn/">社区</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix" id="topbarRight">
            <li class="layout-topbar-right-links layout-topbar-right-cart layout-topbar-right-cart-hide" id="layoutCart">
                <a class="layout-topbar-link" data-mdesc="页头-购物车" data-mtype="store_index_yt_cart" id="layoutCartBtn" href="https://cart.meizu.com/">
                    <i class="layout-font layout-font-cart"></i>购物车<span class="layout-topbar-cart-quantity" id="layoutCartQuantity">0</span>
                </a>
                <div class="layout-cart" id="miniContent">
                </div>
            </li>

            <li class="layout-topbar-right-links">
                <a id="topbarOrderMsg" class="layout-topbar-link has-msg" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="https://ordercenter.meizu.com/list/index.html">我的订单</a>
            </li>
            <li class="layout-topbar-right-links signin" id="topbarMsgBox">
                <a id="topbarMsg" class="layout-topbar-link" data-mdesc="页头-消息" data-mtype="store_index_yt_msg" target="_blank" href="https://me.meizu.com/member/message/index">消息</a>
            </li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" data-mdesc="页头-未登录状态-登录" data-mtype="store_index_yt_login" href="javascript:window.location.href='https://login.flyme.cn/vCodeLogin?sid=unionlogin&amp;service=store&amp;autodirct=true&amp;useruri=http://store.meizu.com/member/login.htm?useruri='+%20encodeURIComponent(encodeURIComponent(window.location.href));">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" data-mdesc="页头-未登录状态-注册" data-mtype="store_index_yt_register" target="_blank" href="https://member.meizu.com/register">注册</a></li>
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
</div><script charset="utf-8" src="address_files/v.htm"></script><script src="address_files/hm.js"></script><script src="address_files/flow.js"></script><script src="address_files/analytics-min.js"></script><script>
    var layoutHeaderData = {
        header: [{"id":25,"href":"https://lists.meizu.com/page/list?categoryid=73","commodityType":0,"name":"全部分类","children":[{"name":"手机","href":"http://lists.meizu.com/page/list/?categoryid=76","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPGAIU-VAAqnoNZJkt8948.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"数码影音","href":"http://lists.meizu.com/page/list/?categoryid=231","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPCAbjRmAAaQNt-KZ6Q072.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"智能设备","href":"http://lists.meizu.com/page/list/?categoryid=153","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPKAc9eUAALQF0POZTo904.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"智能穿戴","href":"http://lists.meizu.com/page/list/?categoryid=174","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGAJIZIAATg2-3hRQ4628.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"游戏设备","href":"http://lists.meizu.com/page/list/?categoryid=181","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGALkdkAATOlMGeplg965.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"手机配件","href":"http://lists.meizu.com/page/list/?categoryid=186","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGAUklnAASPiYZvwZ8694.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"办公存储","href":"http://lists.meizu.com/page/list/?categoryid=227","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPGAB1CDAAfX3jfKrg0412.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"生活周边","href":"http://lists.meizu.com/page/list/?categoryid=222","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPCAecrdAAa_FIBfrjA141.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0}],"more":[]},{"id":18,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A18778%2C21896%2C9%2C12529%2C22216%2C18382","commodityType":1,"name":"PRO手机","children":[{"name":"魅族PRO 6 Plus","href":"https://detail.meizu.com/item/pro6plus.html","price":2699.000,"originalPrice":2999.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/DC/CnQOjVhjjb6AcDdoABXIbr6WvK8260_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10637},"sellingPoint":"性能旗舰 冷静表现"},{"name":"魅族PRO 6s","href":"https://detail.meizu.com/item/pro_6s.html","price":2299.000,"originalPrice":2499.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/C4/CnQOjVhAAfGATHD5AA1jPCtyxxQ710_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10560}},{"name":"魅族PRO 6","href":"https://detail.meizu.com/item/meizu_pro6.html","price":2299.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/30/Cgbj0VkP3IaAMo4RABG5x6Omz88935_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10167},"sellingPoint":"最高立减400元"}],"more":[]},{"id":21,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A3%2C19475%2C5%2C10%2C11760%2C22119%2C868%2C1133%2C18237%2C22214%2C20724%2C22215%2C23107%2C19242%2C19243%2C20374%2C20100%2C21854%2C20579%2C20580%2C22463%2C18732","commodityType":1,"name":"魅蓝手机","children":[{"name":"魅蓝 A5","href":"https://detail.meizu.com/item/meilana5.html","price":699.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/B2/Cgbj0VlcXwaAJ3syAABXVIBRp8M285_126x126.jpg"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10947},"sellingPoint":"7月3日10:00 准时开售"},{"name":"魅蓝 E2","href":"https://detail.meizu.com/item/meilane2.html","price":1299.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/59/Cgbj0FkAVOCASFx2AAB6yRT6jV8170_126x126.jpg"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10911},"sellingPoint":"4月29日10点，首发开售，6期免息"},{"name":"魅蓝 5s","href":"http://detail.meizu.com/item/meilan5s.html","price":888.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/28/CnQOjViwBUiAZjKqAAndI9Fz2pU065_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10761},"sellingPoint":"32G套餐版，购机享3期免息"},{"name":"魅蓝 Note5","href":"https://detail.meizu.com/item/meilannote5.html","price":899.000,"originalPrice":999.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/35/CnQOjVjCTEWANnKrAAtuFSxnh1Q016_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10638},"sellingPoint":"购64G版本，享6期免息"},{"name":"魅蓝 X","href":"https://detail.meizu.com/item/meilanx.html","price":1699.000,"originalPrice":1699.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/C3/CnQOjVg-j0uAWlJIAAj4ScedJ9k483_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10618}},{"name":"魅蓝 5","href":"https://detail.meizu.com/item/meilan5.html","price":788.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/DB/Cix_s1hhz22AIuezAAuqcqE5YHc854_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10550},"sellingPoint":"大屏幕，大电池"},{"name":"魅蓝 E","href":"https://detail.meizu.com/item/meilan_e1.html","price":1099.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A2/Cgbj0FlZqBeAEpWNAAtHG2nRyAc153_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10387},"sellingPoint":"领券减50元 购机再送自拍杆"},{"name":"魅蓝 Max","href":"https://detail.meizu.com/item/meilan_max1.html","price":1699.000,"originalPrice":1699.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/D0/CnQOjVhPyJ-AW1LQAAvjYcX8eAE808_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10478}}],"more":[]},{"id":24,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A8%2C18136%2C20098","commodityType":1,"name":"MX手机","children":[{"name":"魅族 MX6","href":"https://detail.meizu.com/item/mx6.html","price":1599.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/0E/Cgbj0VjZzjiAMGEuAA7OmPNvWD8625_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10314}}],"more":[]},{"id":19,"href":"http://lists.meizu.com/page/list/?categoryid=231","commodityType":1,"name":"数码配件","children":[{"name":"魅族EP51蓝牙运动耳机","href":"https://detail.meizu.com/item/meizu_ep51.html?skuid=696","price":269.000,"originalPrice":269.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIhpOAZfAeAAHOwfpsRUs639_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10155},"sellingPoint":"明亮清晰的高音 强有力的低音"},{"name":"魅族HD50头戴式耳机","href":"https://detail.meizu.com/item/meizu_hd50.html?skuid=839","price":399.000,"originalPrice":399.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/98/Cgbj0FlFVNOAf-qRAATZrGgT1ak741_126x126.png"},"goodType":1,"tagThings":"热卖","tagColour":"#f59646","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10017},"sellingPoint":"清新简洁，有音质更有颜值"},{"name":"魅族 EP2X耳机","href":"https://detail.meizu.com/item/ep_2x.html?skuid=2505","price":129.000,"originalPrice":129.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIhkyAeuFqAAErzSizI8c740_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10563},"sellingPoint":"契合声音的流动之美"},{"name":"魅族蓝牙通话耳机","href":"https://detail.meizu.com/item/meizu_erji.html?skuid=2823","price":89.000,"originalPrice":89.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIhwWAcxAiAAL5gzRzFIY024_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10641},"sellingPoint":"经典小圆点，一键集大成"},{"name":"魅族蓝牙小音箱","href":"https://detail.meizu.com/item/meizu_yinxiang_a20.html?skuid=3569","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIhnOAFP1PAAbboUvsAC4345_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10760},"sellingPoint":"好音感 直达心灵"},{"name":"魅族移动电源（标准版）","href":"https://detail.meizu.com/item/mpower_m8e.html?skuid=1061","price":99.000,"originalPrice":99.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A9/Cgbj0VlJ2E-AfJshAAKdyPUHRpQ241_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10227},"sellingPoint":"素雅百搭 颜值典范"},{"name":"铁三角 ATH-EQ300M 耳机","href":"https://detail.meizu.com/item/ATH_EQ300M.html?skuid=3978","price":138.000,"originalPrice":138.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9C/Cgbj0FlMyOeANQdKAACW7PIbLZU073_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10842},"sellingPoint":"运动 出街利器 人声靓丽"},{"name":"JBL GO音乐金砖 蓝牙音响","href":"https://detail.meizu.com/item/JBL_JBLGO_LC.html?skuid=3078","price":268.000,"originalPrice":268.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/11/Cix_s1iZNteAYXd6AA8rGU1paRA348_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10678},"sellingPoint":"降噪麦克风  一键接听通话"}],"more":[]},{"id":20,"href":"http://lists.meizu.com/page/list/?categoryid=153","commodityType":1,"name":"智能设备","children":[{"name":"魅族手环","href":"https://detail.meizu.com/item/meizu_shouhuan_h1.html?skuid=3455","price":229.000,"originalPrice":229.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/23/Cix_s1imq8-AZlLQAAOqzSlfPuA761_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10722},"sellingPoint":"腕间流动的心率专家"},{"name":"魅族盒子","href":"https://detail.meizu.com/item/meizu_hezi.html?skuid=2463","price":399.000,"originalPrice":299.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIh2mAbWEnAAGoLQ8h81w399_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10546},"sellingPoint":"一键找回遥控器"},{"name":"魅族路由器 极速版","href":"https://detail.meizu.com/item/router_f1.html?skuid=1112","price":199.000,"originalPrice":199.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIh62APAl_AABXVrwLVgU248_126x126.jpg"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10241},"sellingPoint":"天生不凡 快狠稳"},{"name":"魅族智能体脂秤","href":"https://detail.meizu.com/item/smartscale.html?skuid=4435","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIh8GAPJnNAAGCK4nlrc0593_126x126.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10944},"sellingPoint":"精准的数字，才是真实的你"},{"name":"乐心心率手环MAMBO2","href":"https://detail.meizu.com/item/mambo2.html?skuid=2448","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/E6/Cix_s1hrFXmAUuv8AAH8vdkEC9M905_126x126.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10541},"sellingPoint":"超长续航 防水性能"},{"name":"暴风魔镜S1 智能VR眼镜","href":"https://detail.meizu.com/item/BF_S1_android.html?skuid=3189","price":199.000,"originalPrice":199.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/14/CnQOjVidYEGALArbAAHFhtrFdCs403_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10698},"sellingPoint":"轻出新境界  近视党福音"},{"name":"飞智黑武士蓝牙无线手柄","href":"https://detail.meizu.com/item/feizhi_shoubing.html?skuid=1442","price":116.000,"originalPrice":116.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9C/Cgbj0FlMyX6Ae6ycAATDVSjZmTU411_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10320},"sellingPoint":"正版游戏云端适配"},{"name":"雷柏无线超薄键鼠套装9060","href":"https://detail.meizu.com/item/RAPOO_9060.html?skuid=3746","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/AA/Cgbj0VlQtVCAGxApAAR053u7D6s226_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10802},"sellingPoint":"紧凑设计 简单便捷"}],"more":[]}]
    };
</script>
<div class="layout-header clearfix">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_blank" href="http://www.meizu.com/" class="layout-header-logo-link" alt="魅族科技" data-mdesc="魅族logo跳转链接" data-mtype="store_index_logo">
                <i class="layout-font layout-font-logo"></i>
            </a>
        </div>
        <ul class="layout-header-nav clearfix" id="layoutHeaderNav">
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=73&amp;click=store_index_dh_1" class="layout-header-nav-link" data-mdesc="导航第1个" data-mtype="store_index_dh_1">全部分类</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&amp;features=80%3A18778%2C21896%2C9%2C12529%2C22216%2C18382&amp;click=store_index_dh_2" class="layout-header-nav-link" data-mdesc="导航第2个" data-mtype="store_index_dh_2">PRO手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&amp;features=80%3A3%2C19475%2C5%2C10%2C11760%2C22119%2C868%2C1133%2C18237%2C22214%2C20724%2C22215%2C23107%2C19242%2C19243%2C20374%2C20100%2C21854%2C20579%2C20580%2C22463%2C18732&amp;click=store_index_dh_3" class="layout-header-nav-link" data-mdesc="导航第3个" data-mtype="store_index_dh_3">魅蓝手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&amp;features=80%3A8%2C18136%2C20098&amp;click=store_index_dh_4" class="layout-header-nav-link" data-mdesc="导航第4个" data-mtype="store_index_dh_4">MX手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="http://lists.meizu.com/page/list/?categoryid=231&amp;click=store_index_dh_5" class="layout-header-nav-link" data-mdesc="导航第5个" data-mtype="store_index_dh_5">数码配件</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="http://lists.meizu.com/page/list/?categoryid=153&amp;click=store_index_dh_6" class="layout-header-nav-link" data-mdesc="导航第6个" data-mtype="store_index_dh_6">智能设备</a>
                </li>
        </ul>
        <div class="layout-header-nav-downmenu" id="layoutHeaderNavDownmenu"></div>
    </div>
</div>

<div class="store-wrap">
    <div class="crumbs">
        <a href="https://store.meizu.com/">首页 &gt; </a>
        <a href="https://me.meizu.com/member/index">我的商城 &gt; </a>
        <a href="https://me.meizu.com/member/address/index" class="active">地址管理</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a href="javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>订单中心</a>
            <a href="https://ordercenter.meizu.com/list/index.html" class="ml " data-mtype="store_mc_order_me" data-mdesc="我的订单">我的订单</a>
            <a href="https://mcycle.meizu.com/repo/order/list" class="ml " data-mtype="store_mc_order_mcycle" data-mdesc="我的回购单">我的回购单</a>
            <a href="https://insurance.meizu.com/list/insurance.html" class="ml " data-mtype="store_mc_order_insurance" data-mdesc="我的意外保">我的意外保</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-selfCenter"></i>个人中心</a>
            <a href="https://me.meizu.com/member/address/index" class="ml active" data-mtype="store_mc_me_address" data-mdesc="地址管理">地址管理</a>
            <a href="https://me.meizu.com/member/favorite/index" class="ml " data-mtype="store_mc_me_favorite" data-mdesc="我的收藏">我的收藏</a>
            <a href="https://me.meizu.com/member/message/index" class="ml " data-mtype="store_mc_me_msg" data-mdesc="消息提醒">消息提醒</a>
            <a href="https://me.meizu.com/member/advice/index" class="ml " data-mtype="store_mc_me_suggest" data-mdesc="建议反馈">建议反馈</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-moneyCenter"></i>资产中心</a>
            <a href="https://me.meizu.com/member/coupon/index" class="ml " data-mtype="store_mc_assets_coupon" data-mdesc="我的优惠券">我的优惠券</a>
            <a href="https://me.meizu.com/member/redenvelop/index" class="ml " data-mtype="store_mc_assets_redpacket" data-mdesc="我的红包">我的红包</a>
            <a href="https://mcycle.meizu.com/repo/ticket/list" class="ml " data-mtype="store_mc_assets_mcycleticket" data-mdesc="我的回购券">我的回购券</a>
            <a href="javascript:;" class="type-title"><i class="iconfont icon-serverCenter"></i>服务中心</a>
            <a href="https://ordercenter.meizu.com/refund/index.html" class="ml " style="width: 105px" data-mtype="store_mc_service_refund" data-mdesc="退款退换货跟踪">退款/退换货跟踪</a>
            <a href="https://me.meizu.com/member/service/insurance" class="ml " data-mtype="store_mc_service_insurance" data-mdesc="补办意外保">意外保</a>
            <a href="https://me.meizu.com/member/service/recovery" class="ml " data-mtype="store_mc_service_recovery" data-mdesc="以旧换新">以旧换新</a>
        </div>
    </div>
        <div class="right-content f-fr">
            <div class="address-main">
                <div class="main">
                    <div class="row">
                        <span class="title rollit">新增收货地址</span>
                        <span class="gray">（您目前已有地址<i class="already">1</i>个，最多还可以增加<i class="settle">9</i>个）</span>
                    </div>
                    <form id="valid-form">
                        <!-- 修改地址时要用的地址id -->
                        <input class="addressId" value="" type="hidden">

                        <div class="content">
                            <div class="row namePhone clearfix">
                                <div class="f-fl addressName">
                                    <span>收货人姓名<i class="mark">*</i></span>
                                    <input id="name" class="varify" name="receiver" placeholder="长度不超过15个字" maxlength="15" type="text">
                                </div>
                                <div class="f-fl addressPhone">
                                    <span>收货人手机号<i class="mark">*</i></span>
                                    <input id="phone" name="telNumber" class="varify" placeholder="请输入11位手机号" maxlength="11" type="text">
                                </div>
                            </div>
                            <div class="row clearfix receverAddress">
                                <span class="f-fl">收货人地址<i class="mark">*</i></span>
                                <div class="mzui_select mzui_select_province f-fl">
                                    <input readonly="true" class="mzui_select_trigger province" placeholder="省/直辖市" type="text">
                                    <select class="provinceId" name="provinceId">
                                        <option value="" style="display:none" selected="selected"></option>
                                                <option value="2911">北京</option>
                                                <option value="14848">天津</option>
                                                <option value="7450">吉林省</option>
                                                <option value="8452">辽宁省</option>
                                                <option value="16860">浙江省</option>
                                                <option value="1">福建省</option>
                                                <option value="16624">上海</option>
                                                <option value="18482">广东省</option>
                                                <option value="21612">海南省</option>
                                                <option value="41143">湖北省</option>
                                                <option value="42634">湖南省</option>
                                                <option value="36793">安徽省</option>
                                                <option value="15121">江苏省</option>
                                                <option value="1214">江西省</option>
                                                <option value="27304">四川省</option>
                                                <option value="35714">重庆</option>
                                                <option value="34187">云南省</option>
                                                <option value="23366">贵州省</option>
                                                <option value="20238">广西壮族自治区</option>
                                                <option value="32166">西藏自治区</option>
                                                <option value="11241">山东省</option>
                                                <option value="38498">河南省</option>
                                                <option value="21894">甘肃省</option>
                                                <option value="3251">河北省</option>
                                                <option value="10088">内蒙古自治区</option>
                                                <option value="25024">宁夏回族自治区</option>
                                                <option value="25305">青海省</option>
                                                <option value="13289">山西省</option>
                                                <option value="25761">陕西省</option>
                                                <option value="32939">新疆维吾尔自治区</option>
                                                <option value="5700">黑龙江省</option>
                                    </select>
                                </div>
                                <div class="mzui_select mzui_select_city f-fl">
                                    <input readonly="true" class="mzui_select_trigger city" placeholder="城市" type="text">
                                    <select class="cityId" name="cityId">
                                    </select>
                                </div>
                                <div class="mzui_select mzui_select_area f-fl">
                                    <input readonly="true" class="mzui_select_trigger area" placeholder="区/县" type="text">
                                    <select class="areaId" name="areaId">
                                    </select>
                                </div>
                                <div class="mzui_select mzui_select_town f-fl">
                                    <input readonly="true" class="mzui_select_trigger town" placeholder="乡镇/街道" type="text">
                                    <select class="townId" name="townId">
                                    </select>
                                </div>
                                <div class="mzui_select_other hide">
                                    <input class="otherAddress _otherAddress" placeholder="其他" type="text">
                                </div>
                            </div>
                            <div class="row  detailAddress">
                                <span>详细地址<i class="mark">*&nbsp;&nbsp;&nbsp;</i></span>
                                <input id="detailAddress" name="address" class="varify" placeholder="请输入不少于4不超过50个字的详细地址，例如：路名，门牌号" minlength="4" maxlength="50" type="text">
                            </div>
                            <div class="opreat">
                                <label for="default">
                                    <input id="default" class="setDefault" name="isDefault" type="checkbox">设为默认
                                </label>
                                <a href="javascript:;" class="saveAddress">保存</a>
                            </div>
                        </div>
                    </form>
					
                    <div class="list">
                        <div class="row">
                            <div class="title">
                                <div>已有地址</div>
                                <div class="upload hide">
                                    <i class="iconfont icon-zhuyi"></i>
                                    <span>因配送地址库数据升级，请点击地址进行升级，让您享受更好的配送服务！</span>
                                </div>
                            </div>
                        </div>
                        <div class="listHead">
                            <span class="center w15">收货人姓名</span><span class="center w35">收货人地址</span><span class="center w25">收货人手机号</span><span class="center w10">操作</span>
                        </div>
                        <ul id="tableList" class=""><li>
    <input class="addressId" value="7372200516000" type="hidden">
    <input class="isOld" value="0" type="hidden">

    <span class="center w15">付小妮</span>
    <span class="completeAddress center w35">北京北京市昌平区回龙观地区育荣教育园区</span>
    <span class="center w25">15738898614</span>
    <span class="center w10">
      <a class="edit" href="javascript:;">修改</a>
      <a class="delete" href="javascript:;">删除</a>
    </span>
    <span class="left w15">
        <a class="beDefault hide" href="javascript:;">设为默认</a>
    </span>
</li>
</ul>
                    </div>
                </div>
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
                            <img class="layout-footer-nav-wechat-img" src="/home/homelte/mei/address_files/images/weixin.png" alt="微信二维码">
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

<script src="/home/homelte/mei/address_files/js/layout-ca70dcecd0.js" type="text/javascript"></script>
    <script type="text/javascript" src="/home/homelte/mei/address_files/js/address-b2e4d21ffc.js"></script><div class="mzui_select_content" id="mzuiSelect-provinceId"><ul><li class="mzui_select_item mzui_select_item_selected" data-value="" data-zipcode="undefined"></li><li class="mzui_select_item" data-value="2911" data-zipcode="undefined">北京</li><li class="mzui_select_item" data-value="14848" data-zipcode="undefined">天津</li><li class="mzui_select_item" data-value="7450" data-zipcode="undefined">吉林省</li><li class="mzui_select_item" data-value="8452" data-zipcode="undefined">辽宁省</li><li class="mzui_select_item" data-value="16860" data-zipcode="undefined">浙江省</li><li class="mzui_select_item" data-value="1" data-zipcode="undefined">福建省</li><li class="mzui_select_item" data-value="16624" data-zipcode="undefined">上海</li><li class="mzui_select_item" data-value="18482" data-zipcode="undefined">广东省</li><li class="mzui_select_item" data-value="21612" data-zipcode="undefined">海南省</li><li class="mzui_select_item" data-value="41143" data-zipcode="undefined">湖北省</li><li class="mzui_select_item" data-value="42634" data-zipcode="undefined">湖南省</li><li class="mzui_select_item" data-value="36793" data-zipcode="undefined">安徽省</li><li class="mzui_select_item" data-value="15121" data-zipcode="undefined">江苏省</li><li class="mzui_select_item" data-value="1214" data-zipcode="undefined">江西省</li><li class="mzui_select_item" data-value="27304" data-zipcode="undefined">四川省</li><li class="mzui_select_item" data-value="35714" data-zipcode="undefined">重庆</li><li class="mzui_select_item" data-value="34187" data-zipcode="undefined">云南省</li><li class="mzui_select_item" data-value="23366" data-zipcode="undefined">贵州省</li><li class="mzui_select_item" data-value="20238" data-zipcode="undefined">广西壮族自治区</li><li class="mzui_select_item" data-value="32166" data-zipcode="undefined">西藏自治区</li><li class="mzui_select_item" data-value="11241" data-zipcode="undefined">山东省</li><li class="mzui_select_item" data-value="38498" data-zipcode="undefined">河南省</li><li class="mzui_select_item" data-value="21894" data-zipcode="undefined">甘肃省</li><li class="mzui_select_item" data-value="3251" data-zipcode="undefined">河北省</li><li class="mzui_select_item" data-value="10088" data-zipcode="undefined">内蒙古自治区</li><li class="mzui_select_item" data-value="25024" data-zipcode="undefined">宁夏回族自治区</li><li class="mzui_select_item" data-value="25305" data-zipcode="undefined">青海省</li><li class="mzui_select_item" data-value="13289" data-zipcode="undefined">山西省</li><li class="mzui_select_item" data-value="25761" data-zipcode="undefined">陕西省</li><li class="mzui_select_item" data-value="32939" data-zipcode="undefined">新疆维吾尔自治区</li><li class="mzui_select_item" data-value="5700" data-zipcode="undefined">黑龙江省</li></ul></div><div class="mzui_select_content" id="mzuiSelect-cityId"><ul></ul></div><div class="mzui_select_content" id="mzuiSelect-areaId"><ul></ul></div><div class="mzui_select_content" id="mzuiSelect-townId"><ul></ul></div>
    <!--common js-->
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "/home/homelte/mei/address_files/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/home/homelte/mei/address_files/js/flow.js';
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