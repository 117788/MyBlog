<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Essay as EssayModel;
class Essay extends Controller
{
    public function index()
    {
    	$essay =EssayModel::select();
    	$this->assign('essay',$essay);
    	return view();
    }

}
