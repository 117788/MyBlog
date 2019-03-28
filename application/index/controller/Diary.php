<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Diary as DiaryModel;
use app\index\model\Comment as CommentModel;
class Diary extends Controller
{
    public function index()
    {
    	$diary = DiaryModel::paginate(5);
    	$this->assign("diary",$diary);
    	return view();
    }
    public function show()
    {
    	$id = input('id');
    	$list = CommentModel::where('diary_id',$id)->paginate(2);
    	$diary = db('diary')->where('id',$id)->find();
    	$this->assign("diary",$diary);
    	$this->assign("list",$list);
    	return view();
    }

}
