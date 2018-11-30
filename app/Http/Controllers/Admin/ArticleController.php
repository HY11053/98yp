<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Acreagement;
use App\AdminModel\Admin;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Http\Requests\CreateArticleRequest;
use App\Helpers\UploadImages;
use App\Http\Requests\CreateBrandArticleRequest;
use App\Notifications\ArticlePublishedNofication;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Log;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**文档列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Index()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc')->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**品牌文档查看
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Brands()
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc ')->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }
    /**品牌文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PostArticleBrandSearch(Request $request)
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**普通文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Create()
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        return view('admin.article_create',compact('allnavinfos'));
    }

    /**品牌文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandCreate()
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',1)->pluck('typename','id');
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandcreate',compact('allnavinfos','investments','acreagements'));
    }

    /**文档创建提交数据处理
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostCreate(CreateArticleRequest $request)
    {
        if(Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        $request['brandid']= !empty($request['bdname'])?Brandarticle::withoutGlobalScope(PublishedScope::class)->where('brandname','like','%'.$request['bdname'].'%')->value('id'):0;
        $request['brandid']=!empty($request['brandid'])?$request['brandid']:0;
        $this->RequestProcess($request);
        if ( Archive::create($request->all())->wasRecentlyCreated)
        {
            auth('admin')->user()->notify(new ArticlePublishedNofication(Archive::latest() ->first()));
            return redirect(action('Admin\ArticleController@Index'));
        }
    }

    /**
     * 品牌文档提交处理
     * @param CreateBrandArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function PostBrandArticle(CreateBrandArticleRequest $request)
    {
        if(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->where('created_at','>',Carbon::today())->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        $this->RequestProcess($request);
        if (Brandarticle::create($request->all())->wasRecentlyCreated)
        {
            return redirect(action('Admin\ArticleController@Brands'));
        }
    }

    /**普通文档文档编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Edit($id)
    {
        $articleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrfail($id);
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        $pics=explode(',',Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'));
        return view('admin.article_edit',compact('id','articleinfos','allnavinfos','pics'));
    }
    public function BrandEdit($id)
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',1)->pluck('typename','id');
        $pics=explode(',',Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'));
        $articleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first();
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandedit',compact('id','articleinfos','allnavinfos','pics','investments','acreagements'));
    }

    /**文档编辑提交处理
     * @param CreateArticleRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEdit(CreateArticleRequest $request,$id)
    {
        $request['brandid']= !empty($request['bdname'])?Brandarticle::withoutGlobalScope(PublishedScope::class)->where('brandname','like','%'.$request['bdname'].'%')->value('id'):0;
        $request['brandid']=!empty($request['brandid'])?$request['brandid']:0;
        $this->RequestProcess($request);
        $thisarticleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
        return redirect(action('Admin\ArticleController@Index'));
    }

    public function PostBrandArticleEditor(CreateBrandArticleRequest $request,$id)
    {
        $this->RequestProcess($request);
        $thisarticleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
        return redirect(action('Admin\ArticleController@Brands'));
    }

    /**
     *自定义文档属性及缩略图处理
     * @param Request $request
     * @return Request
     */
    private function RequestProcess(Request $request)
    {
        $request['keywords']=$request['keywords']?$request['keywords']:$request['title'];
        $request['click']=rand(100,900);
        $request['description']=(!empty($request['description']))?str_limit($request['description'],180,''):str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($request['body']))), $limit = 180, $end = '');
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        //自定义文档属性处理
        if(isset($request['flags']))
        {
            $request['flags']=UploadImages::Flags($request['flags']);
        }
        //缩略图处理
        if($request['image'])
        {
            $request['litpic']=UploadImages::UploadImage($request,'image');
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }elseif (isset($request['litpic']) && !empty($request['litpic']))
        {
            $request['litpic']=$request['litpic'];
        }elseif (preg_match('/<[img|IMG].*?src=[\' | \"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/i',$request['body'],$match)){
            $request['litpic']=$match[1];
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }
        //首页推荐图处理
        if($request['indexlitpic']) {
            $request['indexpic'] = UploadImages::UploadImage($request, 'indexlitpic');
        }
        //图集处理
        $request['imagepics']=rtrim($request->input('imagepics'),',');
        return $request;
        if (Admin::where('id',auth('admin')->id())->value('type')!=1)
        {
            $request['ismake']=0;
        }
    }
    /**当前用户发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function OwnerShip()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**当前用户发布的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandArticleOwnerShip()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }


    /**等待审核的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAudit()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**等待审核的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAuditBrandarticle()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**等待发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PedingPublished(){
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**普通文档删除
     * @param $id
     * @return string
     */
    function DeleteArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**品牌文档删除
     * @param $id
     * @return string
     */
    public function DeleteBrandArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            dd('deny');
            Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }


    /**文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PostArticleSearch(Request $request)
    {
        $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }


    /** 栏目文章查看
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Type($id)
    {
        switch (Arctype::where('id',$id)->value('mid'))
        {
            case 0:
                $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.article';
                break;
            case 1:
                $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.brandarticle';
                break;
        }
        return view($view,compact('articles'));
    }


    /**重复标题检测
     * @param Request $request
     * @return int
     */
    public function ArticletitleCheck(Request $request)
    {
        $title=Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->count();
        if (!$title)
        {
            $title=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->value('title');
        }
        return $title?1:0;
    }

}
