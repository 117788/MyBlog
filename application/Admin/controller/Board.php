<?php
namespace app\admin\controller;
use app\admin\model\Board as BoardModel;
class Board extends Base
{
    public function lst()
    {
    	$list = BoardModel::where('level',0)->paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$Board = db('board')->find($id);
	    $this->assign('board',$Board);
	    $replyRes = BoardModel::where('pid',$id)->find();
	    if(!$replyRes){
		    $this->assign("reply",null);
		}else{
		    $this->assign("reply",$replyRes);
		}
	   
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    if(input('state') == 'on'){
    			$data['state'] = 1;
    		}else{
    			$data['state'] = 0;
    		}
		    $reply = [
		    	'name'=>'admin',
		    	'email'=>'email',
		    	'pid'=>$id,
		    	'level'=>1,
    			'text'=>$post['text'],
    			'ip'=>"admin",
		    ];
		    
		    if(!$replyRes){
		    	$this->assign("reply",0);
		    	if($post['text'] !== ''){
		    		$data['reply'] = 1;
		    		$BoardModel2 = new BoardModel;
		   			$save1 = $BoardModel2->save($reply);
		    	}
		    	
		    }else{
		    	if($post['text'] == ''){
		    		$data['reply'] = 0;
		    		$rep= db('board')->delete($replyRes['id']);
		    	}else{
		    		$rep= BoardModel::get($replyRes['id']);
		    		$save1 = $rep->save($reply);
		    	}
		    	$this->assign("reply",$replyRes);
		    	
		    }
		   	$BoardModel1 = new BoardModel;
		   	$save = $BoardModel1->save($data,['id' => $id]);

		    if($save !== false )
		    {
		    	$this->success('修改成功！','lst');
		    	
		    }else{
		    	$this->error('修改失败！');
		    }
		    
    	}
    	return $this->fetch();
    }
	public function del(){
		$id = input('id');
		// 软删除
		$Board = BoardModel::get($id);
		db('board')->where('pid',$id)->delete();
		$res = $Board->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
