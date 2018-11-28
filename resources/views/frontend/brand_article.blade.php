@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{$indexname}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{trim($thisarticleinfos->description)}}@stop
@section('headlibs')
<meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
    <meta property="article:author" content="{{config('app.name')}}" />
    <meta property="article:published_first" content="{{config('app.name')}}, {{config('app.url')}}{{Request::getrequesturi()}}" />
    <link rel="stylesheet" href="/frontend/css/list.css" />
@stop
@section('main_content')
    <div class="weizhi"><span><a href='http://www.lingshijmls.com/'>主页</a> > <a href='/fenlei/'>零食品牌大全</a> >  一扫光零食加盟</span></div>
    <div class="pp_xx">
        <h1>一扫光加盟</h1>
        <div class="pp_xx1 clearfix">
            <div class="pp_logo"><a><img src="/uploads/151016/4-151016130T1a5.jpg"  width="120" height="90" alt="一扫光"/> </a></div>
            <div class="pp_xx_c">
                <ul class="clearfix">
                    <li><span>品牌名称：</span>一扫光</li>
                    <li><span>加盟费用：</span><em class="price">5-20万元</em></li>
                    <li><span>加盟人气：</span>2867</li>
                    <li><span>成立时间：</span>1995年</li>
                    <li><span>主营产品：</span>休闲食品，小零食</li>
                    <li><span>区域特许：</span>全国</li>
                    <li><span>运营机构：</span>上海卡哇伊实业有限公司</li>
                    <li><span>合作模式：</span>特许加盟</li>
                    <li class="w1"><span>公司地址：</span>上海</li>
                </ul>
                <div class="pp_line"></div>
            </div>

            <div class="pp_xx_r">
                <div class="pp_phone">联系电话：<strong>4008-896-216</strong></div>
                <span><a  href="#liuyan">立即留言</a></span>
                <em>意向加盟：<i>2867人</i></em>
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
                    　　<div>
                        　　上海卡哇伊实业有限公司是集产品研发、生产加工、外贸进出口及加盟拓展为一体的现代化新型公司，坐落于国际财富胜地&mdash;&mdash;上海。公司拥有招商休闲食品品牌&ldquo;一扫光&rdquo;，是当之无愧的休闲食品加盟行业专家，运营经验丰富，功力深厚。<br />
                        &nbsp;</div>
                    <div style="text-align: center;">
                        <img alt="" src="/uploads/allimg/160310/1-1603101A615258.jpg" style="width: 550px; height: 334px;" /><br />
                        &nbsp;</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　公司致力于打造&ldquo;绿色、健康、美味、营养、精致&rdquo;的快乐休闲食品专卖体系，让人们不断发现美食的乐趣、生活的乐趣。一扫光食品精选优质原料，科学配比，种类多，品种全。10大类、50个系列、1000多款单品，覆盖全人群消费，搞定天下吃货。产品系列包括：</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　休闲零食：坚果炒货类、海鲜类、肉品类、糕点类、糖果类、蜜饯类、聚会食品类；</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　保健功能：防辐射类、白领减压类、美肤美体类；</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　特殊人群：儿童食品类、孕妇食品类、三高人群食品；</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　食品：台湾零食、韩国零食、日本零食、美国零食、新马泰零食、其他地区零食；</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　高档礼盒：标准礼盒+定制礼盒，满足个人及企事业单位各类所需。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　多年来，公司紧扣市场、销售、品牌、服务、管理、生产、物流、培训8大环节凭借超的软硬件实力，稳步发展和前进，集多年加盟业辉煌沉淀，原料采购、自有工厂全产业链覆盖、全程联网管理、终身营销服务、完善培训体系于一身，为创业者带来了巨大的经营利润。一扫光休闲食品品牌是您理想的创富平台！</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　一扫光优势体现</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　运营培训中心</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　零食行业具备专业性，拥有众多实绩的人才培养和输出机构。成立以来共培训过多人次休闲零食从业人才，也是食品业职业经理人和高级管理人才的摇篮。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　食品研发中心</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　凭借先进的研发能力和产品理念，研发出针对三高人群、孕妇人群、儿童的健康休闲食品，将健康、绿色目标完美落地。研发部每月15%新品研发及更新能力，同业，是一扫光品牌决胜终端的重要技术保障。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　加盟成功保障</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　超强的经营能力</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　店面：300平米样板店、科学布局，彰显品牌实力。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　营销：终身店面运营指导，策划团队整合推广，确保四季旺销。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　保障：资源保障体系、全线供应链保障体系、全程营销保障体系。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　管理：以市场与消费者为导向的数据化营销和系统化管理。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　专业化的研发能力</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　多年食品专营团队运营经验，对店面运营、商品订货、数据分析、促销及库存管理等极尽专业，经营手法稳中求胜。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　现代化的仓储物流基地</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　进调换退，流转迅速。24小时全天候物流配送，捷达全国各地，包括三四线城市。</div>
                    <div>
                        &nbsp;</div>
                    <div>
                        　　全部标准货架仓储，每天商品流量上万件，全数字化管理，实行系统订货。</div>

                </div>
                <div class="pp_bt" id="chanpin" style="margin-top:20px;"><strong><a href="#">产品展示</a></strong></div>
                <div class="bka pp_cp">
                    <div class="marquee1">
                        <ul class="clearfix">

                            <li><span><a href="/cpzh/1808.html"><img src="/uploads/allimg/151127/4-15112G52G4A0-lp.jpg" alt="一扫光鸡蛋布丁果冻" width="150" height="150"/></a></span><strong><a href="/cpzh/1808.html">一扫光鸡蛋布丁果冻</a></strong></li><li><span><a href="/cpzh/1809.html"><img src="/uploads/allimg/151127/4-15112G52Sb12-lp.jpg" alt="一扫光芝士鳕鱼肠" width="150" height="150"/></a></span><strong><a href="/cpzh/1809.html">一扫光芝士鳕鱼肠</a></strong></li><li><span><a href="/cpzh/1810.html"><img src="/uploads/allimg/151127/4-15112G5302aH.jpg" alt="一扫光奶油椰皇糖" width="150" height="150"/></a></span><strong><a href="/cpzh/1810.html">一扫光奶油椰皇糖</a></strong></li><li><span><a href="/cpzh/1811.html"><img src="/uploads/allimg/151127/4-15112G53204O1-lp.jpg" alt="一扫光香辣脆笋" width="150" height="150"/></a></span><strong><a href="/cpzh/1811.html">一扫光香辣脆笋</a></strong></li><li><span><a href="/cpzh/1812.html"><img src="/uploads/allimg/151127/4-15112G533262X-lp.jpg" alt="一扫光宝贝蛋" width="150" height="150"/></a></span><strong><a href="/cpzh/1812.html">一扫光宝贝蛋</a></strong></li><li><span><a href="/cpzh/2010.html"><img src="/uploads/allimg/151219/1-151219131911359-lp.jpg" alt="一扫光新疆纸皮核桃" width="150" height="150"/></a></span><strong><a href="/cpzh/2010.html">一扫光新疆纸皮核桃</a></strong></li><li><span><a href="/cpzh/2011.html"><img src="/uploads/allimg/151219/1-151219132022113-lp.jpg" alt="一扫光奶油西瓜子" width="150" height="150"/></a></span><strong><a href="/cpzh/2011.html">一扫光奶油西瓜子</a></strong></li><li><span><a href="/cpzh/2012.html"><img src="/uploads/allimg/151219/1-151219132155210-lp.jpg" alt="一扫光小酒花生" width="150" height="150"/></a></span><strong><a href="/cpzh/2012.html">一扫光小酒花生</a></strong></li><li><span><a href="/cpzh/2013.html"><img src="/uploads/allimg/151219/1-151219132300259-lp.jpg" alt="一扫光碳烤马面鱼片" width="150" height="150"/></a></span><strong><a href="/cpzh/2013.html">一扫光碳烤马面鱼片</a></strong></li><li><span><a href="/cpzh/2014.html"><img src="/uploads/allimg/151219/1-151219132401S8-lp.jpg" alt="一扫光麻辣豆腐干" width="150" height="150"/></a></span><strong><a href="/cpzh/2014.html">一扫光麻辣豆腐干</a></strong></li>





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
                        <li><a href="/ganguo/10263.html">一扫光干果店</a></li><li><a href="/ls/10001.html">南京开休闲食品店选哪家好？选择一扫光 创业有保障</a></li><li><a href="/lingshidianjm/9992.html">云南加盟哪个休闲食品品牌好？选择一扫光 总部支持帮助多</a></li><li><a href="/lingshidianjm/9991.html">长沙适合开什么品牌休闲食品店？选择一扫光 创业立于不败之地</a></li><li><a href="/lingshidianjm/9990.html">南京加盟休闲食品店要多少钱？选择一扫光 创业有保障</a></li><li><a href="/ppxw/9920.html">一扫光加盟店怎么开？开店技巧解析</a></li><li><a href="/ppxw/9919.html">一扫光加盟店开在哪赚钱？开店选址有技巧</a></li><li><a href="/ppxw/9899.html">休闲食品加盟一扫光行吗？加盟优势多</a></li><li><a href="/ppxw/9861.html">一扫光零食店加盟有哪些优势？加盟优势介绍</a></li><li><a href="/ppxw/9822.html">一扫光加盟品牌值不值得选择？加盟理由介绍</a></li>


                    </ul>
                </div>
                <div class="pp_bt" style="height:0; line-height:0; background:none; overflow:hidden;" id="liuyan"></div>
                <div class="liuyan_wx">温馨提示：对项目留言既可免费获得《项目详细资料》，请立即留言</div>
                <div class="liuyan_k">
                    <div class="title"><span>立即留言<em>友情提醒：多留言、多咨询、能降低风险投资！</em></span></div>
                    <div class="liuyan_k1">
                        <form action="http://msg.3198.com/store.do?ident=ysg" onsubmit="return tjcheck3()" method="post">
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
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="/s87Rtl45/js/mswt.js"></script>



        </div>
        <div class="w306">
            <div class="bkb">
                <div class="title">品牌推荐</div>
                <ul class="zc_text2">
                    <li class="red">
                        <p><i>TOP1</i><a href="/fenlei/197.html">良品铺子</a></p>
                        <dl>
                            <dt><a href="/fenlei/197.html" target="_blank"><img src="/uploads/150923/5-15092316391RG.png" alt="良品铺子"/></a></dt>
                            <dd>
                                <span>投资：5-20万</span>
                                <span>指数：10</span>
                                <a href="/fenlei/197.html">查看详情</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="red">
                        <p><i>TOP2</i><a href="/fenlei/1392.html">三只松鼠</a></p>
                        <dl>
                            <dt><a href="/fenlei/1392.html" target="_blank"><img src="/uploads/151022/4-1510221601313L.png" alt="三只松鼠"/></a></dt>
                            <dd>
                                <span>投资：5-8万</span>
                                <span>指数：9</span>
                                <a href="/fenlei/1392.html">查看详情</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="red">
                        <p><i>TOP3</i><a href="/fenlei/1973.html">好想来</a></p>
                        <dl>
                            <dt><a href="/fenlei/1973.html" target="_blank"><img src="/uploads/151216/1-151216161922C3.jpg" alt="好想来"/></a></dt>
                            <dd>
                                <span>投资：5-10万</span>
                                <span>指数：8</span>
                                <a href="/fenlei/1973.html">查看详情</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="red">
                        <p><i>TOP4</i><a href="/fenlei/461.html">老婆大人</a></p>
                        <dl>
                            <dt><a href="/fenlei/461.html" target="_blank"><img src="/uploads/150921/3-150921154215461.png" alt="老婆大人"/></a></dt>
                            <dd>
                                <span>投资：5-15万</span>
                                <span>指数：8</span>
                                <a href="/fenlei/461.html">查看详情</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="red">
                        <p><i>TOP5</i><a href="/fenlei/177.html">百草味</a></p>
                        <dl>
                            <dt><a href="/fenlei/177.html" target="_blank"><img src="/uploads/150923/2-1509231TG6119.jpg" alt="百草味"/></a></dt>
                            <dd>
                                <span>投资：5-15万</span>
                                <span>指数：6</span>
                                <a href="/fenlei/177.html">查看详情</a>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <div class="bkb ullb1">
                <div class="title">加盟资讯</div>
                <ul>
                    <li><a href="/lirun/10488.html">麦格维多面包加盟赚钱吗</a></li>
                    <li><a href="/feiyong/10487.html">Q客家进口食品加盟费需要</a></li>
                    <li><a href="/lingshidianjm/10486.html">咪拉贝儿甜甜圈加盟怎么</a></li>
                    <li><a href="/feiyong/10485.html">苁珍食品加盟费需要多少</a></li>
                    <li><a href="/jmzn/10484.html">欧味多休闲食品加盟店怎</a></li>
                    <li><a href="/lingshidianjm/10483.html">甜蜜都市休闲食品加盟怎</a></li>
                    <li><a href="/feiyong/10482.html">馋嘴王休闲食品加盟费需</a></li>
                    <li><a href="/jmzn/10481.html">喵小萌加盟条件有哪些？</a></li>
                    <li><a href="/feiyong/10480.html">上上丫加盟费需要多少钱</a></li>
                    <li><a href="/lingshidianjm/10479.html">华诚万家休闲食品加盟怎</a></li>

                </ul>
            </div>
            <div class="bkb ullb1">
                <div class="title">相关文章</div>
                <ul>
                    <li><a href="/lsdpxb/9821.html">休闲食品加盟品牌怎么选择？一扫光优势多</a></li><li><a href="/feiyong/9805.html">一扫光休闲食品加盟有哪些好处？好处介绍</a></li><li><a href="/ppxw/9800.html">如何让一扫光加盟店更好？掌握技巧很简单</a></li><li><a href="/kaidianwd/9713.html">零食店加盟选择一扫光好吗？优势介绍</a></li><li><a href="/ppxw/9707.html">加盟一扫光零食怎么样？加盟前景无限</a></li><li><a href="/lsdpxb/9699.html">零食店加盟哪个品牌好？一扫光值得选</a></li><li><a href="/ppxw/9674.html">选择一扫光零食店加盟怎么样？加盟有保障</a></li><li><a href="/ppxw/9665.html">投资一扫光零食加盟怎么样？投资优势好</a></li><li><a href="/ppxw/9649.html">加盟一扫光零食店怎么做？加盟技巧要掌握</a></li><li><a href="/ppxw/9647.html">一扫光加盟店产品管理怎么做？产品管理技巧多</a></li>

                </ul>
            </div>
            <div class="r_xd"></div>
        </div>
    </div>

@stop