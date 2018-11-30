@extends('mobile.mobile')
@section('title'){{$thisarticleinfos->title}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('main_content')
    <!--幻灯end-->
    <p class="bg-primary">  <a href='/'>主页</a> > <a href='/{{$thisarticleinfos->arctype->real_path}}/'>{{$thisarticleinfos->typename}}</a> > </p>

    <div class="container-fluid list_clear">
        <div clas="row">
            <div class="col-xs-12">
                <div id="content">
                    <!--品牌介绍 Start-->
                    <div class="brand_js">
                        <dl class="clearfix">
                            <dt class="col-xs-5"><a href="/fenlei/1478.html"><img src="/uploads/151028/4-15102Q41350261.png" alt="零食满屋" /></a></dt>
                            <dd class="col-xs-7">
                                <h1><a href="/fenlei/1478.html">零食满屋加盟</a></h1>
                                <em>品牌名称:<a href="/fenlei/1478.html">零食满屋</a></em><br/>
                                <em>成立时间：2012年</em><br/>
                                <em>加盟费用：4-15万元</em><br/>
                                <strong></strong>
                            </dd>
                        </dl>
                        <div class="brand_js2 col-xs-12">

                            <p><strong>区域特许：</strong>全国</p>
                            <p><strong>合作模式：</strong>加盟 连锁</p>
                            <p><strong>主营产品：</strong>休闲食品，小零食</p>
                            <p><strong>运营机构：</strong>湖南零食满屋食品连锁有限公司</p>
                            <p><strong>公司地址：</strong>长沙市天心区</p>
                            <div class="ly_button">
                                <a href="#liuyan" class="ly_b1">快速留言</a>
                            </div>

                        </div>
                    </div>

                    <!--品牌介绍 End-->
                    <script>
                        $(function(){
                            var nrW = $('.brand_content1').width();
                            $('.brand_content1 img').each(function(){
                                if($(this).width() > nrW)
                                    $(this).css('width',nrW);
                                $(this).css('height','auto');
                            })
                        });
                    </script>
                    <div class="brand_content">

                        <h2 class="bt_bg col-xs-12"></h2>
                        <h1>{{$thisarticleinfos->title}}</h1>
                        <small>时间：{{$thisarticleinfos->created_at}}  |  浏览量:{{$thisarticleinfos->click}}</small>
                        　{!! $thisarticleinfos->body !!}
                        <div class="col-xs-12 btn_marign btn_marign2">
                            <div class="col-xs-6"><a href="javascript:void(0)" onclick="openZoosUrl();return false;">
                                    <button type="button" class="btn btn-danger">开店咨询</button></a>
                            </div>
                            <div class="col-xs-6"><a href="javascript:void(0)" onclick="openZoosUrl();return false;"><button type="button" class="btn btn-warning">索要资料</button></a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="shangxiapian clearfix">
            <span>@if(isset($prev_article)) <span>上一篇：<a href="{{config('app.url')}}/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}/" title="{{$prev_article->title}}">{{str_limit($prev_article->title,40,'')}}</a></span> @else 没有了 @endif </span>
            <em>@if(isset($next_article))  <span class="right">下一篇：<a href="{{config('app.url')}}/{{$next_article->arctype->real_path}}/{{$next_article->id}}/" title="{{$next_article->title}}">{{str_limit($next_article->title,40,'')}}</a></span> @else 没有了 @endif </em>
        </div>
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
            <p class="bg-primary">  <span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span> 相关阅读</p>
        </ul>
        <ul class="list-group tjw_z">

            @foreach($latestnewslists as $latestnewslist)
            <li class="list-group-item"><a href="/{{$latestnewslist->arctype->real_path}}/{{$latestnewslist->id}}.html">{{$latestnewslist->title}}</a></li>
            @endforeach

        </ul>


    </div>



@stop