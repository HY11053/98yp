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
                    <li><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/flash/1.jpg" alt="幻灯片图片名称" /></a></li>
                    <li><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/flash/2.jpg" alt="幻灯片图片名称"  /></a></li>
                    <li><a href="javascript:void(0)" onclick="online()"><img src="/frontend/images/flash/3.jpg" alt="幻灯片图片名称"  /></a></li>
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
                <div class="title"><span class="more"><a href="/cpzh/" target="_blank">更多></a></span>新产品</div>
                <div class="in_tjppa">
                    <ul>
                        <li><span><a href="/cpzh/1982.html"><img src="/uploads/allimg/170623/1-1F62313354N39.jpg" alt="百草味手撕猪肉铺（原味" width="120" height="90" /></a></span><strong><a href="/cpzh/1982.html">百草味手撕猪肉铺（原味</a></strong></li>
                        <li><span><a href="/cpzh/1981.html"><img src="/uploads/allimg/170623/1-1F623133521M4.jpg" alt="百草味蜜汁鳕鱼片" width="120" height="90" /></a></span><strong><a href="/cpzh/1981.html">百草味蜜汁鳕鱼片</a></strong></li>
                        <li><span><a href="/cpzh/1980.html"><img src="/uploads/allimg/170623/1-1F623133449114.jpg" alt="百草味灯影麻辣味牛肉丝" width="120" height="90" /></a></span><strong><a href="/cpzh/1980.html">百草味灯影麻辣味牛肉丝</a></strong></li>
                        <li><span><a href="/cpzh/1979.html"><img src="/uploads/allimg/170623/1-1F623133413P3.jpg" alt="百草味酱烧猪蹄" width="120" height="90" /></a></span><strong><a href="/cpzh/1979.html">百草味酱烧猪蹄</a></strong></li>
                        <li><span><a href="/cpzh/1978.html"><img src="/uploads/allimg/170623/1-1F623133334440.jpg" alt="百草味沙爹/五香/香辣手撕" width="120" height="90" /></a></span><strong><a href="/cpzh/1978.html">百草味沙爹/五香/香辣手撕</a></strong></li>
                        <li><span><a href="/cpzh/8144.html"><img src="/uploads/allimg/170328/1-1F32Q60451E1-lp.jpg" alt="自由自在迷你海苔" width="120" height="90" /></a></span><strong><a href="/cpzh/8144.html">自由自在迷你海苔</a></strong></li>
                        <li><span><a href="/cpzh/8143.html"><img src="/uploads/allimg/170328/1-1F32Q6032BE-lp.jpg" alt="自由自在啪啪通虾片" width="120" height="90" /></a></span><strong><a href="/cpzh/8143.html">自由自在啪啪通虾片</a></strong></li>
                        <li><span><a href="/cpzh/8142.html"><img src="/uploads/allimg/170328/1-1F32Q60223148-lp.jpg" alt="自由自在薄荷味软糖" width="120" height="90" /></a></span><strong><a href="/cpzh/8142.html">自由自在薄荷味软糖</a></strong></li>

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
                <li>
                    <p><i>1</i><a href="/fenlei/197.html">良品铺子</a></p>
                    <dl>
                        <dt><a href="/fenlei/197.html" target="_blank"><img src="/uploads/150923/5-15092316391RG.png" alt="良品铺子"/></a></dt>
                        <dd><span>投资：<em class="price">5-20万</em></span><span>指数：10</span><a href="/fenlei/197.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>3</i><a href="/fenlei/1392.html">三只松鼠</a></p>
                    <dl>
                        <dt><a href="/fenlei/1392.html" target="_blank"><img src="/uploads/151022/4-1510221601313L.png" alt="三只松鼠"/></a></dt>
                        <dd><span>投资：<em class="price">5-8万</em></span><span>指数：9</span><a href="/fenlei/1392.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>4</i><a href="/fenlei/461.html">老婆大人</a></p>
                    <dl>
                        <dt><a href="/fenlei/461.html" target="_blank"><img src="/uploads/160311/1-160311114GE47.png" alt="老婆大人"/></a></dt>
                        <dd><span>投资：<em class="price">5-15万</em></span><span>指数：8</span><a href="/fenlei/461.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>5</i><a href="/fenlei/178.html">零食工坊</a></p>
                    <dl>
                        <dt><a href="/fenlei/178.html" target="_blank"><img src="/uploads/150924/2-1509241414354R.jpg" alt="零食工坊"/></a></dt>
                        <dd><span>投资<em class="price">：5-1万</em>0</span><span>指数：6</span><a href="/fenlei/178.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>6</i><a href="/fenlei/177.html">百草味</a></p>
                    <dl>
                        <dt><a href="/fenlei/177.html" target="_blank"><img src="/uploads/150923/2-1509231TG6119.jpg" alt="百草味"/></a></dt>
                        <dd><span>投资：<em class="price">5-15万</em></span><span>指数：6</span><a href="/fenlei/177.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>7</i><a href="/fenlei/140.html"> 来伊份</a></p>
                    <dl>
                        <dt><a href="/fenlei/140.html" target="_blank"><img src="/uploads/151010/2-1510101A44c03.jpg" alt=" 来伊份"/></a></dt>
                        <dd><span>投资：<em class="price">8-20万</em></span><span>指数：7</span><a href="/fenlei/140.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>8</i><a href="/fenlei/1353.html">非常食客</a></p>
                    <dl>
                        <dt><a href="/fenlei/1353.html" target="_blank"><img src="/uploads/151020/4-151020132ACV.png" alt="非常食客"/></a></dt>
                        <dd><span>投资：<em class="price">5-15万</em></span><span>指数：6</span><a href="/fenlei/1353.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>9</i><a href="/fenlei/1306.html"> 一扫光</a></p>
                    <dl>
                        <dt><a href="/fenlei/1306.html" target="_blank"><img src="/uploads/151016/4-151016130T1a5.jpg" alt="一扫光"/></a></dt>
                        <dd><span>投资：<em class="price">3-15万</em></span><span>指数：8</span><a href="/fenlei/1306.html">查看详情</a></dd>
                    </dl>
                </li>
                <li>
                    <p><i>10</i><a href="/fenlei/1307.html">飘零大叔</a></p>
                    <dl>
                        <dt><a href="/fenlei/1307.html" target="_blank"><img src="/uploads/151016/4-15101614531S33.png" alt="飘零大叔"/></a></dt>
                        <dd><span>投资：<em class="price">3-10万</em></span><span>指数：7</span><a href="/fenlei/1307.html">查看详情</a></dd>
                    </dl>
                </li>
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
            <span class="more"><a href="/fenlei/" target="_blank">更多>></a></span>
            <div class="title">
                <h1 style="font-size:18px;">品牌招商</h1>
            </div>
        </div>
        <div class="in_jingpin_list">
            <!--谷物类-->
            <ul class="clearfix">
                <li> <a href="/fenlei/1307.html"><img src="/uploads/151016/4-15101614531S33.png" alt="飘零大叔" width="220" height="220"/> <em>飘零大叔</em></a> </li>
                <li> <a href="/fenlei/1306.html"><img src="/uploads/151016/4-151016130T1a5.jpg" alt="一扫光" width="220" height="220"/> <em>一扫光</em></a> </li>
                <li> <a href="/fenlei/197.html"><img src="/uploads/150923/5-15092316391RG.png" alt="良品铺子" width="220" height="220"/> <em>良品铺子</em></a> </li>
                <li> <a href="/fenlei/1392.html"><img src="/uploads/151022/4-1510221601313L.png" alt="三只松鼠" width="220" height="220"/> <em>三只松鼠</em></a> </li>
                <li> <a href="/fenlei/461.html"><img src="/uploads/160311/1-160311114GE47.png" alt="老婆大人" width="220" height="220"/> <em>老婆大人</em></a> </li>
                <li> <a href="/fenlei/1973.html"><img src="/uploads/151216/1-151216161922C3.jpg" alt="好想来" width="220" height="220"/> <em>好想来</em></a> </li>
                <li> <a href="/fenlei/1977.html"><img src="/uploads/allimg/151216/1-151216162P60-L.jpg" alt="啵啵嘴" width="220" height="220"/> <em>啵啵嘴</em></a> </li>
                <li> <a href="/fenlei/178.html"><img src="/uploads/150924/2-1509241414354R.jpg" alt="零食工坊" width="220" height="220"/> <em>零食工坊</em></a> </li>
                <li> <a href="/fenlei/177.html"><img src="/uploads/150923/2-1509231TG6119.jpg" alt="百草味" width="220" height="220"/> <em>百草味</em></a> </li>
                <li> <a href="/fenlei/1976.html"><img src="/uploads/allimg/151216/1-1512161626050-L.jpg" alt="戴永红" width="220" height="220"/> <em>戴永红</em></a> </li>
                <li> <a href="/fenlei/1974.html"><img src="/uploads/allimg/151216/1-1512161621350-L.png" alt="乐大嘴" width="220" height="220"/> <em>乐大嘴</em></a> </li>
                <li> <a href="/fenlei/143.html"><img src="/uploads/151004/3-15100415361b60.png" alt="悠百佳" width="220" height="220"/> <em>悠百佳</em></a> </li>
                <li> <a href="/fenlei/785.html"><img src="/uploads/150927/4-15092G33353N6.png" alt="乐棒棒" width="220" height="220"/> <em>乐棒棒</em></a> </li>
                <li> <a href="/fenlei/1975.html"><img src="/uploads/allimg/151216/1-1512161624100-L.png" alt="雪山飞狐" width="220" height="220"/> <em>雪山飞狐</em></a> </li>
                <li> <a href="/fenlei/360.html"><img src="/uploads/150919/4-150919140J5321.png" alt="姚太太" width="220" height="220"/> <em>姚太太</em></a> </li>
                <li> <a href="/fenlei/1120.html"><img src="/uploads/151009/3-151009153552V9.png" alt="百味林" width="220" height="220"/> <em>百味林</em></a> </li>
                <li> <a href="/fenlei/1353.html"><img src="/uploads/151020/4-151020132ACV.png" alt="非常食客" width="220" height="220"/> <em>非常食客</em></a> </li>
                <li> <a href="/fenlei/469.html"><img src="/uploads/150921/4-150921161221a9.png" alt="贪吃小站" width="220" height="220"/> <em>贪吃小站</em></a> </li>
                <li> <a href="/fenlei/1335.html"><img src="/uploads/151019/4-151019143453356.jpg" alt="公主驾到" width="220" height="220"/> <em>公主驾到</em></a> </li>
                <li> <a href="/fenlei/296.html"><img src="/uploads/150919/4-150919100549451.png" alt="伊味儿" width="220" height="220"/> <em>伊味儿</em></a> </li>
                <li> <a href="/fenlei/263.html"><img src="/uploads/150923/5-15092314494H35.jpg" alt="光合农场" width="220" height="220"/> <em>光合农场</em></a> </li>
                <li> <a href="/fenlei/408.html"><img src="/uploads/150919/4-15091914440S31.png" alt="味罗天下" width="220" height="220"/> <em>味罗天下</em></a> </li>
                <li> <a href="/fenlei/471.html"><img src="/uploads/150922/3-150922145021a0.png" alt="好想你" width="220" height="220"/> <em>好想你</em></a> </li>
                <li> <a href="/fenlei/205.html"><img src="/uploads/150924/150924/2-150924164509157.jpg" alt="七月初七" width="220" height="220"/> <em>七月初七</em></a> </li>
            </ul>
        </div>
    </div>

    <!--产品招商End-->

    <!--新闻中心 Start-->
    <div class="box clearfix">
        <div class="btb ">
            <div class="title">零食加盟指南</div>
            <ul>
                <li><a href="/hangyezx/">零食行业资讯</a></li>
                <li><a href="/kaidianwd/">零食开店问答</a></li>
            </ul>
        </div>
        <div class="in_bkb">
            <div class="mingqitj">
                <div class="title"><strong><a href="/hangyezx/">零食行业资讯</a></strong></div>
                <ul>
                    <li><a href="/hangyezx/9860.html"><img src="/uploads/allimg/170712/1-1FG21KP6407-lp.jpg" alt="休闲食品加盟前景好吗？" /></a><strong> <a href="/hangyezx/9860.html">休闲食品加盟前景好吗？</a></strong><span><a href="/hangyezx/9860.html">查看详情</a></span></li>
                    <li><a href="/hangyezx/9859.html"><img src="/uploads/allimg/170712/1-1FG21KI14H-lp.jpg" alt="投资休闲食品加盟好不好" /></a><strong> <a href="/hangyezx/9859.html">投资休闲食品加盟好不好</a></strong><span><a href="/hangyezx/9859.html">查看详情</a></span></li>
                    <li><a href="/hangyezx/9844.html"><img src="/uploads/allimg/170711/1-1FG11IHK39-lp.jpg" alt="休闲食品加盟怎么样？加" /></a><strong> <a href="/hangyezx/9844.html">休闲食品加盟怎么样？加</a></strong><span><a href="/hangyezx/9844.html">查看详情</a></span></li>
                    <li><a href="/hangyezx/9839.html"><img src="/uploads/allimg/170711/1-1FG11I404124-lp.jpg" alt="投资零食店加盟真的好吗" /></a><strong> <a href="/hangyezx/9839.html">投资零食店加盟真的好吗</a></strong><span><a href="/hangyezx/9839.html">查看详情</a></span></li>

                </ul>
            </div>
            <div class="news_tj">
                <div class="title"><strong><a href="/kaidianwd/">零食开店问答</a></strong></div>
                <div class="news_tja">
                    <h3><a href="/kaidianwd/9058.html">零食加盟店怎么做好日常</a></h3>
                    <p>零食加盟店怎么做好日常管理？现在人们越来越注重吃食方面，所以在这种情况下开一家零食…</p>
                </div>

                <ul>
                    <li><em>2017-07-14</em><a href="/kaidianwd/9900.html" title="怎么开好零食加盟店？开">怎么开好零食加盟店？开</a></li>
                    <li><em>2017-07-14</em><a href="/kaidianwd/9893.html" title="零食店加盟项目怎么样？">零食店加盟项目怎么样？</a></li>
                    <li><em>2017-07-13</em><a href="/kaidianwd/9877.html" title="零食店加盟过程怎么经营">零食店加盟过程怎么经营</a></li>
                    <li><em>2017-07-13</em><a href="/kaidianwd/9872.html" title="开零食加盟店应该考虑哪">开零食加盟店应该考虑哪</a></li>
                    <li><em>2017-07-13</em><a href="/kaidianwd/9869.html" title="有哪些因素影响零食店收">有哪些因素影响零食店收</a></li>
                    <li><em>2017-07-13</em><a href="/kaidianwd/9867.html" title="开休闲食品店怎么保证？">开休闲食品店怎么保证？</a></li>
                    <li><em>2017-07-12</em><a href="/kaidianwd/9863.html" title="怎么开休闲食品加盟店？">怎么开休闲食品加盟店？</a></li>
                    <li><em>2017-07-12</em><a href="/kaidianwd/9855.html" title="零食加盟店怎么把握消费">零食加盟店怎么把握消费</a></li>
                    <li><em>2017-07-12</em><a href="/kaidianwd/9852.html" title="开休闲食品加盟店有什么">开休闲食品加盟店有什么</a></li>

                </ul>
            </div>
            <div class="in_dllb1 rightfg">
                <div class="title"><strong><a href="/ppal/">品牌案例</a></strong></div>
                <ul>
                    <li class="tj"> <a href="/ppal/6639.html"><img src="/uploads/allimg/161230/1-161230100644Q3-lp.jpg" alt="加盟一扫光休闲食品开启" width="96" height="69" /></a> <strong><a href="/ppal/6639.html">加盟一扫光休闲食品开启</a></strong> <span><a href="/ppal/6639.html">查看详情</a></span>
                    </li>
                    <li><a href="/ppal/9146.html" title="零食店加盟选良品铺子怎">零食店加盟选良品铺子怎</a></li>
                    <li><a href="/ppal/7780.html" title="零食店加盟好项目当数一">零食店加盟好项目当数一</a></li>
                    <li><a href="/ppal/7249.html" title="选择好想来加盟迎接光明">选择好想来加盟迎接光明</a></li>
                    <li><a href="/ppal/6875.html" title="在农村开休闲零食连锁店">在农村开休闲零食连锁店</a></li>
                    <li><a href="/ppal/6825.html" title="开一扫光休闲食品加盟店">开一扫光休闲食品加盟店</a></li>
                    <li><a href="/ppal/6348.html" title="利润高、好经营的创业项">利润高、好经营的创业项</a></li>
                    <li><a href="/ppal/4474.html" title="90后创业成功例子：开零食">90后创业成功例子：开零食</a></li>
                    <li><a href="/ppal/4279.html" title="大学生开零食码头加盟店">大学生开零食码头加盟店</a></li>
                    <li><a href="/ppal/4223.html" title="良品铺子零食店加盟小本">良品铺子零食店加盟小本</a></li>

                </ul>
            </div>
        </div>
    </div>

    <!--新闻中心 End-->

    <!--品牌案例 End-->

    <!--新闻中心 Start-->
    <div class="box clearfix">
        <div class="btb ">
            <div class="title">零食店加盟</div>
            <ul>
                <li>
                    <h2 style="font-size:12px;"><a href="/lirun/">零食店利润</a></h2>
                </li>
                <li>
                    <h2 style="font-size:12px;"><a href="/feiyong/">零食加盟费多少</a></h2>
                </li>
            </ul>
        </div>
        <div class="in_bkb">
            <div class="in_dllb1 leftfg">
                <div class="title"><strong><a href="/lirun/">零食店利润</a></strong></div>
                <ul>
                    <li class="tj"> <a href="/lirun/9335.html"><img src="/uploads/allimg/170609/1-1F609144922c2-lp.jpg" alt="开休闲食品加盟店利润高" width="96" height="69" /></a> <strong><a href="/lirun/9335.html">开休闲食品加盟店利润高</a></strong> <span><a href="/lirun/9335.html">查看详情</a></span>
                    </li>
                    <li><a href="/lirun/10490.html" title="守柴炉烤鸭加盟赚钱吗？">守柴炉烤鸭加盟赚钱吗？</a></li>
                    <li><a href="/lirun/10488.html" title="麦格维多面包加盟赚钱吗">麦格维多面包加盟赚钱吗</a></li>
                    <li><a href="/lirun/10474.html" title="零食世家加盟利润有多少">零食世家加盟利润有多少</a></li>
                    <li><a href="/lirun/10424.html" title="戴永红炒货加盟赚钱吗？">戴永红炒货加盟赚钱吗？</a></li>
                    <li><a href="/lirun/10414.html" title="牛厨零食加盟利润有多少">牛厨零食加盟利润有多少</a></li>
                    <li><a href="/lirun/10406.html" title="怡佳仁零食加盟赚钱吗？">怡佳仁零食加盟赚钱吗？</a></li>
                    <li><a href="/lirun/10405.html" title="俏嘴巴休闲食品加盟能赚">俏嘴巴休闲食品加盟能赚</a></li>
                    <li><a href="/lirun/10393.html" title="零食多休闲食品加盟赚钱">零食多休闲食品加盟赚钱</a></li>

                </ul>
            </div>
            <div class="news_tj">
                <div class="title">
                    <h2 style="font-size:14px;"><strong><a href="/feiyong/">零食加盟费多少</a></strong></h2>
                </div>
                <div class="news_tja">
                    <h3><a href="/feiyong/9371.html">加盟良品铺子零食要多少</a></h3>
                    <p>加盟良品铺子零食要多少成本？作为今年来非常热门的投资项目， 休闲食品加盟 绝对是值得投…</p>
                </div>

                <ul>
                    <li><em>2018-11-19</em><a href="/feiyong/10493.html" title="方燕烤猪蹄加盟费多少钱">方燕烤猪蹄加盟费多少钱</a></li>
                    <li><em>2018-11-15</em><a href="/feiyong/10487.html" title="Q客家进口食品加盟费需要">Q客家进口食品加盟费需要</a></li>
                    <li><em>2018-11-15</em><a href="/feiyong/10485.html" title="苁珍食品加盟费需要多少">苁珍食品加盟费需要多少</a></li>
                    <li><em>2018-11-08</em><a href="/feiyong/10482.html" title="馋嘴王休闲食品加盟费需">馋嘴王休闲食品加盟费需</a></li>
                    <li><em>2018-11-08</em><a href="/feiyong/10480.html" title="上上丫加盟费需要多少钱">上上丫加盟费需要多少钱</a></li>
                    <li><em>2018-09-25</em><a href="/feiyong/10449.html" title="苏州阿小零食加盟费需要">苏州阿小零食加盟费需要</a></li>
                    <li><em>2018-09-18</em><a href="/feiyong/10440.html" title="开一家一品香炒货加盟店">开一家一品香炒货加盟店</a></li>
                    <li><em>2018-09-07</em><a href="/feiyong/10437.html" title="贪吃小站休闲食品加盟费">贪吃小站休闲食品加盟费</a></li>

                </ul>
            </div>
            <div class="in_dllb1 rightfg">
                <div class="title">
                    <h2 style="font-size:14px;"><strong><a href="/ppxw/">零食品牌新闻</a></strong></h2>
                </div>
                <ul>
                    <li class="tj"> <a href="/ppxw/1882.html"><img src="/uploads/allimg/170623/1-1F62313324K37.jpg" alt="百草味零食加盟是你创业" width="96" height="69" /></a> <strong><a href="/ppxw/1882.html">百草味零食加盟是你创业</a></strong> <span><a href="/ppxw/1882.html">查看详情</a></span>
                    </li>
                    <li><a href="/ppxw/9171.html" title="零食多加盟流程具体是这">零食多加盟流程具体是这</a></li>
                    <li><a href="/ppxw/9944.html" title="开美食美客休闲食品加盟">开美食美客休闲食品加盟</a></li>
                    <li><a href="/ppxw/9942.html" title="开一家盐津铺子休闲食品">开一家盐津铺子休闲食品</a></li>
                    <li><a href="/ppxw/9955.html" title="丁老头加盟费需要多少钱">丁老头加盟费需要多少钱</a></li>
                    <li><a href="/ppxw/9963.html" title="戴永红炒货休闲食品加盟">戴永红炒货休闲食品加盟</a></li>
                    <li><a href="/ppxw/9962.html" title="向妈妈牛肉干加盟费需要">向妈妈牛肉干加盟费需要</a></li>
                    <li><a href="/ppxw/9947.html" title="华味多休闲食品生意需要">华味多休闲食品生意需要</a></li>
                    <li><a href="/ppxw/9937.html" title="公主驾到零食加盟费是多">公主驾到零食加盟费是多</a></li>

                </ul>
            </div>
        </div>
    </div>

    <!--加盟知识 End-->

    <div class="in_cp">
        <div class="title"><span class="more"><a href="/cpzh/" target="_blank">更多>></a></span>产品推荐</div>
        <div class="marquee7">
            <ul>
                <li><span><a href="/cpzh/1982.html"><img src="/uploads/allimg/170623/1-1F62313354N39.jpg" alt="百草味手撕猪肉铺（原味" width="160" height="160"/></a></span> <strong><a href="/cpzh/1982.html">百草味手撕猪肉铺（原味</a></strong></li>
                <li><span><a href="/cpzh/1981.html"><img src="/uploads/allimg/170623/1-1F623133521M4.jpg" alt="百草味蜜汁鳕鱼片" width="160" height="160"/></a></span> <strong><a href="/cpzh/1981.html">百草味蜜汁鳕鱼片</a></strong></li>
                <li><span><a href="/cpzh/1980.html"><img src="/uploads/allimg/170623/1-1F623133449114.jpg" alt="百草味灯影麻辣味牛肉丝" width="160" height="160"/></a></span> <strong><a href="/cpzh/1980.html">百草味灯影麻辣味牛肉丝</a></strong></li>
                <li><span><a href="/cpzh/1979.html"><img src="/uploads/allimg/170623/1-1F623133413P3.jpg" alt="百草味酱烧猪蹄" width="160" height="160"/></a></span> <strong><a href="/cpzh/1979.html">百草味酱烧猪蹄</a></strong></li>
                <li><span><a href="/cpzh/1978.html"><img src="/uploads/allimg/170623/1-1F623133334440.jpg" alt="百草味沙爹/五香/香辣手撕" width="160" height="160"/></a></span> <strong><a href="/cpzh/1978.html">百草味沙爹/五香/香辣手撕</a></strong></li>
                <li><span><a href="/cpzh/8144.html"><img src="/uploads/allimg/170328/1-1F32Q60451E1-lp.jpg" alt="自由自在迷你海苔" width="160" height="160"/></a></span> <strong><a href="/cpzh/8144.html">自由自在迷你海苔</a></strong></li>
                <li><span><a href="/cpzh/8143.html"><img src="/uploads/allimg/170328/1-1F32Q6032BE-lp.jpg" alt="自由自在啪啪通虾片" width="160" height="160"/></a></span> <strong><a href="/cpzh/8143.html">自由自在啪啪通虾片</a></strong></li>

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
            <p> <li><a href='http://www.51xxsp.com/' target='_blank'>51加盟网</a> </li><li><a href='http://www.xiuxianshipin.com' target='_blank'>休闲食品加盟网</a> </li> </p>
        </div>
        <div class="footer_xx box clearfix">
            <div class="footer_xx_l">
                <div class="title">服务热线</div>
                <div class="footer_phone"><span>4008-896-216</span></div>
                <p>QQ咨询：2853769165</p>
                <p>电话咨询：4008896216</p>
                <p> <a href="tencent://message/?Menu=yes&uin=2853769165&Site=96&Service=300&sigT=45a1e5847943b64c6ff3990f8a9e644d2b31356cb0b4ac6b24663a3c8dd0f8aa12a595b1714f9d45&Sid=1" rel="nofollow"><img height="29" width="124" alt="在线客服" src="/frontend/images/qq_img.png"></a> </p>
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