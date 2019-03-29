<?php
namespace app\admin\controller;
use app\admin\model\Links as LinksModel;
class Links extends Base
{
    public function lst()
    {
    	$list = LinksModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function add(){
    	if(request()->isPost()){
    		$post = input('post.');
    		$links = new LinksModel;
    		$res = $links->save([
    			'name'=>$post['name'],
    			'info'=>$post['info'],
    			'url'=>$post['url'],
    		]);
    		if($res){
    			$this->success("添加友情链接成功！",'links/lst');
    		}else{
    			$this->error('添加友情链接失败！！');
    		}
    		
    	}
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$link = db('links')->find($id);
	    $this->assign('link',$link);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    $data = [
		    	'name'=>$post['name'],
    			'info'=>$post['info'],
    			'url'=>$post['url'],
		    ];
		   	$linksModel = new LinksModel;
		   	$save = $linksModel->save($data,['id' => $id]);
		    if($save !== false)
		    {
		    	$this->success('修改友情链接成功！','lst');
		    	
		    }else{
		    	$this->error('修改友情链接失败！');
		    }
		    
    	}
    	return $this->fetch();
    }
	public function del(){
		$id = input('id');
		// 软删除
		$link = LinksModel::get($id);
		$res = $link->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
