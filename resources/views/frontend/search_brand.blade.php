@extends('frontend.frontend')
@section('title')品牌搜索页-中国教育招商网@stop
@section('keywords')品牌搜索页@stop
@section('description')品牌搜索页@stop
@section('headlibs')
    <meta name="Copyright" content="中国教育招商网-{{env('APP_URL')}}"/>
    <meta name="author" content="中国教育招商网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <link rel="stylesheet" href="/frontend/css/index.css" />
    <link href="/frontend/css/list.css" rel="stylesheet" type="text/css" />
@stop
@section('main_content')
    <div class="box clearfix" style="position:relative;">
        <div class="w680"  style="margin-top:0;">
            <div class="nav">
                <div class="nav1">
                    <div class="tit">品牌搜索</div>
                </div>
            </div>
            <div class="pp_list">
                <ul class="clearfix">
                    @foreach($pagelists as $pagelist)
                        <li>
                        <span>
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">
                                <img src="{{$pagelist->litpic}}" alt="{{$pagelist->brandname}}"  width="120" height="90"/>
                            </a>
                        </span>
                            <strong>
                                <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->brandname}}</a>
                            </strong>
                            <em>加盟人气：{{$pagelist->brandnum}}<b></b>
                            </em>
                            <div>
                                <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" class="pp_b1">查看详情</a>
                                <a class="pp_b2" href="#liuyan" >立即咨询</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="page">
                {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
            </div>
            <script>

                $(function () {
                    $(".pp_list ul li").hover(function () {
                        $(this).addClass("jg")
                    }, function () {
                        $(this).removeClass("jg")
                    })
                });

            </script>
        </div>
        <div class="w306">
            <div class="bkb" style="margin-top:0;">
                <!-- 幻灯片 Start -->
                <a href="#" target="_blank"><img src="/frontend/images/loading.gif" alt="一扫光"  width="302" height="292"/></a>
            </div>
            <div class="bkb ullb2">
                <div class="title">品牌关注排行榜</div>
                <ul class="clearfix">
                    @foreach($topbrands as $topbrand)
                        <li><span><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.html"><img src="{{$topbrand->litpic}}" width="126" height="96"/></a></span> <strong><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.html">{{$topbrand->brandname}}</a></strong></li>
                    @endforeach
                </ul>
            </div>
            <div class="bkb ullb1">
                <div class="title">饮品加盟资讯</div>
                <ul>
                    @foreach($latesenews as $latesenew)
                        <li><a href="/{{$latesenew->real_path}}/{{$latesenew->id}}.html">{{$latesenew->title}}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="r_xd"></div>
            <div class="bkb ullb3 rfd">
                <div class="title">品牌推荐</div>
                <ul class="clearfix">
                    @foreach($lastestbrands as $lastestbrand)
                        <li><span><a href="/{{$lastestbrand->real_path}}/{{$lastestbrand->id}}.html"><img src="{{$lastestbrand->litpic}}" /></a></span> <strong><a href="/{{$lastestbrand->arctype->real_path}}/{{$lastestbrand->id}}.html">{{$lastestbrand->brandname}}</a></strong></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
