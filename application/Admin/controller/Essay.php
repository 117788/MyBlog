<?php
namespace app\admin\controller;
use app\admin\model\Essay as EssayModel;
class Essay extends Base
{
    public function lst()
    {
    	$list = EssayModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function add(){
    	if(request()->isAjax()){
    		$post = input('post.');
    		$essays = new EssayModel;
    		$res = $essays->save([
    			'text'=>$post['text'],
    		]);
    		if($res){
    			$this->success("添加随笔成功！",'essay/lst');
    		}else{
    			$this->error('添加随笔失败！！');
    		}
    		
    	}
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$essay = db('essay')->find($id);
	    $this->assign('essay',$essay);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    $data = [
    			'text'=>$post['text'],
		    ];
		   	$essayModel = new EssayModel;
		   	$save = $essayModel->save($data,['id' => $id]);
		    if($save !== false)
		    {
		    	$this->success('修改随笔成功！','lst');
		    	
		    }else{
		    	$this->error('修改随笔失败！');
		    }
		    
    	}
    	return $this->fetch();
    }
	public function del(){
		$id = input('id');
		// 软删除
		$essay = EssayModel::get($id);
		$res = $essay->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
