@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-中国教育招商网@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('headlibs')
    <meta name="Copyright" content="中国教育招商网-{{env('APP_URL')}}"/>
    <meta name="author" content="中国教育招商网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <link href="/frontend/css/list.css" rel="stylesheet" type="text/css" />
@stop
@section('main_content')
    <div class="weizhi"><span><a href='/'>主页</a> > <a href='/{{$thistypeinfo->real_path}}/'>{{$thistypeinfo->typename}}</a> > </span></div>
    <div class="box clearfix" style="position:relative;">
        <div class="w680"  style="margin-top:0;">
            <div class="nav">
                <div class="nav1">
                    <ul>
                        @foreach($sontypes as $sontype)
                        <li><span><a href='/{{$sontype->real_path}}/'>{{$sontype->typename}}</a></span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        var curr = $(window).scrollTop()
                        var rftop = $('.w680').offset().top
                        var raftop = $('.r_xd').offset().top
                        var rfbtma = $('.footer_nav').offset().top - $('.rfd').outerHeight() -10
                        var rf = $('.nav')
                        var rfa = $('.rfd')
                        if(curr <= rftop){
                            rf.removeClass('fixed')
                        }else{
                            rf.addClass('fixed')
                        }
                        if(curr <= raftop){
                            rfa.removeClass('fixeda')
                            rfa.removeClass('fixed1')
                        }else if(curr > raftop && curr < rfbtma){
                            rfa.addClass('fixeda')
                            rfa.removeClass('fixed1')
                        }else{
                            rfa.addClass('fixed1')
                            rfa.removeClass('fixeda')
                        }
                    })
                });
            </script>
            <div class="news_list">
                <ul>
                    @foreach($pagelists as $pagelist)
                    <li>
                        <a href='/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html' title="{{$pagelist->title}}">
                            <img src='{{$pagelist->litpic}}' width="160" height="120"/>
                        </a>
                        <strong><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}">{{$pagelist->title}}</a></strong>
                        <p>{{$pagelist->description}}...</p>
                        <em>{{$pagelist->created_at}}</em> <span><b>标签</b>  </span>
                    </li>
                    @endforeach
                </ul>
                <script>
                    var jingguo = $('.news_list ul li');
                    jingguo.bind('mouseover', function (){
                        $(this).addClass('jg');
                    });
                    jingguo.bind('mouseout', function (){
                        $(this).removeClass('jg');
                    });
                </script>
                <div class="page">
                    {!! str_replace('page=','page/',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()))) !!}
                </div>
            </div>
        </div>
        <div class="w306">
            <div class="bkb" style="margin-top:0;">
                <!-- 幻灯片 Start -->

                <div id="slides"  class="slides_datu flexslider">
                    <ul class="slides">
                        @foreach($cnewtops as $cnewtop)
                        <li><a href="/{{$cnewtop->arctype->real_path}}/{{$cnewtop->id}}.html" target="_blank" title="{{$cnewtop->title}}"><img src="{{$cnewtop->litpic}}"  width="302" height="227"/></a></li>
                        @endforeach
                    </ul>
                </div>

                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        @foreach($cnewtops as $cnewtop)
                            <li><a href="/{{$cnewtop->arctype->real_path}}/{{$cnewtop->id}}.html" target="_blank" title="{{$cnewtop->title}}"><img src="{{$cnewtop->litpic}}"  width="302" height="227"/></a></li>
                        @endforeach
                    </ul>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#carousel').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: true,
                            itemWidth: 74,
                            itemMargin: 5,
                            asNavFor: '.slides_datu'
                        });

                        $('.slides_datu').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: true,
                            sync: "#carousel",
                            start: function(slider){
                                $('body').removeClass('loading');
                            }
                        });
                    });
                </script>
                <!-- 幻灯片 End -->
            </div>

            <div class="bkb">
                <div class="title">饮品品牌推荐</div>
                <ul class="zc_text2">
                    @foreach($topbrands as $index=>$topbrand)
                    <li class="red">
                        <p><i>TOP{{$index+1}}</i><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.html">来伊份</a></p>
                        <dl>
                            <dt><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.html" target="_blank"><img src="{{$topbrand->litpic}}" alt="{{$topbrand->brandname}}"/></a></dt>
                            <dd>
                                <span>投资：{{$topbrand->brandpay}}</span>
                                <span>指数：{{$topbrand->brandnum}}</span>
                                <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.html">查看详情</a>
                            </dd>
                        </dl>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="bkb ullb2">
                <div class="title">大家都在阅读内容</div>
                <ul class="clearfix">
                    @foreach($hnewtops as $hnewtop)
                    <li><span><a href="/{{$hnewtop->arctype->real_path}}/{{$hnewtop->id}}.html"><img src="{{$hnewtop->litpic}}" width="126" height="96"/></a></span>
                        <strong><a href="/{{$hnewtop->arctype->real_path}}/{{$hnewtop->id}}.html">{{$hnewtop->title}}</a></strong>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="bkb ullb1">
                <div class="title">加盟资讯</div>
                <ul>
                    @foreach($latesenews as $latesenew)
                        <li><a href="/{{$latesenew->arctype->real_path}}/{{$latesenew->id}}.html">{{$latesenew->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="r_xd"></div>
        </div>
    </div>

@stop
