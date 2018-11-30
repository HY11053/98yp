<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AdminModel\Comment;

class ArticleController extends Controller
{
    public function getArticle(Request $request,$path,$id)
    {
        $thisarticleinfos=Archive::findOrFail($id);
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',$path)->value('id'));
        if ($thistypeinfo->mid==1)
        {
            $thisarticleinfos=Brandarticle::findOrFail($id);
            $pics=array_filter(explode(',',$thisarticleinfos->imagepics));
            $brandnews=Archive::where('brandid',$id)->take(10)->orderBy('id','desc')->get();
            $topbrands=Brandarticle::take(10)->orderBy('click','desc')->get();
            $cbrands=Brandarticle::take(10)->where('flags','like','%c%')->orderBy('id','desc')->get();
            $latesnews=Archive::take(5)->orderBy('id','desc')->get();
            $latestbrands=Brandarticle::take(5)->orderBy('id','desc')->get();
            $cnewslists=Archive::where('flags','like','%c%')->take(10)->orderBy('id','desc')->get();
            $published=$thisarticleinfos->created_at;
            DB::table('brandarticles')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
            return view('mobile.brand_article',compact('thisarticleinfos','pics','brandnews','topbrands','latesnews','indexname','latestbrands','cbrands','cnewslists'));
        }else{
            $published=$thisarticleinfos->created_at;
            DB::table('archives')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
            $prev_article = Archive::latest('published_at')->find($this->getPrevArticleId($thisarticleinfos->id));
            $next_article = Archive::latest('published_at')->find($this->getNextArticleId($thisarticleinfos->id));
            $flashlingshibrands=Brandarticle::where('mid','1')->take(6)->orderBy('id','desc')->get();
            $brandnews=Archive::where('typeid',9)->take(10)->orderBy('id','desc')->get();
            $hotnewslists=Archive::where('flags','like','%h%')->take(10)->orderBy('id','desc')->get();
            $latestnewslists=Archive::take(10)->latest()->get();
            $cnewslists=Archive::where('flags','like','%c%')->take(10)->orderBy('id','desc')->get();
            return view('mobile.article_article',compact('thisarticleinfos','prev_article','next_article','flashlingshibrands','latestnewslists','brandnews','hotnewslists','cnewslists'));

        }
    }

    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->max('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->min('id');
    }

}
