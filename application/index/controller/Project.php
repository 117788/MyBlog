<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Project as ProjectModel;
class Project extends Controller
{
    public function index()
    {
    	$project =ProjectModel::select();
    	$this->assign('project',$project);
    	$tag = array("前端","PHP","Python","Linux","Java","Android","C语言","网络安全");
    	$flag = array(0,0,0,0,0,0,0,0);
    	foreach($tag as $k1=>$v1)
		{
		    foreach($project as $k2=>$v2)
		    {
		    	if($v1 == $v2['tag1'])
		    	{
		    		$flag[$k1] = 1;
		    	}
		    }
		}
		$this->assign('flag',$flag);
    	return view();
    }

}
