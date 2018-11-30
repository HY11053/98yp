<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mobile/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    @yield('headlibs')
</head>
<body>
<nav class="navbar navbar-default" style="margin:0px; padding:0px; position:relative;" >

    <div style="line-height:0;"><img src="/mobile/images/logo.jpg" width="100%"/></div>

    <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style="position:absolute; right:0; top:14px;" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/">首页</a></li>
            <li><a href="/pinpai/">品牌大全</a></li>
            <li><a href="/zhinan/">零食加盟指南</a></li>
            <li><a href="/wenda/">开店问答</a></li>
            <li><a href="/feiyong/">开店费用</a></li>
            <li><a href="/lirun/">开店利润</a></li>
            <li><a href="/yinpinjm/">饮品加盟</a></li>
            <li><a href="/news/">品牌新闻</a></li>
            <li><a href="/jmanli/">加盟案例</a></li>
        </ul>
    </div>

</nav>
@yield('main_content')
<div class="container" id="liuyan">
    <div class="row">
        <div class="col-xs-12">
            <div class="well well-sm re_well-sm"><span class="glyphicon glyphicon-envelope"></span> <b>在线留言(客服将第一时间给您回电)</b></div>

            <div class="forms">
                <form action="http://msg.3198.com/store.do?ident=ysg" onsubmit="return tjcheck3()" method="post">

                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input type="text"  class="form-control"  name="username" id="truename" placeholder="您的称呼">

                        </div>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                            <input type="text" name="iphone" id="telephone" class="form-control"   placeholder="您的电话">

                        </div>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-file"></span></div>
                            <textarea class="form-control" rows="3" name="content" id="content"  placeholder="备注信息" ></textarea>
                        </div>
                    </div>
                    <button type="submit"   value="申请加盟" class="btn btn-primary col-xs-4 col-xs-offset-4">提交</button>

                </form>

            </div>


        </div>
    </div>

</div>

<footer>
    <div class="bottomFooter">
        <div class="container">
            <div class="row cal_trl">
                <div class="col-xs12 bg-primary">
                    <a class="tel_call" href="tel:4008-896-216">
                        <h1 class="glyphicon glyphicon-earphone col-xs-3 col-xs-offset-1"></h1>
                        <h4 class="col-xs-8">点击拨打咨询电话</h4>
                        <h2>4008-896-216</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="address_info relative">
            <div class="address_pic1 absolute"></div>
            <!--<div class="address_pic2 absolute"></div>-->
            <address class="col-xs-offset-5"><span class="glyphicon glyphicon-earphone"></span> 电话： 4008-896-216 <br/> <span class="glyphicon glyphicon-print"></span> 传真：021-60820909<br />
                <span class="glyphicon glyphicon-map-marker"></span> 上海卡哇伊实业有限公司<br />
                <span class="glyphicon glyphicon-ok-circle"></span> 沪ICP备14001404号<br />
            </address>
            <a href="javascript:void(0);" target="_blank" onclick="openZoosUrl();return false;"class="address_online absolute" target="_blank"></a>
            <a href="javascript:void(0)"  onclick="openZoosUrl();return false;" class="hAbout absolute" target="_self"></a>
        </div>
    </div>
</footer>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/mobile/js/index.js"></script>
</body>
</html>
