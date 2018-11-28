<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="stylesheet" type="text/css" href="https://c.mipcdn.com/static/v1/mip.css">
    <link href="{{str_replace('www.','mip.',config('app.url'))}}/mobile/css/mipcommon.css" rel="stylesheet" type="text/css"/>
    @yield('headlibs')
</head>
<body>
<div class="header clearfix mtop84">
    <div class="search clearfix">
        <div class="city fl">
            <a href="/"><mip-img src="/mobile/images/nav-logo2.png" alt="中国教育招商网"></mip-img></a>
        </div>
        <div class="searchCon fl">
            <mip-form url="{{str_replace('www.','mip.',config('app.url'))}}/sprodlist/all/" target="_self" method="post">
                {{csrf_field()}}
            <div class="ipt-box"></div>
            <input class="ipt-placeholder" placeholder="输入您想找的项目" />
            <button type="submit" class="search_btn"></button>
            </mip-form>
        </div>
        <mip-accordion sessions-key="mip_1" animatetime="0.24">
            <section>
            <div class="message fr">
            <b>项目分类</b>
        </div>
                <div class="mip-accordion-content d_nav">
                    <ul>
                        <li><a href="/" target="_self"><span>首页</span></a></li>
                        <li><a href="/xm/" target="_self"><span>项目大全</span></a></li>
                        <li><a href="/guide/" target="_self"><span>加盟指南</span></a></li>
                        <li><a href="/analysis/" target="_self"><span>投资分析</span></a></li>
                        <li><a href="/management/" target="_self"><span>经营管理</span></a></li>
                        <li><a href="/news/" target="_self"><span>品牌新闻</span></a></li>
                        <li><a href="/paihangbang/" target="_self"><span>品牌排行榜</span></a></li>
                        <li>热门行业</li>
                        <li><a href="/zaojiao/" target="_self"><span>早教加盟</span></a></li>
                        <li><a href="/shaoer/" target="_self"><span>少儿英语加盟</span></a></li>
                        <li><a href="/youeryuan/" target="_self"><span>幼儿园加盟</span></a></li>
                        <li><a href="/qianneng/" target="_self"><span>潜能教育</span></a></li>
                        <li><a href="/xuedifudao/" target="_self"><span>学习辅导</span></a></li>
                        <li><a href="/wudao/" target="_self"><span>舞蹈培训</span></a></li>
                        <li><a href="/yishujiaoyu/" target="_self"><span>艺术教育</span></a></li>
                        <li><a href="/shaoerbiancheng/" target="_self"><span>少儿编程</span></a></li>
                        <li><a href="/taiquandao/" target="_self"><span>跆拳道加盟</span></a></li>
                        <li><a href="/zuowen/" target="_self"><span>作文培训</span></a></li>
                        </li>
                    </ul>
                </div>
            </section>
        </mip-accordion>
    </div>
</div>
@yield('main_content')
<footer>
    <div class="link-box ">
        <a href="http://www.jjedu.com.cn/" class="foot-link">电脑版</a><span class="v-line">|</span>
        <a href="/xm/" class="foot-link">教育品牌</a><span class="v-line">|</span>
        <a href="/guide/" class="foot-link">加盟指南</a><span class="v-line">|</span>
        <a href="/analysis/" class="foot-link">投资分析</a><span class="v-line">|</span>
        <a href="/management/" class="foot-link">经营管理</a>
    </div>
    <p class="firm clearfix">
        <span class="foot-text mgr15">上海桥梓网络科技有限公司 	 版权所有</span>
    </p>
</footer>
<script src="https://c.mipcdn.com/static/v1/mip.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-form/mip-form.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-accordion/mip-accordion.js"></script>
<script src="https://mipcache.bdstatic.com/static/v1/mip-link/mip-link.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-lightbox/mip-lightbox.js"></script>
<script src="https://c.mipcdn.com/static/v1/mip-fixed/mip-fixed.js"></script>
<script src="https://mipcache.bdstatic.com/static/v1/mip-stats-baidu/mip-stats-baidu.js"></script>
@yield('footlibs')
</body>
</html>
