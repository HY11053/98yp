@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-中国教育招商网@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <link rel="stylesheet" href="/frontend/css/list.css" />
@stop
@section('main_content')

    <div class="weizhi"><span><a href='http://www.lingshijmls.com/'>主页</a> > <a href='/{{$thisarticleinfos->arctype->real_path}}/'>{{$thisarticleinfos->arctype->typename}}</a> > </span></div>
    <div class="box clearfix" style="position:relative;">
        <div class="w680"  style="margin-top:0;">
            <script type="text/javascript">
                $(function(){setTimeout(onWidthChange,1000);});
                function onWidthChange()
                {
                    if( $(window).width() < 1230 ) {
                        $('.pre_wz').hide();
                        $('.next_wz').hide();

                    }else{
                        $('.pre_wz').show();
                        $('.next_wz').show();
                    }
                    setTimeout(onWidthChange,1000);
                }
                $(function(){
                    $(window).scroll(function(){
                        var curr = $(window).scrollTop()
                        var rftop = $('.w680').offset().top
                        var raftop = $('.r_xd').offset().top
                        var rfbtma = $('.footer_nav').offset().top - $('.rfd').outerHeight() -10
                        var rf = $('.nav')
                        var rfa = $('.rfd')
                        var lefthd=$('.w680').height()
                        var righthd=$('.w306').height()
                        if(righthd<lefthd){
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
                        }
                    })
                });
            </script>
            <div class="bk">
                <div class="content_bt">
                    <h1>{{$thisarticleinfos->title}}</h1>
                    <div class="content_ly">
                        时间：{{$thisarticleinfos->created_at}}  |  来源：<a href="/">饮品加盟品牌网</a>
                    </div>
                </div>
                <div class="clearfix content2">
                     {!! $thisarticleinfos->body !!}
                    <div class="yanshen">
                        <div class="title">相关阅读</div>
                        <ul class="clearfix">
                        </ul>
                    </div>
                    <div class="nr_biaoqian"><div class="bshare-custom" style="float:right; padding-top:6px;"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&uuid=&pophcol=2&lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script><strong>标签：</strong></div>
                    <div class="shangxiapian">
                        <span class="right">@if(isset($prev_article)) <span>上一篇：<a href="{{config('app.url')}}/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}/" title="{{$prev_article->title}}">{{str_limit($prev_article->title,40,'')}}</a></span> @else 没有了 @endif</span>
                        <span>@if(isset($next_article))  <span class="right">下一篇：<a href="{{config('app.url')}}/{{$next_article->arctype->real_path}}/{{$next_article->id}}/" title="{{$next_article->title}}">{{str_limit($next_article->title,40,'')}}</a></span> @else 没有了 @endif </span>
                    </div>
                </div>
            </div>
            <div class="pp_bt1"><strong>品牌新资讯</strong></div>

            <div class="bka pp_xingxiang1">
                <div class="marquee1">
                    <ul class="clearfix">
                        @foreach($brandnews as $brandnew)
                        <li><span><a href="/{{$brandnew->real_path}}/{{$brandnew->id}}.html"><img src="{{$brandnew->litpic}}" width="126" height="96"/></a></span>
                            <strong><a href="/{{$brandnew->real_path}}/{{$brandnew->id}}.html">{{$brandnew->title}}</a></strong></li>
                        <li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script>
                $(function(){
//一次横向滚动一个
                    $('.marquee1').kxbdSuperMarquee({
                        isMarquee:true,
                        isEqual:false,
                        scrollDelay:20,
                        direction:'left'
                    });
                });
            </script>
        </div>
        <div class="w306">
            <div class="bkb" style="margin-top:0;">
                <!-- 幻灯片 Start -->

                <div id="slides"  class="slides_datu flexslider">
                    <ul class="slides">
                        @foreach($hotnewslists as $hotnewslist)
                        <li><a href="/{{$hotnewslist->arctype->real_path}}/{{$hotnewslist->id}}.html" title="{{$hotnewslist->title}}"><img src="{{$hotnewslist->litpic}}"  width="302" height="227"/></a></li>
                        @endforeach
                    </ul>
                </div>

                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        @foreach($hotnewslists as $hotnewslist)
                            <li><a href="/{{$hotnewslist->arctype->real_path}}/{{$hotnewslist->id}}.html" title="{{$hotnewslist->title}}"><img src="{{$hotnewslist->litpic}}"  width="302" height="227"/></a></li>
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

            <div class="bkb ullb2">
                <div class="title">大家都在阅读内容</div>
                <ul class="clearfix">
                    @foreach($cnewslists as $cnewslist)
                    <li>
                        <span><a href="/{{$cnewslist->arctype->real_path}}/{{$cnewslist->id}}.html"><img src="{{$cnewslist->litpic}}" width="126" height="96"/></a></span>
                        <strong><a href="/{{$cnewslist->arctype->real_path}}/{{$cnewslist->id}}.html">{{$cnewslist->title}}</a></strong></li>
                    <li>
                    @endforeach
                </ul>
            </div>

            <div class="bkb ullb1">
                <div class="title">加盟资讯</div>
                <ul>
                    @foreach($latestnewslists as $latestnewslist)
                    <li>
                        <a href="/{{$latestnewslist->arctype->real_path}}/{{$latestnewslist->id}}.html" target="_blank" title="{{$latestnewslist->title}}">{{$latestnewslist->title}}</a></li>
                    </li>
                 @endforeach
                </ul>
            </div>


            <div class="r_xd"></div>
            <div class="bkb ullb3 rfd">
                <div class="title">最新品牌推荐</div>
                <ul class="clearfix">
                    @foreach($flashlingshibrands as $index=>$flashlingshibrand)
                    <li class="red">
                        <p><i>TOP{{$index+1}}</i><a href="/{{$flashlingshibrand->arctype->real_path}}/{{$flashlingshibrand->id}}.html">{{$flashlingshibrand->brandname}}</a></p>
                        <dl>
                            <dt><a href="/{{$flashlingshibrand->arctype->real_path}}/{{$flashlingshibrand->id}}.html" target="_blank"><img src="{{$flashlingshibrand->litpic}}" alt="{{$flashlingshibrand->brandname}}"/></a></dt>
                        </dl>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop