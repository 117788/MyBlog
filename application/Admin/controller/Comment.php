<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Comment as CommentModel;
class Comment extends Controller
{
    public function lst()
    {
    	$list = CommentModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$Comment = db('Comment')->find($id);
	    $this->assign('Comment',$Comment);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    $data = [
    			'text'=>$post['text'],
		    ];
		   	$CommentModel = new CommentModel;
		   	$save = $CommentModel->save($data,['id' => $id]);
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
		$Comment = CommentModel::get($id);
		$res = $Comment->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
