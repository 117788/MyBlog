<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article as ArticleModel;
class Technology extends Controller
{
    public function index()
    {   if(input('tag1') == "Security"){
    		$tag1 = "网络安全";
    	}else{
    		$tag1 = input('tag1');
    	}
    	$list = ArticleModel::where('tag1',$tag1)->paginate(2);
    	$this->assign("list",$list);
    	$this->assign("tag1",$tag1);
    	return view();
    }
    public function show(){
    	$id = input('id');
    	$text = ArticleModel::where('id',$id)->find();
    	$this->assign('vo',$text);
    	return view();
    }
   

}
