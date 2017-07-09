    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>雷锋网-积分商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="魅族商城提供各种全部商品产品，包括手机,智能设备,智能穿戴,游戏设备,数码影音,手机配件/移动电源,移动存储/办公设备,生活周边，品质保障，可按推荐、商品上架时间，价格等放心购买，魅族商城将为您提供最好的子类目名称产品，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="keywords" content="全部商品,手机,智能设备,智能穿戴,游戏设备,数码影音,手机配件/移动电源,移动存储/办公设备,生活周边，魅族，魅族手机，魅族商城">
    <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-51312a08ab.css')}}" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link href="{{ asset('home/meizu/css/search-00ea2bc25a.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- common header -->
<div class="layout-topbar clearfix" id="layoutTopbar">
    <div class="mzcontainer">
        <ul class="layout-topbar-left clearfix">
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第1个" data-mtype="store_index_yt_1" target="_blank" href="http://www.meizu.com">魅族官网</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="http://store.meizu.com/index.html">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第3个" data-mtype="store_index_yt_3" target="_blank" href="http://www.flyme.cn">Flyme</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="_blank" href="http://retail.meizu.com/index.html">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="_blank" href="http://service.meizu.com/index.html">服务</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第6个" data-mtype="store_index_yt_6" target="_blank" href="http://bbs.meizu.cn">社区</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix" id="topbarRight">
            <li class="layout-topbar-right-links layout-topbar-right-cart layout-topbar-right-cart-hide" id="layoutCart">
                <a class="layout-topbar-link" data-mdesc="页头-购物车" data-mtype="store_index_yt_cart" id="layoutCartBtn" href="//cart.meizu.com/">
                    <i class="layout-font layout-font-cart"></i>购物车<span class="layout-topbar-cart-quantity" id="layoutCartQuantity">0</span>
                </a>
                <div class="layout-cart" id="miniContent">
                </div>
            </li>

            <li class="layout-topbar-right-links">
                <a id="topbarOrderMsg" class="layout-topbar-link" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="//ordercenter.meizu.com/list/index.html">我的订单</a>
            </li>
            <li class="layout-topbar-right-links signin" id="topbarMsgBox">
                <a id="topbarMsg" class="layout-topbar-link" data-mdesc="页头-消息" data-mtype="store_index_yt_msg" target="_blank" href="//me.meizu.com/member/message/index">消息</a>
            </li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" data-mdesc="页头-未登录状态-登录" data-mtype="store_index_yt_login" href="javascript:window.location.href='https://login.flyme.cn/vCodeLogin?sid=unionlogin&service=store&autodirct=true&useruri=http://store.meizu.com/member/login.htm?useruri='+ encodeURIComponent(encodeURIComponent(window.location.href));">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" data-mdesc="页头-未登录状态-注册" data-mtype="store_index_yt_register" target="_blank" href="//member.meizu.com/register">注册</a></li>
            <li class="layout-member signin">
                <a class="layout-member-link" target="_blank" href="http://me.meizu.com/member/index"><span class="layout-member-username" id="topbarUser"></span>的商城<i class="layout-member-triangle"></i></a>
                <ul class="layout-member-downmenu">
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="//me.meizu.com/member/address/index">地址管理</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="页头-收藏" data-mtype="store_index_yt_collect" target="_blank" href="//me.meizu.com/member/favorite/index">我的收藏</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框2" data-mtype="store_index_yt_my_2" target="_blank" href="//mcycle.meizu.com/repo/ticket/list">我的回购券</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="//me.meizu.com/member/advice/index">问题反馈</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="javascript:window.location.href='http://store.meizu.com/member/logout.htm?useruri='+ encodeURIComponent(encodeURIComponent(window.location.href));">退出</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div><script>
    var layoutHeaderData = {
        header: [{"id":25,"href":"https://lists.meizu.com/page/list?categoryid=73","commodityType":0,"name":"全部分类","children":[{"name":"手机","href":"http://lists.meizu.com/page/list/?categoryid=76","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPGAIU-VAAqnoNZJkt8948.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"数码影音","href":"http://lists.meizu.com/page/list/?categoryid=231","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPCAbjRmAAaQNt-KZ6Q072.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"智能设备","href":"http://lists.meizu.com/page/list/?categoryid=153","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPKAc9eUAALQF0POZTo904.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"智能穿戴","href":"http://lists.meizu.com/page/list/?categoryid=174","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGAJIZIAATg2-3hRQ4628.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"游戏设备","href":"http://lists.meizu.com/page/list/?categoryid=181","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGALkdkAATOlMGeplg965.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"手机配件","href":"http://lists.meizu.com/page/list/?categoryid=186","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGAUklnAASPiYZvwZ8694.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"办公存储","href":"http://lists.meizu.com/page/list/?categoryid=227","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPGAB1CDAAfX3jfKrg0412.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"生活周边","href":"http://lists.meizu.com/page/list/?categoryid=222","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPCAecrdAAa_FIBfrjA141.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0}],"more":[]},{"id":18,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A18778%2C21896%2C9%2C12529%2C22216%2C18382","commodityType":1,"name":"PRO手机","children":[{"name":"魅族PRO 6 Plus","href":"https://detail.meizu.com/item/pro6plus.html","price":2699.000,"originalPrice":2999.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/DC/CnQOjVhjjb6AcDdoABXIbr6WvK8260_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10637},"sellingPoint":"性能旗舰 冷静表现"},{"name":"魅族PRO 6s","href":"https://detail.meizu.com/item/pro_6s.html","price":2299.000,"originalPrice":2499.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/C4/CnQOjVhAAfGATHD5AA1jPCtyxxQ710_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10560}},{"name":"魅族PRO 6","href":"https://detail.meizu.com/item/meizu_pro6.html","price":2299.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/30/Cgbj0VkP3IaAMo4RABG5x6Omz88935_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10167},"sellingPoint":"最高立减400元"}],"more":[]},{"id":21,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A3%2C19475%2C5%2C10%2C11760%2C22119%2C868%2C1133%2C18237%2C22214%2C20724%2C22215%2C23107%2C19242%2C19243%2C20374%2C20100%2C21854%2C20579%2C20580%2C22463%2C18732","commodityType":1,"name":"魅蓝手机","children":[{"name":"魅蓝 A5","href":"https://detail.meizu.com/item/meilana5.html","price":699.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/B2/Cgbj0VlcXwaAJ3syAABXVIBRp8M285_126x126.jpg"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10947},"sellingPoint":"7月3日10:00 准时开售"},{"name":"魅蓝 E2","href":"https://detail.meizu.com/item/meilane2.html","price":1299.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/59/Cgbj0FkAVOCASFx2AAB6yRT6jV8170_126x126.jpg"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10911},"sellingPoint":"4月29日10点，首发开售，6期免息"},{"name":"魅蓝 5s","href":"http://detail.meizu.com/item/meilan5s.html","price":888.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/28/CnQOjViwBUiAZjKqAAndI9Fz2pU065_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10761},"sellingPoint":"32G套餐版，购机享3期免息"},{"name":"魅蓝 Note5","href":"https://detail.meizu.com/item/meilannote5.html","price":899.000,"originalPrice":999.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/35/CnQOjVjCTEWANnKrAAtuFSxnh1Q016_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10638},"sellingPoint":"购64G版本，享6期免息"},{"name":"魅蓝 X","href":"https://detail.meizu.com/item/meilanx.html","price":1699.000,"originalPrice":1699.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/C3/CnQOjVg-j0uAWlJIAAj4ScedJ9k483_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10618}},{"name":"魅蓝 5","href":"https://detail.meizu.com/item/meilan5.html","price":788.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/DB/Cix_s1hhz22AIuezAAuqcqE5YHc854_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10550},"sellingPoint":"大屏幕，大电池"},{"name":"魅蓝 E","href":"https://detail.meizu.com/item/meilan_e1.html","price":1099.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A2/Cgbj0FlZqBeAEpWNAAtHG2nRyAc153_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10387},"sellingPoint":"领券减50元 购机再送自拍杆"},{"name":"魅蓝 Max","href":"https://detail.meizu.com/item/meilan_max1.html","price":1699.000,"originalPrice":1699.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/D0/CnQOjVhPyJ-AW1LQAAvjYcX8eAE808_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10478}}],"more":[]},{"id":24,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A8%2C18136%2C20098","commodityType":1,"name":"MX手机","children":[{"name":"魅族 MX6","href":"https://detail.meizu.com/item/mx6.html","price":1599.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/0E/Cgbj0VjZzjiAMGEuAA7OmPNvWD8625_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10314}}],"more":[]},{"id":19,"href":"http://lists.meizu.com/page/list/?categoryid=231","commodityType":1,"name":"数码配件","children":[{"name":"魅族EP51蓝牙运动耳机","href":"https://detail.meizu.com/item/meizu_ep51.html?skuid=696","price":269.000,"originalPrice":269.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIhpOAZfAeAAHOwfpsRUs639_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10155},"sellingPoint":"明亮清晰的高音 强有力的低音"},{"name":"魅族HD50头戴式耳机","href":"https://detail.meizu.com/item/meizu_hd50.html?skuid=839","price":399.000,"originalPrice":399.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/98/Cgbj0FlFVNOAf-qRAATZrGgT1ak741_126x126.png"},"goodType":1,"tagThings":"热卖","tagColour":"#f59646","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10017},"sellingPoint":"清新简洁，有音质更有颜值"},{"name":"魅族 EP2X耳机","href":"https://detail.meizu.com/item/ep_2x.html?skuid=2505","price":129.000,"originalPrice":129.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIhkyAeuFqAAErzSizI8c740_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10563},"sellingPoint":"契合声音的流动之美"},{"name":"魅族蓝牙通话耳机","href":"https://detail.meizu.com/item/meizu_erji.html?skuid=2823","price":89.000,"originalPrice":89.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIhwWAcxAiAAL5gzRzFIY024_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10641},"sellingPoint":"经典小圆点，一键集大成"},{"name":"魅族蓝牙小音箱","href":"https://detail.meizu.com/item/meizu_yinxiang_a20.html?skuid=3569","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIhnOAFP1PAAbboUvsAC4345_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10760},"sellingPoint":"好音感 直达心灵"},{"name":"魅族移动电源（标准版）","href":"https://detail.meizu.com/item/mpower_m8e.html?skuid=1061","price":99.000,"originalPrice":99.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A9/Cgbj0VlJ2E-AfJshAAKdyPUHRpQ241_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10227},"sellingPoint":"素雅百搭 颜值典范"},{"name":"铁三角 ATH-EQ300M 耳机","href":"https://detail.meizu.com/item/ATH_EQ300M.html?skuid=3978","price":138.000,"originalPrice":138.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9C/Cgbj0FlMyOeANQdKAACW7PIbLZU073_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10842},"sellingPoint":"运动 出街利器 人声靓丽"},{"name":"JBL GO音乐金砖 蓝牙音响","href":"https://detail.meizu.com/item/JBL_JBLGO_LC.html?skuid=3078","price":268.000,"originalPrice":268.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/11/Cix_s1iZNteAYXd6AA8rGU1paRA348_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10678},"sellingPoint":"降噪麦克风  一键接听通话"}],"more":[]},{"id":20,"href":"http://lists.meizu.com/page/list/?categoryid=153","commodityType":1,"name":"智能设备","children":[{"name":"魅族手环","href":"https://detail.meizu.com/item/meizu_shouhuan_h1.html?skuid=3455","price":229.000,"originalPrice":229.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/23/Cix_s1imq8-AZlLQAAOqzSlfPuA761_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10722},"sellingPoint":"腕间流动的心率专家"},{"name":"魅族盒子","href":"https://detail.meizu.com/item/meizu_hezi.html?skuid=2463","price":399.000,"originalPrice":299.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIh2mAbWEnAAGoLQ8h81w399_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10546},"sellingPoint":"一键找回遥控器"},{"name":"魅族路由器 极速版","href":"https://detail.meizu.com/item/router_f1.html?skuid=1112","price":199.000,"originalPrice":199.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIh62APAl_AABXVrwLVgU248_126x126.jpg"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10241},"sellingPoint":"天生不凡 快狠稳"},{"name":"魅族智能体脂秤","href":"https://detail.meizu.com/item/smartscale.html?skuid=4435","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIh8GAPJnNAAGCK4nlrc0593_126x126.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10944},"sellingPoint":"精准的数字，才是真实的你"},{"name":"乐心心率手环MAMBO2","href":"https://detail.meizu.com/item/mambo2.html?skuid=2448","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/E6/Cix_s1hrFXmAUuv8AAH8vdkEC9M905_126x126.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10541},"sellingPoint":"超长续航 防水性能"},{"name":"暴风魔镜S1 智能VR眼镜","href":"https://detail.meizu.com/item/BF_S1_android.html?skuid=3189","price":199.000,"originalPrice":199.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/14/CnQOjVidYEGALArbAAHFhtrFdCs403_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10698},"sellingPoint":"轻出新境界  近视党福音"},{"name":"飞智黑武士蓝牙无线手柄","href":"https://detail.meizu.com/item/feizhi_shoubing.html?skuid=1442","price":116.000,"originalPrice":116.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9C/Cgbj0FlMyX6Ae6ycAATDVSjZmTU411_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10320},"sellingPoint":"正版游戏云端适配"},{"name":"雷柏无线超薄键鼠套装9060","href":"https://detail.meizu.com/item/RAPOO_9060.html?skuid=3746","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/AA/Cgbj0VlQtVCAGxApAAR053u7D6s226_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10802},"sellingPoint":"紧凑设计 简单便捷"}],"more":[]}]
    };
</script>
<div class="layout-header clearfix">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_blank" href="http://www.meizu.com" class="layout-header-logo-link" alt="魅族科技"
               data-mdesc="魅族logo跳转链接" data-mtype="store_index_logo">
                <i class="layout-font layout-font-logo"></i>
            </a>
        </div>
        <ul class="layout-header-nav clearfix" id="layoutHeaderNav">
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=73&click=store_index_dh_1" class="layout-header-nav-link" data-mdesc="导航第1个"
                       data-mtype="store_index_dh_1">全部分类</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&features=80%3A18778%2C21896%2C9%2C12529%2C22216%2C18382&click=store_index_dh_2" class="layout-header-nav-link" data-mdesc="导航第2个"
                       data-mtype="store_index_dh_2">PRO手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&features=80%3A3%2C19475%2C5%2C10%2C11760%2C22119%2C868%2C1133%2C18237%2C22214%2C20724%2C22215%2C23107%2C19242%2C19243%2C20374%2C20100%2C21854%2C20579%2C20580%2C22463%2C18732&click=store_index_dh_3" class="layout-header-nav-link" data-mdesc="导航第3个"
                       data-mtype="store_index_dh_3">魅蓝手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&features=80%3A8%2C18136%2C20098&click=store_index_dh_4" class="layout-header-nav-link" data-mdesc="导航第4个"
                       data-mtype="store_index_dh_4">MX手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="http://lists.meizu.com/page/list/?categoryid=231&click=store_index_dh_5" class="layout-header-nav-link" data-mdesc="导航第5个"
                       data-mtype="store_index_dh_5">数码配件</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="http://lists.meizu.com/page/list/?categoryid=153&click=store_index_dh_6" class="layout-header-nav-link" data-mdesc="导航第6个"
                       data-mtype="store_index_dh_6">智能设备</a>
                </li>
        </ul>
        <div class="layout-header-nav-downmenu" id="layoutHeaderNavDownmenu"></div>
    </div>
</div>

<!--下面是模板标签，不可删除-->

<main class="wrapper page-search" id="main">
    <div class="container">
        <section class="crumbs clearfix">
            <a data-mtype="store_list_mbx_index" href="//store.meizu.com/index.html?click=store_list_mbx_index">首页</a> &nbsp;&gt;&nbsp;
            <span class="crumbs-level" id="crumbsLevel" data-mtype="">
                全部商品
            </span>
        </section>

            <section class="brand" id="brand" style="display: none"></section>

        <section class="selector" id="selector">
            <!--  分类部分 start -->
                   <div class="sl-category" id="slCategory">
                    <div class="sl-line-wrap">
                        <div class="mod-key">分类：</div>
                        <div class="mod-value">
                            <div class="mod-value-list">
                                <ul>
                                            <li class="">
                                                <a data-value="76:1" data-tag="0" data-parent="" data-mtype="store_list_fl_1" href="javascript:;" title="手机">手机</a>
                                            </li>
                                            <li class="">
                                                <a data-value="153:4,12,13,14,15,19,23,30,31,33,34,41,43,45,50,52,58,60,74,84,90,91,93,96,98,110,117,129,130,131,133,134" data-tag="0" data-parent="" data-mtype="store_list_fl_2" href="javascript:;" title="智能设备">智能设备</a>
                                            </li>
                                            <li class="">
                                                <a data-value="174:17,18,114" data-tag="0" data-parent="" data-mtype="store_list_fl_3" href="javascript:;" title="智能穿戴">智能穿戴</a>
                                            </li>
                                            <li class="">
                                                <a data-value="181:79,80,85,111,112" data-tag="0" data-parent="" data-mtype="store_list_fl_4" href="javascript:;" title="游戏设备">游戏设备</a>
                                            </li>
                                            <li class="">
                                                <a data-value="231:5,28,29,68,100" data-tag="0" data-parent="" data-mtype="store_list_fl_5" href="javascript:;" title="数码影音">数码影音</a>
                                            </li>
                                            <li class="">
                                                <a data-value="186:21,22,23,26" data-tag="0" data-parent="" data-mtype="store_list_fl_6" href="javascript:;" title="手机配件/移动电源">手机配件/移动电源</a>
                                            </li>
                                            <li class="">
                                                <a data-value="227:40,42,46,52,72,73,88,111,112" data-tag="0" data-parent="" data-mtype="store_list_fl_7" href="javascript:;" title="移动存储/办公设备">移动存储/办公设备</a>
                                            </li>
                                            <li class="">
                                                <a data-value="222:48,55,56,83,87,92,109,116" data-tag="0" data-parent="" data-mtype="store_list_fl_8" href="javascript:;" title="生活周边">生活周边</a>
                                            </li>
                                </ul>
                            </div>
                        </div>

                            <div class="mod-ext">
                                <a class="sl-e-more J_extMore" href="javascript:;" data-mtype="store_list_fl_more_1" style="">更多<i></i></a>
                            </div>
                    </div>
                   </div>
            <div class="sl-prop" id="slProp">
                        <div class="sl-line-wrap">
                            <div class="mod-key"><span>品牌：</span></div>
                            <div class="mod-value">
                                <div class="mod-value-list">
                                    <ul>
                                           <li class="vm-all">
                                                <a title="全部" data-value="96:1,18951,884,18518,17898,17899,885,14257,20712,19410,881,882,883,17512,17513,19308,9159,1717,19539,11755,874,18439,876,877,871,872,19603,17984,20730,18266,18361,20697,7806,20498,19381,18070,18669,19791,20312,19747,886,879,880,875,20516,873,11236,18932,18107,17910,11292,17848,20270,19713,19309,19646,20011,20737,19088,20060,20061,20071,20250,20702,21099,21159,21326,22331,22428" data-mtype="store_list_xf_1_all" href="javascript:;">全部</a>
                                           </li>
                                                   <li>
                                                       <a data-value="96:1"  data-mtype="store_list_xf_1_1" title="魅族" href="javascript:;">魅族</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:18951"  data-mtype="store_list_xf_1_2" title="乐心" href="javascript:;">乐心</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:884"  data-mtype="store_list_xf_1_3" title="先锋" href="javascript:;">先锋</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:18518"  data-mtype="store_list_xf_1_4" title="暴风魔镜" href="javascript:;">暴风魔镜</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:17898,17899"  data-mtype="store_list_xf_1_5" title="新游" href="javascript:;">新游</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:885"  data-mtype="store_list_xf_1_6" title="铁三角" href="javascript:;">铁三角</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:14257"  data-mtype="store_list_xf_1_7" title="Beats" href="javascript:;">Beats</a>
                                                   </li>
                                                   <li>
                                                       <a data-value="96:20712,19410,881,882,883,17512,17513,19308,9159,1717,19539,11755,874,18439,876,877,871,872,19603,17984,20730,18266,18361,20697,7806,20498,19381,18070,18669,19791,20312,19747,886,879,880,875,20516,873,11236,18932,18107,17910,11292,17848,20270,19713,19309,19646,20011,20737,19088,20060,20061,20071,20250,20702,21099,21159,21326,22331,22428"  data-mtype="store_list_xf_1_8" title="其他品牌" href="javascript:;">其他品牌</a>
                                                   </li>
                                    </ul>
                                </div>
                            </div>
                                <div class="mod-ext">
                                    <a class="sl-e-more J_extMore" href="javascript:;" data-mtype="store_list_xf_1_more" style="">更多<i></i></a>
                                </div>

                        </div>
            </div>
        </section>

<section class="filter clearfix" id="filter" style="display:
    block">
    <div class="filter-order" id="J_filterOrder">
        <a class="active" data-tag="0" data-mtype="store_list_sx_1" href="javascript:void(0);">
            推荐
        </a>
        <a data-tag="1" data-mtype="store_list_sx_2" href="javascript:void(0);">
            新品
        </a>
        <a data-tag="2" data-mtype="store_list_sx_3" href="javascript:void(0);">
            价格<i class="icon-arrow-down"></i>
        </a>
    </div>
    <div class="filter-condition" id="J_filterCondition">
        <label class="bs-checkbox" data-mtype="store_list_sx_xz" >
            <i></i>仅显示有货商品
        </label>
    </div>
</section>

<section class="goods-list" id="goodsList">
        <ul class="goods-list-wrap clearfix" id="goodsListWrap">
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_1_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_1" target="_blank" href="//detail.meizu.com/item/meilan5s.html?skuId=3573&click=store_list_kw_1" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/01/1D/Cix_s1ij9TaAJ21DAAt2lSmose0592.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_1_clr_1" data-skuid="3573">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/01/1D/Cix_s1ij9TaAJ21DAAt2lSmose0592.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_1_clr_2" data-skuid="3571">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/01/1C/CnQOjVij9TaALd9FAAtNzBNoPd4445.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_1_clr_3" data-skuid="3572">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/01/1D/CnQOjVij9TqAWnwcAAndI9Fz2pU075.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_1_clr_4" data-skuid="3574">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/01/1D/Cix_s1ij9TaAcIUlAAtTmgRx_rA750.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_1_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_1_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅蓝 5s</h2>
                                <h3 class="red" title="购机享3期免息，32G版限量赠保护壳＋高透膜">
                                购机享3期免息，32G版限量赠保护壳＋高透膜
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">799</span>
                                        <span class="vm-start">起</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_2_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_2" target="_blank" href="//detail.meizu.com/item/meilan5.html?skuId=3089&click=store_list_kw_2" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/96/CnQOjVgXDFiAFKtRAAhssjfJPzo087.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_2_clr_1" data-skuid="3089">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/96/CnQOjVgXDFiAFKtRAAhssjfJPzo087.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_2_clr_2" data-skuid="2624">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/96/CnQOjVgXDF2AUYbTAA1vRiwvfxo006.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_2_clr_3" data-skuid="2787">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/96/Cix_s1gXDFiAZZbEAAhQpLJS718547.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_2_clr_4" data-skuid="2473">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/96/Cix_s1gXDFiAaJJQAAZ752w62s8546.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_2_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_2_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅蓝 5</h2>
                                <h3 class="red" title="32G领券立减10元 享3期免息 高清屏长续航">
                                32G领券立减10元 享3期免息 高清屏长续航
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">699</span>
                                        <span class="vm-start">起</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_3_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_3" target="_blank" href="//detail.meizu.com/item/meilannote5.html?skuId=2960&click=store_list_kw_3" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/C6/Cix_s1hGE9KAJ1E-AAv78Kz1Hok651.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_3_clr_1" data-skuid="2960">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C6/Cix_s1hGE9KAJ1E-AAv78Kz1Hok651.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_3_clr_2" data-skuid="2815">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C7/Cix_s1hGE96AUG5fAAtuFSxnh1Q216.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_3_clr_3" data-skuid="2962">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C6/CnQOjVhGE86AI3p0AAvGeBMPTOc384.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_3_clr_4" data-skuid="3840">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C7/CnQOjVhGE9eAe1kpAAyqBrQO_tA582.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_3_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_3_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅蓝 Note5</h2>
                                <h3 class="red" title="【6期免息 】7月1日起，64G版赠EP-31耳机及高透膜">
                                【6期免息 】7月1日起，64G版赠EP-31耳机及高透膜
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">899</span>
                                        <span class="vm-start">起</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_4_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_4" target="_blank" href="//detail.meizu.com/item/meilanx.html?skuId=2800&click=store_list_kw_4" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/C2/CnQOjVg-ZwCAEthoAAj4ScedJ9k163.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_4_clr_1" data-skuid="2800">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C2/CnQOjVg-ZwCAEthoAAj4ScedJ9k163.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_4_clr_2" data-skuid="2802">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C2/Cix_s1g-ZvWABwuOAAi4VbjE8G4487.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_4_clr_3" data-skuid="2798">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C2/CnQOjVg-ZuaAFywCAAbA87_XjbE795.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_4_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_4_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅蓝 X</h2>
                                <h3 class="red" title="7月1日-7日 限时领券立减100元 享3期免息">
                                7月1日-7日 限时领券立减100元 享3期免息
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">1699</span>
                                        <span class="vm-start">起</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_5_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_5" target="_blank" href="//detail.meizu.com/item/meizu_ep51.html?skuId=1122&click=store_list_kw_5" title="">
                        <div class="gl-item-wrap">
                                <span class="sale-sign" style="background-color: #00c3f5;">新色</span>
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1465810220-14607.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_5_clr_1" data-skuid="1122">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1465810220-14607.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_5_clr_2" data-skuid="696">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1459849377-64075.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_5_clr_3" data-skuid="4438">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/01/A3/Cgbj0VlDRPWAPbFJAAFFmCmIajs047.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_5_clr_4" data-skuid="4439">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/01/A3/Cgbj0VlDRPqAB7FwAAFJUtNcEYs254.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_5_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_5_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅族 EP51蓝牙运动耳机</h2>
                                <h3 class="gray" title="摆脱束缚，更自由自在地运动">
                                摆脱束缚，更自由自在地运动
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">269</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_6_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_6" target="_blank" href="//detail.meizu.com/item/meizu_hd50.html?skuId=837&click=store_list_kw_6" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1449644448-10238.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_6_clr_1" data-skuid="837">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1449644448-10238.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_6_clr_2" data-skuid="838">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1449644140-40273.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_6_clr_3" data-skuid="839">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1453355333-13100.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_6_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_6_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅族HD50 头戴式耳机</h2>
                                <h3 class="gray" title="清新简洁，有音质更有颜值">
                                清新简洁，有音质更有颜值
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">399</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_7_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_7" target="_blank" href="//detail.meizu.com/item/EP31.html?skuId=142&click=store_list_kw_7" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1449643778-41533.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_7_clr_1" data-skuid="142">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1449643778-41533.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_7_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_7_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅族EP-31耳机</h2>
                                <h3 class="gray" title="舒适均衡 精致优雅">
                                舒适均衡 精致优雅
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">199</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_8" target="_blank" href="//detail.meizu.com/item/meizu_shouhuan_h1.html?skuId=3455&click=store_list_kw_8" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/C8/Cix_s1hGFveAE3RcAAOqzSlfPuA022.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_8_clr_1" data-skuid="3455">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C8/Cix_s1hGFveAE3RcAAOqzSlfPuA022.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_8_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_8_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅族手环</h2>
                                <h3 class="gray" title="腕间流动的心率专家">
                                    <span>热卖</span>
                                腕间流动的心率专家
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">229</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_9_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_9" target="_blank" href="//detail.meizu.com/item/pro_6s.html?skuId=2496&click=store_list_kw_9" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/A0/Cix_s1gaoBuAJthwAA1jPCtyxxQ181.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_9_clr_1" data-skuid="2496">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/A0/Cix_s1gaoBuAJthwAA1jPCtyxxQ181.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_9_clr_2" data-skuid="2497">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/A0/CnQOjVgaoE2AeO-qAA2BsUgqVWc879.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_9_clr_3" data-skuid="2499">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/A1/Cix_s1gaoG-AJ-cpAAqULbIBw-M082.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_9_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_9_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅族PRO 6s</h2>
                                <h3 class="red" title="【限时用券】直降200，券后再减50，只需2249元">
                                【限时用券】直降200，券后再减50，只需2249元
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">2299</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_10_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_10" target="_blank" href="//detail.meizu.com/item/meilanU20.html?skuId=2122&click=store_list_kw_10" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/F9/Cix_s1h41luAAHfLAAqZAhbhMBg022.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_10_clr_1" data-skuid="2122">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F9/Cix_s1h41luAAHfLAAqZAhbhMBg022.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_10_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_10_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅蓝 U20</h2>
                                <h3 class="red" title="八核处理器 5.5英寸高清大屏 ">
                                八核处理器 5.5英寸高清大屏 
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">899</span>
                                        <span class="vm-start">起</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_11_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_11" target="_blank" href="//detail.meizu.com/item/meilan_e1.html?skuId=2107&click=store_list_kw_11" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/2B/CnQOjVeqmpuAEa4CAAy2ZSaBwTc885.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_11_clr_1" data-skuid="2107">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/2B/CnQOjVeqmpuAEa4CAAy2ZSaBwTc885.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_11_clr_2" data-skuid="1680">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/2B/Cix_s1eqmsmABA98AA0Rkx2XjKE895.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_11_clr_3" data-skuid="1682">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/2A/CnQOjVeqmcGAY9eYAAtHG2nRyAc032.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_11_clr_4" data-skuid="1720">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/2A/Cix_s1eqmkaALh-bAAucVt2n_to453.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_11_clr_5" data-skuid="2086">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/2B/Cix_s1eqmnGAO5dyAAzQ2opb7qI201.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_11_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_11_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅蓝 E</h2>
                                <h3 class="red" title="7月1日-7月7日，领券减50元，购机再送自拍杆">
                                7月1日-7月7日，领券减50元，购机再送自拍杆
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">1099</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_12" target="_blank" href="//detail.meizu.com/item/meizu_hezi.html?skuId=2462&click=store_list_kw_12" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/9B/CnQOjVgYZV6Af6VlAADvhkEyt98979.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_12_clr_1" data-skuid="2462">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/9B/CnQOjVgYZV6Af6VlAADvhkEyt98979.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_12_clr_2" data-skuid="2463">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/9C/Cix_s1gYZWCAc1jqAAGoLQ8h81w741.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_12_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_12_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>魅族盒子 一键找回遥控器</h2>
                                <h3 class="red" title="一键找回遥控器，海量容量，4K输出">
                                一键找回遥控器，海量容量，4K输出
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">399</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_13" target="_blank" href="//detail.meizu.com/item/lexin_mambo.html?skuId=1008&click=store_list_kw_13" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1463047792-58674.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_13_clr_1" data-skuid="1008">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1463047792-58674.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_13_clr_2" data-skuid="1009">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1463048060-77557.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_13_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_13_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>乐心运动手环mambo 微信互联</h2>
                                <h3 class="gray" title="来电提醒 智能闹钟 睡眠监测">
                                来电提醒 智能闹钟 睡眠监测
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">99</span>
                                        <span class="vm-start">起</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_14" target="_blank" href="//detail.meizu.com/item/BF_xD.html?skuId=2474&click=store_list_kw_14" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/9E/Cix_s1gZYrOAHINhAAHU00SyQ6o514.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_14_clr_1" data-skuid="2474">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/9E/Cix_s1gZYrOAHINhAAHU00SyQ6o514.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_14_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_14_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>暴风魔镜 小D 虚拟现实智能VR眼镜</h2>
                                <h3 class="gray" title="3D巨幕观影，海量影视资源">
                                3D巨幕观影，海量影视资源
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">49</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_15" target="_blank" href="//detail.meizu.com/item/JBL_Charge2_plus.html?skuId=3058&click=store_list_kw_15" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/F2/CnQOjVh4NJyAG8maAAPaQj8VLwY399.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_15_clr_1" data-skuid="3058">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F2/CnQOjVh4NJyAG8maAAPaQj8VLwY399.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_15_clr_2" data-skuid="3059">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F3/Cix_s1h4NMOAXVgOAAUz_Ke0vsM129.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_15_clr_3" data-skuid="3060">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F2/Cix_s1h4NFmANowgAAKQL625zHg108.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_15_clr_4" data-skuid="3061">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F3/Cix_s1h4NLGAWFLeAAVGIFsg9EY875.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_15_clr_5" data-skuid="3062">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F3/Cix_s1h4NNeAHr74AAVZ_yWZuUg556.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_15_clr_6" data-skuid="3063">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F2/Cix_s1h4NGuACzyxAAUcNhEsxlM547.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_15_clr_7" data-skuid="3064">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F2/CnQOjVh4NImABFoIAAUPULGmWmo963.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_15_clr_8" data-skuid="3065">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F1/CnQOjVh4NEWAKzxhAAUoffgIk1k795.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_15_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_15_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>JBL Charge2+ 便携迷你蓝牙音箱 低音炮</h2>
                                <h3 class="gray" title="IPX5级防水 低音户外便携  ">
                                IPX5级防水 低音户外便携  
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">1197</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_16_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_16" target="_blank" href="//detail.meizu.com/item/ATH_EM7X.html?skuId=2579&click=store_list_kw_16" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/A4/CnQOjVgj2LGAHGr8AAO8PLpbfv0489.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_16_clr_1" data-skuid="2579">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/A4/CnQOjVgj2LGAHGr8AAO8PLpbfv0489.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_16_clr_2" data-skuid="2580">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/A4/CnQOjVgj2M-AZwsPAAV1JXRFIe4158.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_16_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_16_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>铁三角Audio Technica ATH-EM7X</h2>
                                <h3 class="gray" title="经典em7复刻版，女毒首选没有之一">
                                经典em7复刻版，女毒首选没有之一
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">488</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_17_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_17" target="_blank" href="//detail.meizu.com/item/JBL_T280A_LC.html?skuId=3070&click=store_list_kw_17" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/F4/CnQOjVh4NbCAa6rsAAI3MzrNrBw820.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_17_clr_1" data-skuid="3070">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/F4/CnQOjVh4NbCAa6rsAAI3MzrNrBw820.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_17_clr_2" data-skuid="3071">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1458894498-31437.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_17_clr_3" data-skuid="3072">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1458887173-28720.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_17_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_17_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>JBL T280A 立体声入耳式手机耳机</h2>
                                <h3 class="gray" title="一键通话线控 通话音乐两用">
                                一键通话线控 通话音乐两用
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">198</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_18_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_18" target="_blank" href="//detail.meizu.com/item/reflect_bt_LC.html?skuId=3068&click=store_list_kw_18" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1458884457-24788.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_18_clr_1" data-skuid="3068">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1458884457-24788.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_18_clr_2" data-skuid="3067">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1458885208-34785.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_18_clr_3" data-skuid="3066">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1458886112-86413.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_18_clr_4" data-skuid="3069">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1458884807-42853.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_18_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_18_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>JBL Reflect BT 蓝牙无线运动耳机 夜跑系列</h2>
                                <h3 class="red" title="">
                                
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">598</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_19" target="_blank" href="//detail.meizu.com/item/NM_VR30_YLC.html?skuId=3555&click=store_list_kw_19" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/D2/Cix_s1hSOk2AfJA_AAPtb3y3Obc019.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_19_clr_1" data-skuid="3555">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/D2/Cix_s1hSOk2AfJA_AAPtb3y3Obc019.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_19_clr_2" data-skuid="3556">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/01/1A/CnQOjVihHiiAPKSsAAL8Gd5t3wI363.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_19_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_19_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>纽曼 NM-VR30 虚拟现实智能VR眼镜 </h2>
                                <h3 class="gray" title="佩戴舒适 人性化设计">
                                佩戴舒适 人性化设计
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">59</span>
                                        <span class="vm-start">起</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_20" target="_blank" href="//detail.meizu.com/item/BTP_2185.html?skuId=1893&click=store_list_kw_20" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/4B/Cix_s1fKR3-AX9JuAAWX1-z6F08239.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_20_clr_1" data-skuid="1893">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/4B/Cix_s1fKR3-AX9JuAAWX1-z6F08239.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_20_clr_2" data-skuid="1894">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/4B/Cix_s1fKR5SAcjWEAAWUjUeTMYc644.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_20_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_20_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>北通阿修罗TE版无线震动游戏手柄</h2>
                                <h3 class="gray" title="支持PC、PC360、安卓4.0以上、PS3四大平台">
                                支持PC、PC360、安卓4.0以上、PS3四大平台
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">158</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_21" target="_blank" href="//detail.meizu.com/item/JBL_JBLGO_LC.html?skuId=3077&click=store_list_kw_21" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1453688346-89649.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_21_clr_1" data-skuid="3077">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1453688346-89649.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_21_clr_2" data-skuid="3076">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1453688721-78372.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_21_clr_3" data-skuid="3075">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1453688622-69053.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_21_clr_4" data-skuid="3074">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1453688539-65680.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_21_clr_5" data-skuid="3079">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1459414449-33166.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_21_clr_6" data-skuid="3078">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1459308493-19756.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_21_clr_7" data-skuid="3073">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1453688034-64308.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_21_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_21_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>JBL GO音乐金砖 无线蓝牙音响</h2>
                                <h3 class="red" title="  “音乐小方块”  IF设计大奖">
                                  “音乐小方块”  IF设计大奖
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">268</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_22_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_22" target="_blank" href="//detail.meizu.com/item/SE_CL751_BH.html?skuId=2682&click=store_list_kw_22" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1451552533-74986.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_22_clr_1" data-skuid="2682">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1451552533-74986.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_22_clr_2" data-skuid="2683">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1451552763-27060.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_22_clr_3" data-skuid="2684">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1451552652-38766.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_22_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_22_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>先锋 SE-CL751 重低音入耳式音乐耳机</h2>
                                <h3 class="gray" title="强劲浑厚低音 9.4mm振膜 佩戴舒适">
                                强劲浑厚低音 9.4mm振膜 佩戴舒适
                                </h3>
                                <dd class="mod-price">
                                        <span class="vm-coupon">限时特惠</span>
                                    <span>￥</span>
                                    <span class="vm-price">249</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                        <div  class="compare-btn-list"  id="J_compare" data-mtype="store_list_kw_23_compare">
                            <i  class="iconfont  icon-duibi compare-duibi"></i>
                            <span>对比</span>
                        </div>
                    <a data-mtype="store_list_kw_23" target="_blank" href="//detail.meizu.com/item/ATH_CK330IS_XY.html?skuId=2581&click=store_list_kw_23" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//storeimg.meizu.com/product/1450750062-72037.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_23_clr_1" data-skuid="2581">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1450750062-72037.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_23_clr_2" data-skuid="2582">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1450688621-42262.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_23_clr_3" data-skuid="2583">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1450688803-50864.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_23_clr_4" data-skuid="2584">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1450749781-90966.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_23_clr_5" data-skuid="2585">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1450749147-51679.png@120x120.jpg">
                                            </dd>
                                            <dd  data-mtype="store_list_kw_23_clr_6" data-skuid="2586">
                                                <img width="40" height="40" class="lazy" data-original="//storeimg.meizu.com/product/1450750206-56896.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_23_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_23_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>铁三角Audio Technica ATH-CK330IS</h2>
                                <h3 class="gray" title="多彩炫音，兼容苹果安卓，老铁音质">
                                多彩炫音，兼容苹果安卓，老铁音质
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">189</span>
                                </dd>
                        </div>
                    </a>
                </li>
                <li class="gl-item" data-init="0">
                    <a data-mtype="store_list_kw_24" target="_blank" href="//detail.meizu.com/item/lexin_S5.html?skuId=1608&click=store_list_kw_24" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" data-original="//openfile.meizu.com/group1/M00/00/2C/Cix_s1er5z6AZuvFAAJAanZTsKY679.png@240x240.jpg">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_24_clr_1" data-skuid="1608">
                                                <img width="40" height="40" class="lazy" data-original="//openfile.meizu.com/group1/M00/00/2C/Cix_s1er5z6AZuvFAAJAanZTsKY679.png@120x120.jpg">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_24_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_24_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>乐心S5智能体脂秤</h2>
                                <h3 class="gray" title="虚胖还是真胖？乐心S5告诉你！">
                                虚胖还是真胖？乐心S5告诉你！
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">199</span>
                                </dd>
                        </div>
                    </a>
                </li>
        </ul>
</section>
<section class="empty clearfix" id="empty" style="display:none;">
    <div class="empty-bd">
        <div class="empty-bd-pic"></div>
        <div class="empty-bd-info">
            <h4 class="yahei">抱歉没有找到相关商品</h4>
            <p>建议您：<br/>
                1.适当减少筛选条件<br/>
                2.尝试其他关键字
            </p>
        </div>
    </div>
</section>

<section class="pages" id="pages">
</section>

            <section class="more-brands" style="display: none"></section>
            <section class="list-floorad" style="display: none"></section>

    <section class="recommend" id="recommend">
        <div class="recommend-hd">
            <h2 class="mod-title">为您推荐</h2>
            <div class="mod-control" id="recommendDirectionNav">
                <a class="vm-prev flex-prev iconfont" id="J_recommendPrev" data-mtype="sotre_list_tj_a" href="#">
                </a>
                <a class="vm-next flex-next iconfont" id="J_recommendNext" data-mtype="sotre_list_tj_b" href="#">
                </a>
            </div>
        </div>
        <div class="recommend-slider" id="J_recommendSlider">
            <ul class="recommend-slider-wrap">
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_1" class="rs-item-wrap" title="魅蓝 Note5"
                                   href="//detail.meizu.com/item/meilannote5.html?click=store_list_tj_1"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C7/Cix_s1hGE96AUG5fAAtuFSxnh1Q216.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅蓝 Note5 </h4>
                                    <h6 class="vm-subtitle" title="6期免息  16G直降100元">6期免息  16G直降100元</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">899</span>
                                    </p>
                                </div>
                                    <span class="mod-sign" style="background-color: #f0415f;">
                                         特惠
                                    </span>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_2" class="rs-item-wrap" title="魅蓝 5s"
                                   href="//detail.meizu.com/item/meilan5s.html?click=store_list_tj_2"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/01/1D/CnQOjVij9TqAWnwcAAndI9Fz2pU075.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅蓝 5s </h4>
                                    <h6 class="vm-subtitle" title="购机享3期免息">购机享3期免息</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">888</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_3" class="rs-item-wrap" title="魅族 MX6"
                                   href="//detail.meizu.com/item/mx6.html?click=store_list_tj_3"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/19/Cix_s1eNvdmALdX_AA7OmPNvWD8560.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅族 MX6 </h4>
                                    <h6 class="vm-subtitle" title="全金属 拍照旗舰">全金属 拍照旗舰</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">1599</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_4" class="rs-item-wrap" title="魅蓝 Max"
                                   href="//detail.meizu.com/item/meilan_max1.html?click=store_list_tj_4"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/4F/Cix_s1fM2_iASNMvAAscQInnNPY866.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅蓝 Max </h4>
                                    <h6 class="vm-subtitle" title="大屏长续航 享3期免息">大屏长续航 享3期免息</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">1699</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_5" class="rs-item-wrap" title="魅族 休闲旅行双肩包"
                                   href="//detail.meizu.com/item/meizu_bag.html?click=store_list_tj_5"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/49/CnQOjVfJIReAKnozAAVBTlzLU4U593.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅族 休闲旅行双肩包 </h4>
                                    <h6 class="vm-subtitle" title="曲面一体式设计 多功能隔层">曲面一体式设计 多功能隔层</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">199</span>
                                    </p>
                                </div>
                            </a>
                        </li>
            </ul>
        </div>
    </section>
    </div>
</main>

<div  class="compare-bar"  id="compareBar"  style="position:fixed">
    <div  class="diff-bar"  id="diffBar">
        <div  class="diff-bar-title">
            <div  class="bar-title">
                <p>商品对比  (<span  class="bar-num"  id="barNum">0</span>/4)</p>
            </div>
            <div  class="operate" data-mtype="store_public_compare_close">
                <i  class="iconfont  icon-chahao  hide-me"></i>
            </div>
        </div>

        <div  class="diff-bd  tab-cons">
            <div  class="tab-con  clearfix"  id="tabCon"  style="display:  block">
                <div  class="diff-items"  id="diffItems">
                </div>
                <div  class="diff-operate"  id="diffOperate">
                    <a  href="javascript:void(0);"  id="J_btnCompare" class="btn  btn-primary  btn-lg" data-mtype="store_public_compare"><i></i>对比</a>
                    <a  href="javascript:void(0);"  id="J_compareClear" data-mtype="store_public_compare_delall">清空商品</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
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
                            <img class="layout-footer-nav-wechat-img" src="{{ asset('home/meizu/picture/weixin.png')}}" alt="微信二维码">
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
            珠海市魅族通讯设备有限公司 &copy;2017 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank" data-mdesc="底部版权信息第1个坑" data-mtype="store_index_yw_copyright_1">备案号：粤ICP备13003602号-2</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/icp2.jpg" target="_blank" data-mdesc="底部版权信息第2个坑" data-mtype="store_index_yw_copyright_2">经营许可证编号：粤B2-20130198</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" target="_blank" data-mdesc="底部版权信息第3个坑" data-mtype="store_index_yw_copyright_3">营业执照</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/" rel="nofollow" target="_blank" data-mdesc="底部版权信息第4个坑" data-mtype="store_index_yw_copyright_4">
                <i class="layout-icon layout-icon-license"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" rel="nofollow" target="_blank" data-mdesc="底部版权信息第5个坑" data-mtype="store_index_yw_copyright_5">
                <i class="layout-icon layout-icon-wel"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://credit.szfw.org/CX20151204012550820380.html" rel="nofollow" target="_blank" data-mdesc="底部版权信息第6个坑" data-mtype="store_index_yw_copyright_6">
                <i class="layout-icon layout-icon-trust"></i>
            </a>
          <a class="layout-footer-copyright-link" hidefocus="true" href="http://si.trustutn.org/info?sn=749160913024249024251&certType=1" rel="nofollow" target="_blank" data-mdesc="底部版权信息第7个坑" data-mtype="store_index_yw_copyright_7">
                <i class="layout-icon layout-icon-official"></i>
            </a>
        </div>
    </div>
</div>

<script src="{{ asset('home/meizu/js/layout-ca70dcecd0.js')}}" type="text/javascript"></script><script>
    //list导航源数据
    var MZ = {};
    MZ.modelData={categoryMap:{"73":{"classifyTag":0,"mobileShowName":"全部商品","parentId":0,"saleCatID":73,"saleCatItemList":[{"full":"96:1,18951,884,18518,17898,17899,885,14257,20712,19410,881,882,883,17512,17513,19308,9159,1717,19539,11755,874,18439,876,877,871,872,19603,17984,20730,18266,18361,20697,7806,20498,19381,18070,18669,19791,20312,19747,886,879,880,875,20516,873,11236,18932,18107,17910,11292,17848,20270,19713,19309,19646,20011,20737,19088,20060,20061,20071,20250,20702,21099,21159,21326,22331,22428","id":96,"showAll":1,"sub":[{"text":"魅族","value":"96:1"},{"text":"乐心","value":"96:18951"},{"text":"先锋","value":"96:884"},{"text":"暴风魔镜","value":"96:18518"},{"text":"新游","value":"96:17898,17899"},{"text":"铁三角","value":"96:885"},{"text":"Beats","value":"96:14257"},{"text":"其他品牌","value":"96:20712,19410,881,882,883,17512,17513,19308,9159,1717,19539,11755,874,18439,876,877,871,872,19603,17984,20730,18266,18361,20697,7806,20498,19381,18070,18669,19791,20312,19747,886,879,880,875,20516,873,11236,18932,18107,17910,11292,17848,20270,19713,19309,19646,20011,20737,19088,20060,20061,20071,20250,20702,21099,21159,21326,22331,22428"}],"text":"品牌"}],"saleCatName":"全部商品","saleCategoryList":{"full":"73:1,4,5,9,12,13,14,15,17,18,19,21,22,23,24,25,26,28,29,30,31,33,34,40,41,42,43,45,46,48,50,52,55,56,58,60,68,72,73,74,79,80,83,84,85,86,87,88,90,91,92,93,94,96,98,100,109,110,111,112,114,116,117,129,130,131,133,134","sub":[{"mobileShowName":"手机","tag":0,"text":"手机","value":"76:1"},{"mobileShowName":"智能设备","tag":0,"text":"智能设备","value":"153:4,12,13,14,15,19,23,30,31,33,34,41,43,45,50,52,58,60,74,84,90,91,93,96,98,110,117,129,130,131,133,134"},{"mobileShowName":"智能穿戴","tag":0,"text":"智能穿戴","value":"174:17,18,114"},{"mobileShowName":"游戏设备","tag":0,"text":"游戏设备","value":"181:79,80,85,111,112"},{"mobileShowName":"数码影音","tag":0,"text":"数码影音","value":"231:5,28,29,68,100"},{"mobileShowName":"手机配件/移动电源","tag":0,"text":"手机配件/移动电源","value":"186:21,22,23,26"},{"mobileShowName":"移动存储/办公设备","tag":0,"text":"移动存储/办公设备","value":"227:40,42,46,52,72,73,88,111,112"},{"mobileShowName":"生活周边","tag":0,"text":"生活周边","value":"222:48,55,56,83,87,92,109,116"}],"text":"分类"}},"251":{"classifyTag":0,"mobileShowName":"测试商城","parentId":0,"saleCatID":251,"saleCatItemList":[],"saleCatName":"测试商城","saleCatSpecial":{"adShowTag":1,"appBottomShowType":2,"bottomShowType":0,"catItemHideTag":0,"filterTag":1,"h5LogoActBanner":"https://openfile.meizu.com/group1/M00/01/5B/Cgbj0FkC5DmAVtswAAB1SPk5-xg700.jpg","h5LogoDescContentJson":"[\"\"]","h5LogoDescPic":"","h5LogoDescTitle":"","h5LogoName":"","h5LogoPic":"","h5LogoSlogan":"","id":10,"mobileShowType":2,"orderTag":1,"recommendTag":1,"saleCatAdList":[{"id":9,"linkAddress":"","name":"ceshi ","pcImgUrl":"https://openfile.meizu.com/group1/M00/01/5B/Cgbj0FkC5DmAVtswAAB1SPk5-xg700.jpg","saleCategoryId":251,"status":0,"type":0,"wordContent":""}],"saleCatBottomAppAdList":[{"bottomShowType":2,"id":416,"name":"ceshi","picUrl":"https://openfile.meizu.com/group1/M00/01/5B/Cgbj0FkC5DmAVtswAAB1SPk5-xg700.jpg","platformType":1,"saleCategoryId":251,"targetUrl":"https://store.meizu.com"}],"saleCatBottomPcAdList":[],"saleCategoryId":251},"saleCategoryList":{"full":"251:14,17","sub":[{"mobileShowName":"测试","tag":0,"text":"测试","value":"252:14"}],"text":"分类"}},"76":{"classifyTag":0,"mobileShowName":"手机","parentId":73,"saleCatID":76,"saleCatItemList":[{"full":"80:21896,22216,18382,20098,22119,22214,20724,22215,23107,20374,23669,21854,20579,22463","id":80,"showAll":1,"sub":[{"text":"魅族系列","value":"80:21896,22216,18382,20098"},{"text":"魅蓝系列","value":"80:22119,22214,20724,22215,23107,20374,23669,21854,20579,22463"}],"text":"系列"},{"full":"203:20,18408,22,23,20725","id":203,"showAll":1,"sub":[{"text":"5.0英寸","value":"203:20"},{"text":"5.2英寸","value":"203:18408"},{"text":"5.5英寸","value":"203:22"},{"text":"5.7英寸","value":"203:23"},{"text":"6.0英寸","value":"203:20725"}],"text":"屏幕尺寸"}],"saleCatName":"手机","saleCategoryList":{"full":"76:1","sub":[],"text":"分类"}},"252":{"classifyTag":0,"mobileShowName":"测试","parentId":251,"saleCatID":252,"saleCatItemList":[{"full":"215:11271","id":215,"showAll":1,"sub":[{"text":"MiP智能机器人升级版","value":"215:11271"}],"text":"品名"}],"saleCatName":"测试","saleCategoryList":{"full":"252:14","sub":[],"text":"分类"}},"153":{"classifyTag":0,"mobileShowName":"智能设备","parentId":73,"saleCatID":153,"saleCatItemList":[{"full":"137:1,18951,17984","id":137,"showAll":1,"sub":[{"text":"魅族","value":"137:1"},{"text":"乐心","value":"137:18951"},{"text":"沁麟","value":"137:17984"}],"text":"品牌"}],"saleCatName":"智能设备","saleCategoryList":{"full":"153:4,12,13,14,15,19,23,30,31,33,34,41,43,45,50,52,58,60,74,84,90,91,93,96,98,110,117,129,130,131,133,134","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"247:4,12,14,15,19,23,30,31,33,34,41,43,45,50,52,58,60,74,84,90,91,93,96,98,110,117,129,130,131,133"},{"mobileShowName":"智能健康","tag":0,"text":"智能健康","value":"154:30,31,33,43,60,84,98,110,134"},{"mobileShowName":"智能厨房","tag":0,"text":"智能厨房","value":"156:45,50,58,133"},{"mobileShowName":"智能出行","tag":0,"text":"智能出行","value":"158:15,23,74,90,93,129,130,131"},{"mobileShowName":"智能娱乐","tag":0,"text":"智能娱乐","value":"159:4,14,19,52,91,96"}],"text":"分类"}},"174":{"classifyTag":0,"mobileShowName":"智能穿戴","parentId":73,"saleCatID":174,"saleCatItemList":[{"full":"165:1,18951,18070,18518","id":165,"showAll":1,"sub":[{"text":"魅族","value":"165:1"},{"text":"乐心","value":"165:18951"},{"text":"纽曼","value":"165:18070"},{"text":"暴风魔镜","value":"165:18518"}],"text":"品牌"}],"saleCatName":"智能穿戴","saleCategoryList":{"full":"174:17,18,114","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"178:17,18,114"},{"mobileShowName":"智能手环","tag":0,"text":"智能手环","value":"175:17"},{"mobileShowName":"智能手表","tag":0,"text":"智能手表","value":"176:114"},{"mobileShowName":"智能眼镜","tag":0,"text":"智能眼镜","value":"177:18"}],"text":"分类"}},"181":{"classifyTag":0,"mobileShowName":"游戏设备","parentId":73,"saleCatID":181,"saleCatItemList":[{"full":"168:17898,17899,20737,22678,22684,19088","id":168,"showAll":1,"sub":[{"text":"新游","value":"168:17898,17899"},{"text":"北通","value":"168:20737"},{"text":"联想","value":"168:22678"},{"text":"雷柏","value":"168:22684"},{"text":"飞智","value":"168:19088"}],"text":"品牌"}],"saleCatName":"游戏设备","saleCategoryList":{"full":"181:79,80,85,111,112","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"185:79,80,85,111,112"},{"mobileShowName":"游戏手柄","tag":0,"text":"游戏手柄","value":"182:80,85"},{"mobileShowName":"游戏键鼠","tag":0,"text":"游戏键鼠","value":"183:111,112"}],"text":"分类"}},"231":{"classifyTag":0,"mobileShowName":"数码影音","parentId":73,"saleCatID":231,"saleCatItemList":[{"full":"192:1,885,882,14257,884,883,22730,18070","id":192,"showAll":1,"sub":[{"text":"魅族","value":"192:1"},{"text":"铁三角","value":"192:885"},{"text":"JBL","value":"192:882"},{"text":"Beats","value":"192:14257"},{"text":"先锋","value":"192:884"},{"text":"其他","value":"192:883,22730,18070"}],"text":"品牌"}],"saleCatName":"数码影音","saleCategoryList":{"full":"231:5,28,29,68,100","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"232:5,28,29,68,100"},{"mobileShowName":"耳机","tag":0,"text":"耳机","value":"233:5"},{"mobileShowName":"音箱","tag":0,"text":"音箱","value":"234:28,29"}],"text":"分类"}},"186":{"classifyTag":0,"mobileShowName":"手机配件/移动电源","parentId":73,"saleCatID":186,"saleCatItemList":[{"full":"209:1,18070,19747,19603","id":209,"showAll":1,"sub":[{"text":"魅族","value":"209:1"},{"text":"纽曼","value":"209:18070"},{"text":"ORICO","value":"209:19747"},{"text":"罗马仕","value":"209:19603"}],"text":"品牌"}],"saleCatName":"手机配件/移动电源","saleCategoryList":{"full":"186:21,22,23,26","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"241:21,22,23,26"},{"mobileShowName":"移动电源","tag":0,"text":"移动电源","value":"187:26"},{"mobileShowName":"壳膜套","tag":0,"text":"壳膜套","value":"237:21"},{"mobileShowName":"数据线","tag":0,"text":"数据线","value":"239:22"},{"mobileShowName":"电源适配器","tag":0,"text":"电源适配器","value":"240:23"}],"text":"分类"}},"227":{"classifyTag":0,"mobileShowName":"移动存储/办公设备","parentId":73,"saleCatID":227,"saleCatItemList":[{"full":"191:18107,18932,19747,22684","id":191,"showAll":1,"sub":[{"text":"东芝","value":"191:18107"},{"text":"三星","value":"191:18932"},{"text":"ORICO","value":"191:19747"},{"text":"雷柏","value":"191:22684"}],"text":"品牌"}],"saleCatName":"移动存储/办公设备","saleCategoryList":{"full":"227:40,42,46,52,72,73,88,111,112","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"229:40,42,46,52,72,73,88,111,112"},{"mobileShowName":"移动存储","tag":0,"text":"移动存储","value":"228:40,42,46,88"},{"mobileShowName":"办公设备","tag":0,"text":"办公设备","value":"230:52,72,73,111,112"}],"text":"分类"}},"222":{"classifyTag":0,"mobileShowName":"生活周边","parentId":73,"saleCatID":222,"saleCatItemList":[{"full":"190:1,20060,20061","id":190,"showAll":1,"sub":[{"text":"魅族","value":"190:1"},{"text":"猎奇","value":"190:20060,20061"}],"text":"品牌"}],"saleCatName":"生活周边","saleCategoryList":{"full":"222:48,55,56,83,87,92,109,116","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"223:48,55,56,83,87,92,109,116"},{"mobileShowName":"魅族背包","tag":0,"text":"魅族背包","value":"224:92"},{"mobileShowName":"自拍杆","tag":0,"text":"自拍杆","value":"225:87"},{"mobileShowName":"手机镜头","tag":0,"text":"手机镜头","value":"226:83"}],"text":"分类"}},"241":{"classifyTag":0,"mobileShowName":"全部","parentId":186,"saleCatID":241,"saleCatItemList":[],"saleCatName":"全部","saleCategoryList":{"full":"241:21,22,23,26","sub":[],"text":"分类"}},"247":{"classifyTag":0,"mobileShowName":"全部","parentId":153,"saleCatID":247,"saleCatItemList":[],"saleCatName":"全部","saleCategoryList":{"full":"247:4,12,14,15,19,23,30,31,33,34,41,43,45,50,52,58,60,74,84,90,91,93,96,98,110,117,129,130,131,133","sub":[],"text":"分类"}},"223":{"classifyTag":1,"mobileShowName":"全部","parentId":222,"saleCatID":223,"saleCatItemList":[{"full":"190:1,20060,20061","id":190,"showAll":1,"sub":[{"text":"魅族","value":"190:1"},{"text":"猎奇","value":"190:20060,20061"}],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"223:48,55,56,83,87,92,109,116","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"223:48,55,56,83,87,92,109,116"},{"mobileShowName":"魅族背包","tag":1,"text":"魅族背包","value":"224:92"},{"mobileShowName":"自拍杆","tag":1,"text":"自拍杆","value":"225:87"},{"mobileShowName":"手机镜头","tag":1,"text":"手机镜头","value":"226:83"}],"text":"分类"}},"229":{"classifyTag":1,"mobileShowName":"全部","parentId":227,"saleCatID":229,"saleCatItemList":[{"full":"191:18107,18932,19747,22684","id":191,"showAll":1,"sub":[{"text":"东芝","value":"191:18107"},{"text":"三星","value":"191:18932"},{"text":"ORICO","value":"191:19747"},{"text":"雷柏","value":"191:22684"}],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"229:40,42,46,52,72,73,88,111,112","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"229:40,42,46,52,72,73,88,111,112"},{"mobileShowName":"移动存储","tag":1,"text":"移动存储","value":"228:40,42,46,88"},{"mobileShowName":"办公设备","tag":1,"text":"办公设备","value":"230:52,72,73,111,112"}],"text":"分类"}},"232":{"classifyTag":0,"mobileShowName":"全部","parentId":231,"saleCatID":232,"saleCatItemList":[],"saleCatName":"全部","saleCategoryList":{"full":"232:5,28,29,68,100","sub":[],"text":"分类"}},"185":{"classifyTag":1,"mobileShowName":"全部","parentId":181,"saleCatID":185,"saleCatItemList":[{"full":"169:","id":169,"showAll":1,"sub":[],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"185:79,80,85,111,112","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"185:79,80,85,111,112"},{"mobileShowName":"游戏手柄","tag":1,"text":"游戏手柄","value":"182:80,85"},{"mobileShowName":"游戏键鼠","tag":1,"text":"游戏键鼠","value":"183:111,112"}],"text":"分类"}},"178":{"classifyTag":1,"mobileShowName":"全部","parentId":174,"saleCatID":178,"saleCatItemList":[{"full":"166:","id":166,"showAll":1,"sub":[],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"178:17,18,114","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"178:17,18,114"},{"mobileShowName":"智能手环","tag":1,"text":"智能手环","value":"175:17"},{"mobileShowName":"智能手表","tag":1,"text":"智能手表","value":"176:114"},{"mobileShowName":"智能眼镜","tag":1,"text":"智能眼镜","value":"177:18"}],"text":"分类"}},"154":{"classifyTag":0,"mobileShowName":"智能健康","parentId":153,"saleCatID":154,"saleCatItemList":[{"full":"140:18951,1","id":140,"showAll":1,"sub":[{"text":"乐心","value":"140:18951"},{"text":"魅族","value":"140:1"}],"text":"品牌"}],"saleCatName":"智能健康","saleCategoryList":{"full":"154:30,31,33,43,60,84,98,110,134","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"198:30,31,33,43,60,84,98,110"},{"mobileShowName":"体重秤／体脂秤","tag":0,"text":"体重秤／体脂秤","value":"190:30"},{"mobileShowName":"电动牙刷","tag":0,"text":"电动牙刷","value":"197:110"}],"text":"分类"}},"233":{"classifyTag":0,"mobileShowName":"耳机","parentId":231,"saleCatID":233,"saleCatItemList":[{"full":"193:1,882,14257,885,884,19410,883,17512,17513,22730,22738,19308,22845,9159","id":193,"showAll":1,"sub":[{"text":"魅族","value":"193:1"},{"text":"JBL","value":"193:882"},{"text":"Beats","value":"193:14257"},{"text":"铁三角","value":"193:885"},{"text":"先锋","value":"193:884"},{"text":"更多","value":"193:19410,883,17512,17513,22730,22738,19308,22845,9159"}],"text":"品牌"},{"full":"194:18938,522,23232,523,22755,22756,536,521,18947,22861","id":194,"showAll":1,"sub":[{"text":"入耳式","value":"194:18938,522,23232"},{"text":"头戴式","value":"194:523,22755,22756"},{"text":"挂耳式","value":"194:536,23232"},{"text":"耳塞式","value":"194:521"},{"text":"其他","value":"194:18947,22861"}],"text":"佩戴方式"},{"full":"196:524,526,533,19201,525,18077,18948,19200","id":196,"showAll":1,"sub":[{"text":"普通耳机","value":"196:524"},{"text":"线控耳机","value":"196:526"},{"text":"蓝牙耳机","value":"196:533,19201"},{"text":"HIFI耳机","value":"196:525"},{"text":"蓝牙运动耳机","value":"196:18077"},{"text":"其他","value":"196:18948,19200"}],"text":"功能用途"},{"full":"195:527,528","id":195,"showAll":1,"sub":[{"text":"带麦","value":"195:527"},{"text":"不带麦","value":"195:528"}],"text":"有无麦克风"}],"saleCatName":"耳机","saleCategoryList":{"full":"233:5","sub":[],"text":"分类"}},"175":{"classifyTag":1,"mobileShowName":"智能手环","parentId":174,"saleCatID":175,"saleCatItemList":[{"full":"160:18951,1","id":160,"showAll":1,"sub":[{"text":"乐心","value":"160:18951"},{"text":"魅族","value":"160:1"}],"text":"品牌"},{"full":"161:20696,20371,22377,21049,18920,20493,531,22376","id":161,"showAll":1,"sub":[{"text":"安卓","value":"161:20696,20371,22377,21049"},{"text":"iOS ","value":"161:18920,20493,531,20371,22376,21049"}],"text":"兼容平台"}],"saleCatName":"智能手环","saleCategoryList":{"full":"175:17","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"178:17,18,114"},{"mobileShowName":"智能手环","tag":1,"text":"智能手环","value":"175:17"},{"mobileShowName":"智能手表","tag":1,"text":"智能手表","value":"176:114"},{"mobileShowName":"智能眼镜","tag":1,"text":"智能眼镜","value":"177:18"}],"text":"分类"}},"228":{"classifyTag":1,"mobileShowName":"移动存储","parentId":227,"saleCatID":228,"saleCatItemList":[{"full":"191:18107,18932","id":191,"showAll":1,"sub":[{"text":"东芝","value":"191:18107"},{"text":"三星","value":"191:18932"}],"text":"品牌"}],"saleCatName":"移动存储","saleCategoryList":{"full":"228:40,42,46,88","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"229:40,42,46,52,72,73,88,111,112"},{"mobileShowName":"移动存储","tag":1,"text":"移动存储","value":"228:40,42,46,88"},{"mobileShowName":"办公设备","tag":1,"text":"办公设备","value":"230:52,72,73,111,112"}],"text":"分类"}},"224":{"classifyTag":1,"mobileShowName":"魅族背包","parentId":222,"saleCatID":224,"saleCatItemList":[{"full":"190:1","id":190,"showAll":1,"sub":[{"text":"魅族","value":"190:1"}],"text":"品牌"}],"saleCatName":"魅族背包","saleCategoryList":{"full":"224:92","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"223:48,55,56,83,87,92,109,116"},{"mobileShowName":"魅族背包","tag":1,"text":"魅族背包","value":"224:92"},{"mobileShowName":"自拍杆","tag":1,"text":"自拍杆","value":"225:87"},{"mobileShowName":"手机镜头","tag":1,"text":"手机镜头","value":"226:83"}],"text":"分类"}},"182":{"classifyTag":1,"mobileShowName":"游戏手柄","parentId":181,"saleCatID":182,"saleCatItemList":[{"full":"170:17898,17899,22678,20737,19088","id":170,"showAll":1,"sub":[{"text":"新游","value":"170:17898,17899"},{"text":"联想","value":"170:22678"},{"text":"北通","value":"170:20737"},{"text":"飞智","value":"170:19088"}],"text":"品牌"},{"full":"176:17895,17905,17894","id":176,"showAll":1,"sub":[{"text":"无线","value":"176:17895,17905,17894"}],"text":"有无线"}],"saleCatName":"游戏手柄","saleCategoryList":{"full":"182:80,85","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"185:79,80,85,111,112"},{"mobileShowName":"游戏手柄","tag":1,"text":"游戏手柄","value":"182:80,85"},{"mobileShowName":"游戏键鼠","tag":1,"text":"游戏键鼠","value":"183:111,112"}],"text":"分类"}},"187":{"classifyTag":0,"mobileShowName":"移动电源","parentId":186,"saleCatID":187,"saleCatItemList":[],"saleCatName":"移动电源","saleCategoryList":{"full":"187:26","sub":[],"text":"分类"}},"237":{"classifyTag":0,"mobileShowName":"壳膜套","parentId":186,"saleCatID":237,"saleCatItemList":[{"full":"205:21897,22229,18686,20099,22228,20790,20384,23685,23177,22396,21856","id":205,"showAll":1,"sub":[{"text":"魅族系列","value":"205:21897,22229,18686,20099"},{"text":"魅蓝系列","value":"205:22228,20790,20384,23685,23177,22396,21856"}],"text":"适用机型"}],"saleCatName":"壳膜套","saleCategoryList":{"full":"237:21","sub":[],"text":"分类"}},"156":{"classifyTag":0,"mobileShowName":"智能厨房","parentId":153,"saleCatID":156,"saleCatItemList":[{"full":"186:17984,18951","id":186,"showAll":1,"sub":[{"text":"沁麟","value":"186:17984"},{"text":"乐心","value":"186:18951"}],"text":"品牌"}],"saleCatName":"智能厨房","saleCategoryList":{"full":"156:45,50,58,133","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"203:45,50,58,133"},{"mobileShowName":"电饭煲","tag":0,"text":"电饭煲","value":"199:45"},{"mobileShowName":"养生壶","tag":0,"text":"养生壶","value":"200:133"},{"mobileShowName":"料理机","tag":0,"text":"料理机","value":"201:50"}],"text":"分类"}},"234":{"classifyTag":0,"mobileShowName":"音箱","parentId":231,"saleCatID":234,"saleCatItemList":[{"full":"197:1,882,14257","id":197,"showAll":1,"sub":[{"text":"魅族","value":"197:1"},{"text":"JBL","value":"197:882"},{"text":"Beats","value":"197:14257"}],"text":"品牌"},{"full":"199:1589,23163,22765,22766,22767,23165,7837","id":199,"showAll":1,"sub":[{"text":"蓝牙","value":"199:1589,23163,22765,22766,22767"},{"text":"WIFI","value":"199:22765,22766"},{"text":"音频接口","value":"199:23163,23165,22767"},{"text":"其他","value":"199:7837,22766"}],"text":"连接方式"},{"full":"198:22142,22141","id":198,"showAll":1,"sub":[{"text":"不支持","value":"198:22142"},{"text":"支持","value":"198:22141"}],"text":"是否支持蓝牙"}],"saleCatName":"音箱","saleCategoryList":{"full":"234:28,29","sub":[],"text":"分类"}},"176":{"classifyTag":1,"mobileShowName":"智能手表","parentId":174,"saleCatID":176,"saleCatItemList":[{"full":"162:1,18951","id":162,"showAll":1,"sub":[{"text":"魅族","value":"162:1"},{"text":"乐心","value":"162:18951"}],"text":"品牌"}],"saleCatName":"智能手表","saleCategoryList":{"full":"176:114","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"178:17,18,114"},{"mobileShowName":"智能手环","tag":1,"text":"智能手环","value":"175:17"},{"mobileShowName":"智能手表","tag":1,"text":"智能手表","value":"176:114"},{"mobileShowName":"智能眼镜","tag":1,"text":"智能眼镜","value":"177:18"}],"text":"分类"}},"230":{"classifyTag":1,"mobileShowName":"办公设备","parentId":227,"saleCatID":230,"saleCatItemList":[{"full":"191:19747,22684","id":191,"showAll":1,"sub":[{"text":"ORICO","value":"191:19747"},{"text":"雷柏","value":"191:22684"}],"text":"品牌"}],"saleCatName":"办公设备","saleCategoryList":{"full":"230:52,72,73,111,112","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"229:40,42,46,52,72,73,88,111,112"},{"mobileShowName":"移动存储","tag":1,"text":"移动存储","value":"228:40,42,46,88"},{"mobileShowName":"办公设备","tag":1,"text":"办公设备","value":"230:52,72,73,111,112"}],"text":"分类"}},"183":{"classifyTag":1,"mobileShowName":"游戏键鼠","parentId":181,"saleCatID":183,"saleCatItemList":[{"full":"174:22684","id":174,"showAll":1,"sub":[{"text":"雷柏","value":"174:22684"}],"text":"品牌"}],"saleCatName":"游戏键鼠","saleCategoryList":{"full":"183:111,112","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"185:79,80,85,111,112"},{"mobileShowName":"游戏手柄","tag":1,"text":"游戏手柄","value":"182:80,85"},{"mobileShowName":"游戏键鼠","tag":1,"text":"游戏键鼠","value":"183:111,112"}],"text":"分类"}},"225":{"classifyTag":1,"mobileShowName":"自拍杆","parentId":222,"saleCatID":225,"saleCatItemList":[{"full":"190:1","id":190,"showAll":1,"sub":[{"text":"魅族","value":"190:1"}],"text":"品牌"}],"saleCatName":"自拍杆","saleCategoryList":{"full":"225:87","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"223:48,55,56,83,87,92,109,116"},{"mobileShowName":"魅族背包","tag":1,"text":"魅族背包","value":"224:92"},{"mobileShowName":"自拍杆","tag":1,"text":"自拍杆","value":"225:87"},{"mobileShowName":"手机镜头","tag":1,"text":"手机镜头","value":"226:83"}],"text":"分类"}},"239":{"classifyTag":0,"mobileShowName":"数据线","parentId":186,"saleCatID":239,"saleCatItemList":[{"full":"206:1600,867","id":206,"showAll":1,"sub":[{"text":"Type-C","value":"206:1600"},{"text":"Micro USB","value":"206:867"}],"text":"接口类型"},{"full":"207:20259,1656,22448,1659,1657","id":207,"showAll":1,"sub":[{"text":"转接头","value":"207:20259"},{"text":"1米","value":"207:1656,22448"},{"text":"1米以上","value":"207:1659,1657"}],"text":"缆线长度"}],"saleCatName":"数据线","saleCategoryList":{"full":"239:22","sub":[],"text":"分类"}},"226":{"classifyTag":1,"mobileShowName":"手机镜头","parentId":222,"saleCatID":226,"saleCatItemList":[{"full":"190:20060,20061","id":190,"showAll":1,"sub":[{"text":"猎奇","value":"190:20060,20061"}],"text":"品牌"}],"saleCatName":"手机镜头","saleCategoryList":{"full":"226:83","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"223:48,55,56,83,87,92,109,116"},{"mobileShowName":"魅族背包","tag":1,"text":"魅族背包","value":"224:92"},{"mobileShowName":"自拍杆","tag":1,"text":"自拍杆","value":"225:87"},{"mobileShowName":"手机镜头","tag":1,"text":"手机镜头","value":"226:83"}],"text":"分类"}},"177":{"classifyTag":1,"mobileShowName":"智能眼镜","parentId":174,"saleCatID":177,"saleCatItemList":[{"full":"164:18518,18070","id":164,"showAll":1,"sub":[{"text":"暴风魔镜","value":"164:18518"},{"text":"纽曼","value":"164:18070"}],"text":"品牌"}],"saleCatName":"智能眼镜","saleCategoryList":{"full":"177:18","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"178:17,18,114"},{"mobileShowName":"智能手环","tag":1,"text":"智能手环","value":"175:17"},{"mobileShowName":"智能手表","tag":1,"text":"智能手表","value":"176:114"},{"mobileShowName":"智能眼镜","tag":1,"text":"智能眼镜","value":"177:18"}],"text":"分类"}},"158":{"classifyTag":0,"mobileShowName":"智能出行","parentId":153,"saleCatID":158,"saleCatItemList":[{"full":"188:1,19603,19747,18070,17984","id":188,"showAll":1,"sub":[{"text":"魅族","value":"188:1"},{"text":"罗马仕","value":"188:19603"},{"text":"ORICO","value":"188:19747"},{"text":"纽曼","value":"188:18070"},{"text":"沁麟","value":"188:17984"}],"text":"品牌"}],"saleCatName":"智能出行","saleCategoryList":{"full":"158:15,23,74,90,93,129,130,131","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"209:15,23,74,90,93,129,130,131"},{"mobileShowName":"行车记录仪","tag":0,"text":"行车记录仪","value":"211:15"},{"mobileShowName":"车载净化器","tag":0,"text":"车载净化器","value":"212:129"},{"mobileShowName":"车充","tag":0,"text":"车充","value":"214:23,131"}],"text":"分类"}},"240":{"classifyTag":0,"mobileShowName":"电源适配器","parentId":186,"saleCatID":240,"saleCatItemList":[{"full":"208:1,19747,19603,18070","id":208,"showAll":1,"sub":[{"text":"魅族","value":"208:1"},{"text":"ORICO","value":"208:19747"},{"text":"ROMOSS/罗马仕","value":"208:19603"},{"text":"纽曼","value":"208:18070"}],"text":"品牌"}],"saleCatName":"电源适配器","saleCategoryList":{"full":"240:23","sub":[],"text":"分类"}},"159":{"classifyTag":0,"mobileShowName":"智能娱乐","parentId":153,"saleCatID":159,"saleCatItemList":[{"full":"189:1","id":189,"showAll":1,"sub":[{"text":"魅族","value":"189:1"}],"text":"品牌"}],"saleCatName":"智能娱乐","saleCategoryList":{"full":"159:4,14,19,52,91,96","sub":[{"mobileShowName":"全部","tag":0,"text":"全部","value":"215:4,14,19,52,91,96"},{"mobileShowName":"电视盒子","tag":0,"text":"电视盒子","value":"216:96"},{"mobileShowName":"路由器","tag":0,"text":"路由器","value":"217:4"}],"text":"分类"}},"203":{"classifyTag":1,"mobileShowName":"全部","parentId":156,"saleCatID":203,"saleCatItemList":[{"full":"186:17984,18951","id":186,"showAll":1,"sub":[{"text":"沁麟","value":"186:17984"},{"text":"乐心","value":"186:18951"}],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"203:45,50,58,133","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"203:45,50,58,133"},{"mobileShowName":"电饭煲","tag":1,"text":"电饭煲","value":"199:45"},{"mobileShowName":"养生壶","tag":1,"text":"养生壶","value":"200:133"},{"mobileShowName":"料理机","tag":1,"text":"料理机","value":"201:50"}],"text":"分类"}},"215":{"classifyTag":1,"mobileShowName":"全部","parentId":159,"saleCatID":215,"saleCatItemList":[{"full":"189:1","id":189,"showAll":1,"sub":[{"text":"魅族","value":"189:1"}],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"215:4,14,19,52,91,96","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"215:4,14,19,52,91,96"},{"mobileShowName":"电视盒子","tag":1,"text":"电视盒子","value":"216:96"},{"mobileShowName":"路由器","tag":1,"text":"路由器","value":"217:4"}],"text":"分类"}},"198":{"classifyTag":1,"mobileShowName":"全部","parentId":154,"saleCatID":198,"saleCatItemList":[{"full":"140:18951,1","id":140,"showAll":1,"sub":[{"text":"乐心","value":"140:18951"},{"text":"魅族","value":"140:1"}],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"198:30,31,33,43,60,84,98,110","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"198:30,31,33,43,60,84,98,110"},{"mobileShowName":"体重秤／体脂秤","tag":1,"text":"体重秤／体脂秤","value":"190:30"},{"mobileShowName":"电动牙刷","tag":1,"text":"电动牙刷","value":"197:110"}],"text":"分类"}},"209":{"classifyTag":1,"mobileShowName":"全部","parentId":158,"saleCatID":209,"saleCatItemList":[{"full":"188:1,19603,19747,18070,17984","id":188,"showAll":1,"sub":[{"text":"魅族","value":"188:1"},{"text":"罗马仕","value":"188:19603"},{"text":"ORICO","value":"188:19747"},{"text":"纽曼","value":"188:18070"},{"text":"沁麟","value":"188:17984"}],"text":"品牌"}],"saleCatName":"全部","saleCategoryList":{"full":"209:15,23,74,90,93,129,130,131","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"209:15,23,74,90,93,129,130,131"},{"mobileShowName":"行车记录仪","tag":1,"text":"行车记录仪","value":"211:15"},{"mobileShowName":"车载净化器","tag":1,"text":"车载净化器","value":"212:129"},{"mobileShowName":"车充","tag":1,"text":"车充","value":"214:23,131"}],"text":"分类"}},"199":{"classifyTag":1,"mobileShowName":"电饭煲","parentId":156,"saleCatID":199,"saleCatItemList":[{"full":"185:17984","id":185,"showAll":1,"sub":[{"text":"沁麟","value":"185:17984"}],"text":"品牌"}],"saleCatName":"电饭煲","saleCategoryList":{"full":"199:45","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"203:45,50,58,133"},{"mobileShowName":"电饭煲","tag":1,"text":"电饭煲","value":"199:45"},{"mobileShowName":"养生壶","tag":1,"text":"养生壶","value":"200:133"},{"mobileShowName":"料理机","tag":1,"text":"料理机","value":"201:50"}],"text":"分类"}},"190":{"classifyTag":1,"mobileShowName":"体重秤／体脂秤","parentId":154,"saleCatID":190,"saleCatItemList":[{"full":"177:880,18951","id":177,"showAll":1,"sub":[{"text":"云麦","value":"177:880"},{"text":"乐心","value":"177:18951"}],"text":"品牌"}],"saleCatName":"体重秤／体脂秤","saleCategoryList":{"full":"190:30","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"198:30,31,33,43,60,84,98,110"},{"mobileShowName":"体重秤／体脂秤","tag":1,"text":"体重秤／体脂秤","value":"190:30"},{"mobileShowName":"电动牙刷","tag":1,"text":"电动牙刷","value":"197:110"}],"text":"分类"}},"216":{"classifyTag":1,"mobileShowName":"电视盒子","parentId":159,"saleCatID":216,"saleCatItemList":[{"full":"189:1","id":189,"showAll":1,"sub":[{"text":"魅族","value":"189:1"}],"text":"品牌"}],"saleCatName":"电视盒子","saleCategoryList":{"full":"216:96","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"215:4,14,19,52,91,96"},{"mobileShowName":"电视盒子","tag":1,"text":"电视盒子","value":"216:96"},{"mobileShowName":"路由器","tag":1,"text":"路由器","value":"217:4"}],"text":"分类"}},"211":{"classifyTag":1,"mobileShowName":"行车记录仪","parentId":158,"saleCatID":211,"saleCatItemList":[{"full":"188:1,19603,18070,17984","id":188,"showAll":1,"sub":[{"text":"魅族","value":"188:1"},{"text":"罗马仕","value":"188:19603"},{"text":"纽曼","value":"188:18070"},{"text":"沁麟","value":"188:17984"}],"text":"品牌"}],"saleCatName":"行车记录仪","saleCategoryList":{"full":"211:15","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"209:15,23,74,90,93,129,130,131"},{"mobileShowName":"行车记录仪","tag":1,"text":"行车记录仪","value":"211:15"},{"mobileShowName":"车载净化器","tag":1,"text":"车载净化器","value":"212:129"},{"mobileShowName":"车充","tag":1,"text":"车充","value":"214:23,131"}],"text":"分类"}},"217":{"classifyTag":1,"mobileShowName":"路由器","parentId":159,"saleCatID":217,"saleCatItemList":[{"full":"189:1","id":189,"showAll":1,"sub":[{"text":"魅族","value":"189:1"}],"text":"品牌"}],"saleCatName":"路由器","saleCategoryList":{"full":"217:4","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"215:4,14,19,52,91,96"},{"mobileShowName":"电视盒子","tag":1,"text":"电视盒子","value":"216:96"},{"mobileShowName":"路由器","tag":1,"text":"路由器","value":"217:4"}],"text":"分类"}},"200":{"classifyTag":1,"mobileShowName":"养生壶","parentId":156,"saleCatID":200,"saleCatItemList":[{"full":"186:17984","id":186,"showAll":1,"sub":[{"text":"沁麟","value":"186:17984"}],"text":"品牌"}],"saleCatName":"养生壶","saleCategoryList":{"full":"200:133","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"203:45,50,58,133"},{"mobileShowName":"电饭煲","tag":1,"text":"电饭煲","value":"199:45"},{"mobileShowName":"养生壶","tag":1,"text":"养生壶","value":"200:133"},{"mobileShowName":"料理机","tag":1,"text":"料理机","value":"201:50"}],"text":"分类"}},"212":{"classifyTag":1,"mobileShowName":"车载净化器","parentId":158,"saleCatID":212,"saleCatItemList":[{"full":"188:17984","id":188,"showAll":1,"sub":[{"text":"沁麟","value":"188:17984"}],"text":"品牌"}],"saleCatName":"车载净化器","saleCategoryList":{"full":"212:129","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"209:15,23,74,90,93,129,130,131"},{"mobileShowName":"行车记录仪","tag":1,"text":"行车记录仪","value":"211:15"},{"mobileShowName":"车载净化器","tag":1,"text":"车载净化器","value":"212:129"},{"mobileShowName":"车充","tag":1,"text":"车充","value":"214:23,131"}],"text":"分类"}},"201":{"classifyTag":1,"mobileShowName":"料理机","parentId":156,"saleCatID":201,"saleCatItemList":[{"full":"186:17984","id":186,"showAll":1,"sub":[{"text":"沁麟","value":"186:17984"}],"text":"品牌"}],"saleCatName":"料理机","saleCategoryList":{"full":"201:50","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"203:45,50,58,133"},{"mobileShowName":"电饭煲","tag":1,"text":"电饭煲","value":"199:45"},{"mobileShowName":"养生壶","tag":1,"text":"养生壶","value":"200:133"},{"mobileShowName":"料理机","tag":1,"text":"料理机","value":"201:50"}],"text":"分类"}},"214":{"classifyTag":1,"mobileShowName":"车充","parentId":158,"saleCatID":214,"saleCatItemList":[{"full":"188:1,19603,19747,18070","id":188,"showAll":1,"sub":[{"text":"魅族","value":"188:1"},{"text":"罗马仕","value":"188:19603"},{"text":"ORICO","value":"188:19747"},{"text":"纽曼","value":"188:18070"}],"text":"品牌"}],"saleCatName":"车充","saleCategoryList":{"full":"214:23,131","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"209:15,23,74,90,93,129,130,131"},{"mobileShowName":"行车记录仪","tag":1,"text":"行车记录仪","value":"211:15"},{"mobileShowName":"车载净化器","tag":1,"text":"车载净化器","value":"212:129"},{"mobileShowName":"车充","tag":1,"text":"车充","value":"214:23,131"}],"text":"分类"}},"197":{"classifyTag":1,"mobileShowName":"电动牙刷","parentId":154,"saleCatID":197,"saleCatItemList":[{"full":"184:23079","id":184,"showAll":1,"sub":[{"text":"力博得","value":"184:23079"}],"text":"品牌"}],"saleCatName":"电动牙刷","saleCategoryList":{"full":"197:110","sub":[{"mobileShowName":"全部","tag":1,"text":"全部","value":"198:30,31,33,43,60,84,98,110"},{"mobileShowName":"体重秤／体脂秤","tag":1,"text":"体重秤／体脂秤","value":"190:30"},{"mobileShowName":"电动牙刷","tag":1,"text":"电动牙刷","value":"197:110"}],"text":"分类"}}},active: 73,totalPage:10,features:{}}

</script>
<script src="{{ asset('home/meizu/js/search-08821fe9a8.js')}}"></script>
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//sccom.res.meizu.com/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
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
</script>    </body>
    </html>
