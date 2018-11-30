@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-98饮品网@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')
    <link rel="stylesheet" href="/frontend/css/list.css" />
@stop
@section('main_content')
    <div class="weizhi"><span><a href='/'>主页</a> > <a href='/{{$thisarticleinfos->arctype->real_path}}/'>{{$thisarticleinfos->arctype->typename}}</a> > {{$thisarticleinfos->brandname}}</span></div>
    <div class="pp_xx">
        <h1>{{$thisarticleinfos->brandname}}</h1>
        <div class="pp_xx1 clearfix">
            <div class="pp_logo"><a><img src="{{$thisarticleinfos->litpic}}"  width="120" height="90" alt="{{$thisarticleinfos->brandname}}"/> </a></div>
            <div class="pp_xx_c">
                <ul class="clearfix">
                    <li><span>品牌名称：</span>{{$thisarticleinfos->brandname}}</li>
                    <li><span>加盟费用：</span><em class="price">{{$thisarticleinfos->brandpay}}</em></li>
                    <li><span>加盟人气：</span>{{$thisarticleinfos->brandnum}}</li>
                    <li><span>成立时间：</span>{{$thisarticleinfos->brandtime}}</li>
                    <li><span>主营产品：</span>{{$thisarticleinfos->brandmap}}</li>
                    <li><span>区域特许：</span>{{$thisarticleinfos->brandarea}}</li>
                    <li><span>运营机构：</span>{{$thisarticleinfos->brandgroup}}</li>
                    <li><span>是否区域授权：</span>{{$thisarticleinfos->brandduty}}</li>
                    <li class="w1"><span>公司地址：</span>{{$thisarticleinfos->brandaddr}}</li>
                </ul>
                <div class="pp_line"></div>
            </div>

            <div class="pp_xx_r">
                <div class="pp_phone">联系电话：<strong>4008-896-216</strong></div>
                <span><a  href="#liuyan">立即留言</a></span>
                <em>意向加盟：<i>{{$thisarticleinfos->brandattch}}人</i></em>
            </div>
        </div>
    </div>

    <div class="box clearfix" style="position:relative;">
        <div class="w680" id="menu_xd">
            <div class="nav">
                <div class="nav1">
                    <ul>
                        <li class="dq"><a href="#jianjie">公司简介</a></li>
                        <li><a href="#chanpin">产品展示</a></li>
                        <li><a href="#xinwen">企业新闻</a></li>
                        <li><a href="#liuyan">在线留言</a></li>
                    </ul>
                </div>
            </div>
            <div class="gundong">
                <!--<div class="pp_bt" id="jianjie" style="height:0; line-height:0; background:none; overflow:hidden;"><strong><a href="#">公司简介</a></strong></div>-->
                <script type="text/javascript">
                    $(function(){
                        $(window).scroll(function(){
                            var curr = $(window).scrollTop()
                            var rftop = $('#menu_xd').offset().top
                            var raftop = $('.r_xd').offset().top
                            var rfbtm = $('.pp_bt').eq(1).offset().top;
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
                            $('.w680').each(function(){
                                $('.nav1 ul li').each(function(){

                                    if($('.pp_bt').eq($(this).index()).offset().top-curr<=200){
                                        $(this).addClass('dq').siblings().removeClass('dq');
                                    }

                                })
                            });
                        })
                    });
                </script>
                <div class="contenta clearfix bka">
                    　　{!! $thisarticleinfos->body !!}
                </div>
                <div class="pp_bt" id="chanpin" style="margin-top:20px;"><strong><a href="#">品牌推荐</a></strong></div>
                <div class="bka pp_cp">
                    <div class="marquee1">
                        <ul class="clearfix">
                            @foreach($cbrands as $cbrand)
                            <li>
                                <span>
                                    <a href="/{{$cbrand->arctype->real_path}}/{{$cbrand->id}}.html">
                                        <img src="{{$cbrand->litpic}}" alt="{{$cbrand->brandname}}" width="150" height="150"/>
                                    </a>
                                </span>
                                <strong>
                                    <a href="/{{$cbrand->arctype->real_path}}/{{$cbrand->id}}.html">{{$cbrand->brandname}}</a>
                                </strong>
                            </li>
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

                <div class="pp_bt" id="xinwen" style="margin-top:20px;"><strong><a href="#">企业新闻</a></strong></div>
                <div class="bka pp_news_tj">
                    <ul class="clearfix">
                        @foreach($brandnews as $brandnew)
                         <li><a href="/{{$brandnew->real_path}}/{{$brandnew->id}}.html">{{$brandnew->title}}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="pp_bt" style="height:0; line-height:0; background:none; overflow:hidden;" id="liuyan"></div>
                <div class="liuyan_wx">温馨提示：对项目留言既可免费获得《项目详细资料》，请立即留言</div>
                <div class="liuyan_k">
                    <div class="title"><span>立即留言<em>友情提醒：多留言、多咨询、能降低风险投资！</em></span></div>
                    <div class="liuyan_k1">
                        <form  onsubmit="return false;">
                            <ul>
                                <li><strong><code>*</code>姓名：</strong><input type="text" name="username" id="truename" class="ly_text1" /><input type="radio" class="ly_radio"/><em>先生</em><input type="radio"  class="ly_radio"/><em>女士</em></li>
                                <li><strong><code>*</code>手机：</strong><input type="text" name="iphone" id="telephone" class="ly_text1" /></li>

                                <li style="height:99px;"><strong><code>*</code>留言：</strong><textarea  name="content" id="content" class="ly_textarea"></textarea></li>
                                <li style="height:37px; padding-left:104px;"><input type="submit" id="tj_btn" value="提交留言" class="ly_submit" /></li>
                            </ul>

                            <div id="msgList" class="ly_msglist">
                                <h3>您可以选择已下快捷留言 ↓</h3>
                                <ul>
                                    <li><a onclick="avals(this);" href="javascript:;">我有意向，请问加盟费是多少?</a></li>
                                    <li><a onclick="avals(this);" href="javascript:;">很想合作，来电话细谈吧。</a></li>
                                    <li><a onclick="avals(this);" href="javascript:;">请问具体加盟流程是怎么样的?</a></li>
                                    <li><a onclick="avals(this);" href="javascript:;">请问贵公司哪里有样板店或直营店？</a></li>
                                    <li><a onclick="avals(this);" href="javascript:;">请给我打电话，并寄送加盟资料。</a></li>
                                </ul>
                            </div>

                            <script>
                                function avals(obj){
                                    var __c = document.cookie;
                                    var __b = false;
                                    var __s = __c.indexOf('INDI');
                                    if(__s>-1){var __a = __c.match(/USERNAME=.[^&]+/);if(__a!=null){__b=true;}}
                                    var d_id = obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getAttribute("id")
                                    jQuery('#content').val(jQuery('#content').val()+obj.innerHTML.replace("·",""));
                                    hide_menu1("msgList");
                                }
                                function hide_menu1(obj){jQuery("#"+obj).css('display','');}
                                $('.ly_msglist ul li:eq(0)').addClass('qline');
                            </script>
                        </form>
                        <script src="/frontend/js/tl.js"></script>
                    </div>
                </div>
            </div>
            </div>
        <div class="w306">
            <div class="bkb">
                <div class="title">品牌排行榜</div>
                <ul class="zc_text2">
                    @foreach($topbrands as $index=>$topbrand)
                    <li class="red">
                        <p><i>TOP{{$index+1}}</i><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.html">{{$topbrand->brandname}}</a></p>
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

            <div class="bkb ullb1">
                <div class="title">加盟资讯</div>
                <ul>
                    @foreach($latesnews as $latesnew)
                    <li><a href="/{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.html">{{$latesnew->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="bkb ullb1">
                <div class="title">推荐文章</div>
                <ul>
                    @foreach($cnewslists as $cnewslist)
                    <li><a href="/{{$cnewslist->arctype->real_path}}/{{$cnewslist->id}}.html">{{$cnewslist->title}}</a></li><li>
                    @endforeach
                </ul>
            </div>
            <div class="r_xd"></div>
        </div>
    </div>

@stop