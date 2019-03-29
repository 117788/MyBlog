<?php
namespace app\admin\controller;
use app\admin\model\Project as ProjectModel;
class Project extends Base
{
    public function lst()
    {
    	$list = ProjectModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function add(){
    	if(request()->isPost()){
    		$post = input('post.');
    		$projects = new ProjectModel;
    		if(input('original') == 'on'){
    			$data['original'] = 1;
    		}else{
    			$data['original'] = 0;
    		}
    		if(input('complete') == 'on'){
    			$data['complete'] = 1;
    		}else{
    			$data['complete'] = 0;
    		}
    		$res = $projects->save([
    			'name'=>$post['name'],
    			'info'=>$post['info'],
    			'original'=>$data['original'],
    			'complete'=>$data['complete'],
    			'tag1'=>$post['tag1'],
    			'tag2'=>$post['tag2'],
    			'gitUrl'=>$post['gitUrl'],
    			'img' =>cookie('url'),
    		]);
    		if($res){
    			$this->success("添加项目成功！",'lst');
    		}else{
    			$this->error('添加项目失败！！');
    		}
    		
    	}
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$project = db('project')->find($id);
	    $this->assign('project',$project);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    if(input('original') == 'on'){
    			$data['original'] = 1;
    		}else{
    			$data['original'] = 0;
    		}
    		if(input('complete') == 'on'){
    			$data['complete'] = 1;
    		}else{
    			$data['complete'] = 0;
    		}
		    $data = [
		    	'name'=>$post['name'],
    			'info'=>$post['info'],
    			'original'=>$data['original'],
    			'complete'=>$data['complete'],
    			'tag1'=>$post['tag1'],
    			'tag2'=>$post['tag2'],
    			'gitUrl'=>$post['gitUrl'],
		    ];
		    if(input('state') == 'on'){
    			$data['top'] = 1;
    		}else{
    			$data['top'] = 0;
    		}
		    
		    if(cookie('url')){
		    	$data['img'] = cookie('url');
		    }else{
		    	$data['img'] = $project['pic'];
		    }
		   	$projectModel = new ProjectModel;
		   	$save = $projectModel->save($data,['id' => $id]);
		    if($save !== false)
		    {
		    	$this->success('修改项目成功！','lst');
		    	
		    }else{
		    	$this->error('修改项目失败！');
		    }
		    
    	}
    	return $this->fetch();
    }
    public function upload()
    {
        $img = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $img->move('static/uploads/project');
        $url = 'uploads/project/' . $info->getSaveName();
        
        if($info){
        	if(cookie('url')){
        		cookie('url',null);
        	}
        	cookie('url',$url);
        	 // 成功上传后 获取上传信息
        	if(cookie('url')){
        		 $data['src'] = 'http://localhost/MyBlog/public/static/uploads/project/'.$info->getSaveName();
            	 $this->result($data,0,'上传成功');
        	}
           

        }else{
            // 上传失败获取错误信息
            $this->result('',200,$file->getError());
        }

	}
	public function del(){
		$id = input('id');
		// 软删除
		$project = projectModel::get($id);
		$res = $project->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
