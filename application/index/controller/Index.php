<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article as ArticleModel;
class Index extends Controller
{
    public function index()
    {
    	$list = ArticleModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function show(){
    	$id = input('id');
    	$text = db('article')->where('id',$id)->find();
    	$this->assign('vo',$text);
    	return view();
    }
   

}
