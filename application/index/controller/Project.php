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
    	$project_all = ProjectModel::count();
    	$project_study = ProjectModel::where('original',0)->count();
    	$project_own = ProjectModel::where('original',1)->count();
    	$project_complete = ProjectModel::where('complete',1)->count();
    	$project_nocomplete = ProjectModel::where('complete',0)->count();
    	$now_project = ProjectModel::where('complete',0)->limit(5)->select();
    	$ago_project = ProjectModel::where('complete',1)->paginate(5);
    	$this->assign([
    		'project_all'=>$project_all,
    		'project_study'=>$project_study,
    		'project_own'=>$project_own,
    		'project_complete'=>$project_complete,
    		'project_nocomplete'=>$project_nocomplete,
    		'now_project'=>$now_project,
    		'ago_project'=>$ago_project,
    		
    	]);
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
