<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/frontend/css/css.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/frontend/js/jquery-1.9.1.min.js"></script>
    <script src="/frontend/js/jquery.flexslider-min.js"></script>
    <script src="/frontend/js/kxbdSuperMarquee.js"></script>
    <script type="text/javascript" src="/frontend/js/index.js"></script>
    @yield('headlibs')
</head>
<body>
<div class="topbar">
    <div class="box">
        <span>您好， 欢迎来到98饮品网！</span>
        <i><a href="#">设为首页</a>  |  <a style="cursor:pointer;" onclick="javascript:AddFavorite(window.location, document.title)" rel="nofollow">加入收藏夹</a></i>
    </div>
</div>
<div class="header">
    <div class="box">
        <div class="logo"><a href="/"><img src="/frontend/images/logo.jpg" alt="品牌" /></a></div>
        <div class="h_search">
            <form name='formsearch' action="/sprodlist/all/" method="post">
                {{csrf_field()}}
                <input type="text" name="q" class="h_text"  value="饮品品牌" onclick="if(this.value=='饮品品牌'){this.value='';this.className='h_text1'}" onblur="if(this.value==''){this.value='饮品品牌';this.className='h_text'}"/>
                <input type="submit" value="搜 索"  class="h_search_button"/>
            </form>
        </div>
        <div class="h_weixin">WAP端二维码<br />加盟服务热线<br /><strong>4008-896-216</strong></div>
    </div>
</div>
<script>
    $(function(){
        $('.all_menu .all_menu_li','.menu').mouseenter(function(){
            $(this).addClass('current').siblings().removeClass('current');
        });
        $('.all_menu','.menu').mouseleave(function(){
            $(this).find('.all_menu_li').removeClass('current');
        });
        $('.all_sort_menu .all_sort_menu_h:last').addClass('qline');
    });
</script>
<div class="menu">
    <div class="box">
        <ul class="all_menu">
            <li class="all_menu_li"><span><a href="/">首 页</a></span></li>
            <li class="all_menu_li"><span><a href="/pinpai/">品牌大全</a></span></li>
            <li class="all_menu_li"><span><a href="/zhinan/">饮品店加盟指南</a></span></li>
            <li class="all_menu_li"><span><a href="/yinpinjm/">饮品店加盟</a></span></li>
            <li class="all_menu_li"><span><a href="/news/">饮品品牌新闻</a></span></li>
            <li class="all_menu_li"><span><a href="/feiyong/">饮品加盟费用</a></span></li>
            <li class="all_menu_li"><span><a href="/jmanli/">饮品加盟案例</a></span></li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="footer_nav">
    <a href="#">在线留言</a>  |  <a href="/feiyong/">饮品店加盟费用</a>  |  <a href="#">联系我们</a>  |  <a href="/storage/sitemap.xml">网站地图</a>  |  <a href="/paihangbang/">饮品品牌排行榜</a>  |  <a href="/news/">饮品品牌新闻</a>
</div>
<div class="footer">
    <div class="box clearfix">
        <div class="footer_logo"><img src="/frontend/images/f_logo.gif" /></div>
        <div class="footer_c">
            <p>copyright © 2012-2019 零食加盟品牌网 Inc. All rights reserved.</p>
            <p>  <a  href="http://www.miibeian.gov.cn/" rel="nofollow"  />沪ICP备15007550号-9</a>  版权所有 上海快盈网络科技有限公司</p>
            <p>加盟服务热线：4008-896-216</p>
        </div>
        <div class="footer_r">
            <ul>
                <li><a href="#"><img src="/frontend/images/f_img1.gif" width="106" height="41" /></a></li>
                <li><a href="#"><img src="/frontend/images/f_img2.gif" width="100" height="41" /></a></li>
                <li><a href="#"><img src="/frontend/images/f_img3.gif" width="124" height="" /></a></li>
            </ul>
            <p>提示您：创业有风险，投资需谨慎！<br />
                （多打电话、多咨询、多考察，可减低风险）</p>
        </div>
    </div>
</div>
</body>
</html>
