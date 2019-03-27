<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article as ArticleModel;
use app\index\model\Links as LinksModel;
class Index extends Controller
{
    public function index()
    {
    	$list = ArticleModel::paginate(5);
    	$this->assign("list",$list);
    	$hotList = ArticleModel::order('read_times', 'desc')->limit(5)->select();
    	$this->assign("hotList",$hotList);
    	$recentList = ArticleModel::order('create_time', 'desc')->limit(5)->select();
    	$this->assign("recentList",$recentList);
    	$linkList = LinksModel::limit(3)->select();
    	$this->assign("linkList",$linkList);
    	return view();
    }
    public function show(){
    	$id = input('id');
    	$text = db('article')->where('id',$id)->find();
    	$this->assign('vo',$text);
    	return view();
    }
   

}
