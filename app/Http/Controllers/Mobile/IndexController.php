<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Ask;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        //幻灯底部推荐
        $cbrands=Brandarticle::where('typeid',1)->where('flags','like','%c%')->take(3)->orderBy('id','desc')->get();
        $abrands=Brandarticle::where('typeid',1)->where('flags','like','%a%')->take(10)->orderBy('id','desc')->get();
        $paihangbangs=Brandarticle::where('typeid',1)->take(10)->orderBy('click','desc')->get();
        $latestbrands =Brandarticle::where('typeid',1)->take(24)->latest()->orderBy('id','desc')->get();
        $yinpinjmtypes=Arctype::where('reid',3)->take(3)->get();
        $yphynews=Archive::where('typeid',2)->latest()->take(4)->get();
        $ypasks=Archive::where('typeid',5)->latest()->take(10)->get();
        $anlinews=Archive::where('typeid',4)->latest()->take(10)->get();
        $yinpintypes=Arctype::where('reid',6)->take(3)->get();
        $lirunnews=Archive::where('typeid',8)->latest()->take(4)->get();
        $feiyongnews=Archive::where('typeid',8)->latest()->take(4)->get();
        $ppxwnews=Archive::where('typeid',9)->latest()->take(4)->get();
        $hbrands=Brandarticle::where('flags','like','%h%')->take(10)->orderBy('id','desc')->get();
        $flinks=flink::all();
        return view('mobile.index',compact('cbrands','abrands','paihangbangs','latestbrands','yinpinjmtypes','yphynews','ypasks','anlinews','yinpintypes','lirunnews','feiyongnews','ppxwnews','hbrands','flinks'));
    }

}
