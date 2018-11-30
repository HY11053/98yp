<?php

namespace App\Http\Controllers\Mobile;
use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeacrhController extends Controller
{
    public function SeacrhBrand(Request $request)
    {
        $pagelists=Brandarticle::where('brandname','like','%'.$request->keywords.'%')->paginate(30);
        $topbrands=Brandarticle::take(6)->orderBy('click','desc')->get();
        $lastestbrands=Brandarticle::take(6)->orderBy('click','desc')->get();
        $latesenews=Archive::take(7)->latest()->get();
        return view('mobile.search_brand',compact('thistypeinfo','topbrandnavs','pagelists','topbrands','cnewslists','latesenews','lastestbrands'));
    }
}
