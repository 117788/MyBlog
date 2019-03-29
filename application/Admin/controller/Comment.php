<?php
namespace app\admin\controller;
use app\admin\model\Comment as CommentModel;
class Comment extends Base
{
    public function lst()
    {
    	$list = CommentModel::where('level',0)->paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$Comment = db('Comment')->find($id);
	    $this->assign('comment',$Comment);
	    $replyRes = CommentModel::where('pid',$id)->find();
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
		    	'article_id'=>$Comment['article_id'],
		    	'diary_id'=>$Comment['diary_id'],
		    	'name'=>'admin',
		    	'email'=>'email',
		    	'pid'=>$id,
		    	'level'=>1,
    			'text'=>$post['text'],
    			'ip'=>"admin",
		    ];
		    if(!$replyRes){
		    	if($post['text'] !== ''){
		    		$CommentModel2 = new CommentModel;
		    		$data['reply'] = 1;
		   			$save1 = $CommentModel2->save($reply);
		    	}
		    
		    }else{
		    	if($post['text'] == ''){
		    		$data['reply'] = 0;
		    		$rep= db('comment')->delete($replyRes['id']);
		    	}else{
		    		$rep= CommentModel::get($replyRes['id']);
		    		$save1 = $rep->save($reply);
		    	}
		    }
		   	$CommentModel1 = new CommentModel;
		   	$save = $CommentModel1->save($data,['id' => $id]);

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
		$Comment = CommentModel::get($id);
		db('comment')->where('pid',$id)->delete();
		$res = $Comment->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
