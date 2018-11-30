<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Acreagement;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListNewsController extends Controller
{
    /**文档列表 通配 包含普通文档 品牌文档及产品文档
     * @param $path
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listNews(Request $request,$path,$page=0)
    {
        $typeid=Arctype::where('real_path',preg_replace('/\/page\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        $thistypeinfo=Arctype::where('id',$typeid)->first();
        $typeids=Arctype::where('reid',$typeid)->pluck('id');
        $cid=$path;
        //针对不同栏目类型返回不同类型页面
        //普通文档列表
        if(Arctype::where('id',$typeid)->value('mid')==0)
        {
            $pagelists=Archive::where('typeid',$typeid)->orderBy('id','desc')->paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page);
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            $sontypes=Arctype::where('reid',$thistypeinfo->id)->get();
            $cnewtops=Archive::where('typeid',$typeid)->where('flags','like','%'.'c'.'%')->take(4)->latest()->get();
            $hnewtops=Archive::where('typeid',$typeid)->where('flags','like','%'.'h'.'%')->take(6)->latest()->get();
            $topbrands=Brandarticle::where('mid','1')->take(5)->orderBy('click','desc')->get();
            $latestbrands=Brandarticle::where('mid','1')->take(5)->latest()->get();
            $latesenews=Archive::where('typeid','<>',$thistypeinfo->id)->take(7)->latest()->get();
            $brandnews=Archive::where('typeid',9)->take(10)->orderBy('id','desc')->get();
            return view('mobile.index_lists',compact('thistypeinfo','pagelists','cnewtop','cnewtops','topbrands','latestbrands','latesenews','sontypes','hnewtops'));
        }elseif (Arctype::where('id',$typeid)->value('mid')==1)
        {
            $cid=preg_replace('/\/page\/[0-9]+/','',$path);
            $pagelists=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->orderBy('id','desc')->distinct()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            $topbrands=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->take(6)->orderBy('click','desc')->get();
            $lastestbrands=Brandarticle::whereIn('typeid',$typeids)->orwhere('typeid',$typeid)->take(6)->orderBy('click','desc')->get();
            $latesenews=Archive::where('typeid','<>',$thistypeinfo->id)->take(7)->latest()->get();
            return view('mobile.brands',compact('thistypeinfo','topbrandnavs','pagelists','topbrands','cnewslists','latesenews','lastestbrands'));
        }

    }

}
