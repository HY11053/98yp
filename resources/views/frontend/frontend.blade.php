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
        <span>您好， 欢迎来到零食加盟品牌网！</span>
        <i><a href="#">设为首页</a>  |  <a style="cursor:pointer;" onclick="javascript:AddFavorite(window.location, document.title)" rel="nofollow">加入收藏夹</a></i>
    </div>
</div>
<div class="header">
    <div class="box">
        <div class="logo"><a href="/"><img src="/frontend/images/logo.jpg" alt="品牌" /></a></div>
        <div class="h_search">
            <form name='formsearch' action="/plus/search.php">
                <input type="text" name="q" class="h_text"  value="一扫光" onclick="if(this.value=='一扫光'){this.value='';this.className='h_text1'}" onblur="if(this.value==''){this.value='一扫光';this.className='h_text'}"/>
                <input type="submit" value="搜 索"  class="h_search_button"/>
            </form>
            <div class="h_search_hot">热门推荐：<a href="/fenlei/197.html">良品铺子</a><a href="/fenlei/1392.html">三只松鼠</a><a href="/fenlei/461.html">老婆大人</a><a href="/fenlei/1973.html">好想来</a><a href="/fenlei/1306.html">一扫光</a><a href="/fenlei/1977.html">啵啵嘴</a></div>
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
            <li class="all_menu_li">
                <span><a href="/brand/">品牌大全</a></span>
                <ul class="menu_xs">
                    <li><a href="/lingshi/">零食品牌加盟</a></li> <li><a href="/ganguo/">干果加盟</a></li>
                </ul>
            </li><li class="all_menu_li">
                <span><a href="/jmzn/">零食加盟指南</a></span>
                <ul class="menu_xs">
                    <li><a href="/hangyezx/">零食行业资讯</a></li> <li><a href="/kaidianwd/">零食开店问答</a></li>
                </ul>
            </li><li class="all_menu_li">
                <span><a href="/lingshidianjm/">零食店加盟</a></span>
                <ul class="menu_xs">
                    <li><a href="/lirun/">零食店利润</a></li> <li><a href="/feiyong/">零食加盟费多少</a></li>
                </ul>
            </li><li class="all_menu_li">
                <span><a href="/ppxw/">零食品牌新闻</a></span>
                <ul class="menu_xs">

                </ul>
            </li><li class="all_menu_li">
                <span><a href="/ppal/">零食品牌案例</a></span>
                <ul class="menu_xs">

                </ul>
            </li>
            <li class="all_menu_li">
                <span><a href="/fenlei/">零食品牌大全</a></span>
            </li>
        </ul>
    </div>
</div>
@yield('main_content')
<div class="footer_nav">
    <a href="http://swt.ysg.cn/LR/Chatpre.aspx?id=KMM23720509">在线留言</a>  |  <a href="/tags.html">TAG标签</a>  |  <a href="#">联系我们</a>  |  <a href="/cpzh/">零食产品展示</a>  <a href="http://www.ganxi360.net/">干洗店加盟</a>|  <a href="/sitemap.xml">网站地图</a>
</div>
<div class="footer">
    <div class="box clearfix">
        <div class="footer_logo"><img src="/frontend/images/f_logo.gif" /></div>
        <div class="footer_c">
            <p>copyright © 2012-2019 零食加盟品牌网 Inc. All rights reserved.</p>
            <p>  <a  href="http://www.miibeian.gov.cn/" rel="nofollow"  />沪ICP备15007550号-9</a>  版权所有 上海卡哇伊实业有限公司</p>
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
