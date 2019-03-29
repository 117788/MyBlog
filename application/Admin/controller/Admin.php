<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
class Admin extends Base
{
    public function lst()
    {
    	$list = AdminModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function add(){
    	if(request()->isPost()){
    		$post = input('post.');
    		$admins = new AdminModel;
    		$res = $admins->save([
    			'username'=>$post['username'],
    			'password'=>md5($post['password']),
    			'email'=>$post['email'],
    			'info'=>$post['info'],
    			'name'=>$post['name'],
    			'img' =>cookie('url'),
    		]);
    		if($res){
    			$this->success("添加管理员成功！",'admin/lst');
    		}else{
    			$this->error('添加管理员失败！！');
    		}
    		
    	}
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$admins = db('admin')->find($id);
	    $this->assign('admins',$admins);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    $data = [
		    	'email'=>$post['email'],
		    	'info'=>$post['info'],
		    	'name'=>$post['name'],
		    ];
		    if($post['password'])
		    {
		    	$data['password'] = md5($post['password']);
		    }else{
		    	$data['password'] = $admins['password'];
		    }
		    
		    if(cookie('url')){
		    	$data['img'] = cookie('url');
		    }else{
		    	$data['img'] = $admins['pic'];
		    }
		   	$admins = new AdminModel;
		   	$save = $admins->save($data,['id' => $id]);
		    if($save !== false)
		    {
		    	$this->success('修改管理员成功！','lst');
		    	
		    }else{
		    	$this->error('修改管理员失败！');
		    }
		    
    	}
    	return $this->fetch();
    }
    public function upload()
    {
        $img = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $img->move('static/uploads/admin');
        $url = 'uploads/admin/' . $info->getSaveName();
        
        if($info){
        	if(cookie('url')){
        		cookie('url',null);
        	}
        	cookie('url',$url);
        	if(cookie('url')){
            	return json(['code' => 0, 'msg' => '上传成功!', 'url' => 'static/uploads/admin/' . $info->getSaveName()]);
        	}
            // 成功上传后 获取上传信息

        }else{
            // 上传失败获取错误信息
            return json(['code' => 1, 'msg' => $img->getError(), 'url' => '']);
        }
        

	}

}
