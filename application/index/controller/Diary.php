<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Diary as DiaryModel;
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
    	$diary = db('diary')->where('id',$id)->find();
    	$this->assign("diary",$diary);
    	return view();
    }

}
