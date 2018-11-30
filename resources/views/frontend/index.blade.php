@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
@stop
@section('main_content')
    <div class="box clearfix">
        <div class="w680">
            <!-- 幻灯片 Start -->
            <div class="flexslider">
                <ul class="slides">
                    @foreach($cbrands as $cbrand)
                    <li><a href="/{{$cbrand->arctype->real_path}}/{{$cbrand->id}}.html"><img src="{{$cbrand->indexpic}}" alt="幻灯片图片名称" /></a></li>
                    @endforeach
                </ul>
            </div>
            <script>
                $(function(){
                    $('.flexslider').flexslider({
                        directionNav: true,
                        pauseOnAction: false
                    });
                });
            </script>
            <!-- 幻灯片 End -->
            <!--推荐品牌-->
            <div class="in_tjpp">
                <div class="title"><span class="more"><a href="/pinpai/" target="_blank">更多></a></span>新产品</div>
                <div class="in_tjppa">
                    <ul>
                        @foreach($abrands as $abrand)
                        <li><span><a href="/{{$abrand->arctype->real_path}}/{{$abrand->id}}.html"><img src="{{$abrand->litpic}}" alt="{{$abrand->brandname}}" /></a></span><strong><a href="/{{$abrand->arctype->real_path}}/{{$abrand->id}}.html">{{$abrand->brandname}}</a></strong></li>
                        @endforeach
                    </ul>
                </div>
                <a href="javascript:void(0);" class="in_tjppa_l">左移一次</a> <a href="javascript:void(0);" class="in_tjppa_r">右移一次</a> </div>
            <script>
                $(function(){
//一次横向滚动一个
                    $('.in_tjppa').kxbdSuperMarquee({
                        distance:125,
                        time:3,
                        btnGo:{right:'.in_tjppa_l',left:'.in_tjppa_r'},
                        direction:'left'
                    });
                });
            </script>
            <!--推荐品牌 End-->
        </div>
        <div class="in_bangdan">
            <div class="title">品牌排行榜</div>
            <ul class="zc_text1">
                @foreach($paihangbangs as $index=>$paihangbang)
                <li>
                    <p><i>{{$index+1}}</i><a href="/{{$paihangbang->arctype->real_path}}/{{$paihangbang->id}}.html">{{$paihangbang->brandname}}</a></p>
                    <dl>
                        <dt><a href="/{{$paihangbang->arctype->real_path}}/{{$paihangbang->id}}.html" target="_blank"><img src="{{$paihangbang->litpic}}" alt="{{$paihangbang->brandname}}"/></a></dt>
                        <dd><span>投资：<em class="price">{{$paihangbang->brandpay}}</em></span><span>指数：{{$paihangbang->click}}</span><a href="/{{$paihangbang->arctype->real_path}}/{{$paihangbang->id}}.html">查看详情</a></dd>
                    </dl>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        $(function(){
            //以下为zoom开始
            $('.in_jingpin_list a').on('mouseover mouseleave',function(e){e.type == 'mouseover'?$(this).children("img").animate({'width':'110px','height':'83px',"top":"-5","left":"-4"},'fast'):$(this).children("img").stop(true,true).animate({'width':'100px','height':'75px',"top":"0","left":"0"},'fast')})
        });
    </script>
    <!--产品招商 Start-->
    <div class="box clearfix">
        <div class="bta">
            <span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" target="_blank">更多>></a></span>
            <div class="title">
                <h1 style="font-size:18px;">品牌招商</h1>
            </div>
        </div>
        <div class="in_jingpin_list">
            <!--谷物类-->
            <ul class="clearfix">
                @foreach($latestbrands as $latestbrand)
                    <li> <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.html"><img src="{{$latestbrand->litpic}}" alt="{{$latestbrand->brandname}}" width="220" height="220"/> <em>{{$latestbrand->brandname}}</em></a> </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!--产品招商End-->

    <!--新闻中心 Start-->
    <div class="box clearfix">
        <div class="btb ">
            <div class="title">{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}</div>
            <ul>
                @foreach($yinpinjmtypes as $yinpinjmtype)
                <li><a href="/{{$yinpinjmtype->real_path}}/">{{$yinpinjmtype->typename}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="in_bkb">
            <div class="mingqitj">
                <div class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',2)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',2)->value('typename')}}</a></strong></div>
                <ul>
                    @foreach($yphynews as $yphynew)
                    <li><a href="/{{$yphynew->arctype->real_path}}/{{$yphynew->id}}.html"><img src="{{$yphynew->litpic}}" alt="{{$yphynew->title}}" /></a><strong> <a href="/{{$yphynew->arctype->real_path}}/{{$yphynew->id}}.html">{{$yphynew->title}}</a></strong><span><a href="/{{$yphynew->arctype->real_path}}/{{$yphynew->id}}.html">查看详情</a></span></li>
                    @endforeach
                </ul>
            </div>
            <div class="news_tj">
                <div class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',5)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',5)->value('typename')}}</a></strong></div>
               @foreach($ypasks as $ypask)
                   @if($loop->first)
                    <div class="news_tja">
                        <h3><a href="/{{$ypask->arctype->real_path}}/{{$ypask->id}}.html">{{$ypask->title}}</a></h3>
                        <p>{{str_limit($ypask->description,82,'...')}}</p>
                    </div>
                    @endif
                @endforeach
                <ul>
                    @foreach($ypasks as $ypask)
                        @if(!$loop->first)
                        <li><em>{{date('Y-m-d',strtotime($ypask->created_at))}}</em><a href="/{{$ypask->arctype->real_path}}/{{$ypask->id}}.html" title="{{$ypask->title}}">{{$ypask->title}}</a></li>
                        @endif
                    @endforeach
                </ul>

            </div>
            <div class="in_dllb1 rightfg">
                <div class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',4)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',4)->value('typename')}}</a></strong></div>
                <ul>
                    @foreach($anlinews as $anlinew)
                        @if($loop->first)
                            <li class="tj">
                                <a href="/{{$anlinew->arctype->real_path}}/{{$anlinew->id}}.html"><img src="{{$anlinew->litpic}}" alt="{{$anlinew->title}}" width="96" height="69" /></a> <strong><a href="/{{$anlinew->arctype->real_path}}/{{$anlinew->id}}.html">{{$anlinew->title}}</a></strong> <span><a href="/{{$anlinew->arctype->real_path}}/{{$anlinew->id}}.html">查看详情</a></span>
                            </li>
                        @endif
                    @endforeach
                    @foreach($anlinews as $anlinew)
                        @if(!$loop->first)
                            <li><a href="/{{$anlinew->arctype->real_path}}/{{$anlinew->id}}.htmll" title="{{$anlinew->title}}">{{$anlinew->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="box clearfix">
        <div class="btb ">
            <div class="title">{{\App\AdminModel\Arctype::where('id',6)->value('typename')}}</div>
            <ul>
                @foreach($yinpintypes as $yinpintype)
                <li><h2 style="font-size:12px;"><a href="/{{$yinpintype->real_path}}/">{{$yinpintype->typename}}</a></h2></li>
                @endforeach

            </ul>
        </div>
        <div class="in_bkb">
            <div class="mingqitj">
                <div class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',8)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',8)->value('typename')}}</a></strong></div>
                <ul>
                    @foreach($lirunnews as $lirunnew)
                        <li><a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.html"><img src="{{$lirunnew->litpic}}" alt="{{$lirunnew->title}}" /></a><strong> <a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.html">{{$lirunnew->title}}</a></strong><span><a href="/{{$lirunnew->arctype->real_path}}/{{$lirunnew->id}}.html">查看详情</a></span></li>
                    @endforeach
                </ul>
            </div>
            <div class="news_tj">
                <div class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',7)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',7)->value('typename')}}</a></strong></div>
                @foreach($feiyongnews as $feiyongnew)
                    @if($loop->first)
                        <div class="news_tja">
                            <h3><a href="/{{$feiyongnews->arctype->real_path}}/{{$feiyongnews->id}}.html">{{$feiyongnews->title}}</a></h3>
                            <p>{{str_limit($feiyongnews->description,82,'...')}}</p>
                        </div>
                    @endif
                @endforeach
                <ul>
                    @foreach($feiyongnews as $feiyongnews)
                        @if(!$loop->first)
                            <li><em>{{date('Y-m-d',strtotime($feiyongnews->created_at))}}</em><a href="/{{$feiyongnews->arctype->real_path}}/{{$feiyongnews->id}}.html" title="{{$feiyongnews->title}}">{{$feiyongnews->title}}</a></li>
                        @endif
                    @endforeach
                </ul>

            </div>
            <div class="in_dllb1 rightfg">
                <div class="title"><strong><a href="/{{\App\AdminModel\Arctype::where('id',9)->value('real_path')}}/">{{\App\AdminModel\Arctype::where('id',9)->value('typename')}}</a></strong></div>
                <ul>
                    @foreach($ppxwnews as $ppxwnews)
                        @if($loop->first)
                            <li class="tj">
                                <a href="/{{$ppxwnew->arctype->real_path}}/{{$ppxwnew->id}}.html"><img src="{{$ppxwnew->litpic}}" alt="{{$ppxwnew->title}}" width="96" height="69" /></a> <strong><a href="/{{$ppxwnew->arctype->real_path}}/{{$ppxwnew->id}}.html">{{$ppxwnew->title}}</a></strong> <span><a href="/{{$ppxwnew->arctype->real_path}}/{{$ppxwnew->id}}.html">查看详情</a></span>
                            </li>
                        @endif
                    @endforeach
                    @foreach($ppxwnews as $ppxwnew)
                        @if(!$loop->first)
                            <li><a href="/{{$ppxwnew->arctype->real_path}}/{{$ppxwnew->id}}.htmll" title="{{$ppxwnew->title}}">{{$ppxwnew->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!--加盟知识 End-->

    <div class="in_cp">
        <div class="title"><span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" target="_blank">更多>></a></span>品牌推荐</div>
        <div class="marquee7">
            <ul>
                @foreach($hbrands as $hbrand)
                <li><span><a href="/{{$hbrand->arctype->real_path}}/{{$hbrand->id}}.html"><img src="{{$hbrand->litpic}}" alt="{{$hbrand->brandname}}"/></a></span> <strong><a href="/{{$hbrand->arctype->real_path}}/{{$hbrand->id}}.html">{{$hbrand->brandname}}</a></strong></li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        $(function(){
//一次横向滚动一个
            $('.marquee7').kxbdSuperMarquee({
                isMarquee:true,
                isEqual:false,
                scrollDelay:20,
                direction:'left'
            });
        });

    </script>
    <div class="wrap_links">
        <div class="links clearfix"> <span>友情链接：</span>
            <p>
            @foreach($flinks as $flink)
            <li><a href="{{$flink->weburl}}" target="_blank">{{$flink->webname}}</a> </li>
            @endforeach
            </p>
        </div>
        <div class="footer_xx box clearfix">
            <div class="footer_xx_l">
                <div class="title">服务热线</div>
                <div class="footer_phone"><span>4008-896-216</span></div>
                <p>QQ咨询：616084465</p>
                <p>电话咨询：4008896216</p>
            </div>
            <div class="footer_xx_c">
                <div class="title">官方微信</div>
                <div class="f_weixin"> <img height="84" width="84" alt="4000-190-696" src="/frontend/images/wx-img-f1.png"> <span>零食店加盟品牌</span> </div>
                <div class="f_weixin"> <img height="84" width="84" alt="4000-190-696" src="/frontend/images/wx-img-f2.png"> <span>休闲食品加盟</span> </div>
            </div>
            <div class="footer_xx_r">
                <div class="title">我们做什么：</div>
                <ul>
                    <li>中国渠道招商服务商</li>
                    <li>为用户更快、更容易找到更可靠的合作机会</li>
                    <li>严格的项目审核程序 完善的项目跟踪机制</li>
                </ul>
            </div>
        </div>
    </div>

@stop
@section('footerlibs')

@stop