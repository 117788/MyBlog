<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Article as ArticleModel;
use app\index\model\Comment as CommentModel;
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
    	$month =array('1','2','3','4','5','6','7','8','9','10','11','12');
    	$this->assign("linkList",$linkList);
    	foreach ($month as $key => $value) {
			$data = ArticleModel::whereBetweenTime('create_time', '2019-'.$value.'-1', '2019-'.$value.'-31')->select();
			if($data->isEmpty()){
				$time[$key] = null;
				$time_count[$key] = 0;
			}else{
				$time[$key] = $data;
				$time_count[$key] = ArticleModel::whereBetweenTime('create_time', '2019-'.$value.'-1', '2019-'.$value.'-31')->count();
				$time_link[$key] = ArticleModel::whereBetweenTime('create_time', '2019-'.$value.'-1', '2019-'.$value.'-31')->paginate(5);
			}
		}
		$this->assign('time',$time);
		$this->assign('time_count',$time_count);
		$this->assign('time_link',$time_link);
    	return view();
    }
    public function sort()
    {
    	$k = input('key');
    	$month =array('1','2','3','4','5','6','7','8','9','10','11','12');
    	foreach ($month as $key => $value) {
			$data = ArticleModel::whereBetweenTime('create_time', '2019-'.$value.'-1', '2019-'.$value.'-31')->select();
			if($data->isEmpty()){
				$time[$key] = null;
				$time_count[$key] = 0;
			}else{
				$time[$key] = $data;
				$time_count[$key] = ArticleModel::whereBetweenTime('create_time', '2019-'.$value.'-1', '2019-'.$value.'-31')->count();
				$time_link[$key] = ArticleModel::whereBetweenTime('create_time', '2019-'.$value.'-1', '2019-'.$value.'-31')->select();
			}
		}
		$this->assign('time_link',$time_link[$k]);
		$this->assign('key',$k);
    	return view();
    }
    public function show(){
    	$id = input('id');
    	$text = ArticleModel::find($id);
    	$list = CommentModel::where('article_id',$id)->paginate(2);
    	$this->assign('vo',$text);
    	$this->assign('list',$list);
    	return view();
    }
   

}
