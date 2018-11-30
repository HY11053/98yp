@extends('mobile.mobile')
@section('title'){{ config('app.webname', '98饮品网') }}@stop
@section('keywords'){{ config('app.keywords', '98饮品网') }}@stop
@section('description'){{ config('app.description', '98饮品网') }}@stop
@section('main_content')
<p class="bg-primary">&nbsp;&nbsp;<em class="col-xs-10"><span class="glyphicon glyphicon-phone-alt ">&nbsp;</span><a href="tel:4008-896-216">拨打咨询电话-4008-896-216</a></em><a href="javascript:void(0);" onclick="openZoosUrl();return false;" class="col-xs-1"><span class="glyphicon glyphicon-comment "></span></a></p>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/1.jpg" alt="一点点奶茶"></a> </div>
        <div class="item"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/2.jpg" alt="COCO奶茶"></a></div>
        <div class="item"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobile/images/3.jpg" alt="网红奶茶"></a></div>
    </div>
</div>
<!--幻灯end-->
<p class="bg-primary">  <span class="glyphicon glyphicon-comment"> </span><a href="javascript:void(0);" onclick="openZoosUrl();return false;">免费领取资料</a></p>
<div class="container">
    <div class="row">
        <ul class="clearfix-m col-xs-12">

            <li class="col-xs-3">
                <a href="/zhinan/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/zl.png"></span><span class="nav-font">加盟指南</span></a>
            </li>
            <li class="col-xs-3"><a href="/fenlei/"><span class="nav-img"><img class="img-responsive" src="/mobile/images/dt.png"></span><span class="nav-font">品牌大全</span></a>
            </li>
            <li class="col-xs-3">
                <a href="/pinpai/">
                    <span class="nav-img"><img class="img-responsive" src="/mobile/images/lc.png"></span>
                    <span class="nav-font">饮品品牌</span>
                </a>
            </li>
            <li class="col-xs-3">
                <a href="/lirun/">
                    <span class="nav-img"><img class="img-responsive" src="/mobile/images/js.png"></span>
                    <span class="nav-font">开店利润</span>
                </a>
            </li>
            <li class="col-xs-3">
                <a href="/wenda/">
                    <span class="nav-img"><img class="img-responsive" src="/mobile/images/zc.png"></span>
                    <span class="nav-font">开店问答</span>
                </a>
            </li>
            <li class="col-xs-3">
                <a href="/yinpinjm/">
                    <span class="nav-img"><img class="img-responsive" src="/mobile/images/fa.png"></span>
                    <span class="nav-font">饮品加盟</span>
                </a>
            </li>
            <li class="col-xs-3">
                <a href="/news/">
                    <span class="nav-img"><img class="img-responsive" src="/mobile/images/lx.png"></span>
                    <span class="nav-font">品牌新闻</span>
                </a>
            </li>
            <li class="col-xs-3">
                <a href="/jmanli/" >
                    <span class="nav-img"><img class="img-responsive" src="/mobile/images/sy.png"></span>
                    <span class="nav-font">加盟案例</span>
                </a>
            </li>
        </ul>
    </div>
    <!--zonghe start-->

    <div class="row brands">
        <div class="pai_hangbang"><span class="glyphicon glyphicon-flag"></span>品牌排行榜</div>
        <ul class="list-group">
            @foreach($cbrands as $cbrand)
            <li class="list-group-item col-xs-4"><a  href="/{{$cbrand->arctype->real_path}}/{{$cbrand->id}}.html"><img class="img-responsive center-block" style="min-height: 92px;" src="{{$cbrand->litpic}}" alt="{{$cbrand->brandname}}" /><strong >{{$cbrand->brandname}}</strong></a></li>
            @endforeach
        </ul>
    </div>
</div>

<div class="zonghe">
    <ul class="zonghe-nav clearfix">
        <li><a class="zonghe-nav-moren">饮品行业资讯</a>
            <div class="zonghe-con" style="display:block;">
                @foreach($yphynews as $yphynew)
                <div class="zonghe-con-list clearfix">
                    <a href="/{{$yphynew->arctype->real_path}}/{{$yphynew->id}}.html"><img src="{{$yphynew->litpic}}"/></a>
                    <div class="zonghe-right">
                        <a href="/{{$yphynew->arctype->real_path}}/{{$yphynew->id}}.html">{{$yphynew->title}}</a>
                        <span class="zonghe-con-font">
                      {{str_limit($yphynew->description,96,'...')}}
                    </span>
                    </div>
                </div>
                @endforeach
            </div>
        </li>

        <li><a>开店问答</a>
            <div class="zonghe-con">
                @foreach($ypasks as $ypask)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$ypask->arctype->real_path}}/{{$ypask->id}}.html"><img src="{{$ypask->litpic}}"/></a>
                        <div class="zonghe-right">
                            <a href="/{{$ypask->arctype->real_path}}/{{$ypask->id}}.html">{{$ypask->title}}</a>
                            <span class="zonghe-con-font">
                            {{str_limit($ypask->description,96,'...')}}
                    </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </li>
        <li><a>饮品店利润</a>
            <div class="zonghe-con">
                @foreach($lirunnews as $lirunnew)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.html"><img src="{{$lirunnew->litpic}}"/></a>
                        <div class="zonghe-right">
                            <a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.html">{{$lirunnew->title}}</a>
                            <span class="zonghe-con-font">
                            {{str_limit($lirunnew->description,96,'...')}}
                    </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </li>
    </ul>

</div>

<!--产品展示 start-->
<div class="cp-show">
    <div class="cp-show-header"><span>新产品推荐</span></div>
    <ul class="cp-show-list clearfix">
        @foreach($latestbrands as $latestbrand)
        <li>
            <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.html"><img src="{{$latestbrand->litpic}}"/></a>
            <span class="cp-font">
            <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.html">{{$latestbrand->brandname}}</a>
          </span>
        </li>
        @endforeach
    </ul>
</div>
<!--产品展示 end-->
<hr/>

@stop
