<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends controller
{
   
    public function index()
    {
    	if(request()->isAjax()){
    		$admin = new Admin();
    		$data = input('post.');
    		$post = input('post.');
	    	$data = [
	    		'code'=>$post['code'],
	    		'username' =>$post['username'],
	    		'password' =>$post['password'],
	    	];
    		if($admin->login($data)==3)
    		{
    			if(input('rFlag')){
	    			$token = md5(uniqid(rand(), TRUE));
	    			cookie('username',null);
	    			cookie('token',null);
	    			cookie('username',$post['username'],3600*24*7);
	    			cookie('token',$token,3600*24*7);
	    			$insert['token'] = $token;
	    			db('admin')->where('id',1)->update($insert);
	    		}else{
	    			$token = md5(uniqid(rand(), TRUE));
	    			cookie('username',null);
	    			cookie('token',null);
	    			cookie('username',$post['username']);
	    			cookie('token',$token);
	    			$insert['token'] = $token;
	    			db('admin')->where('id',1)->update($insert);
	    		}
    			$this->success("信息正确",'index/index');
    			
    		}elseif($admin->login($data)==4){
    			$this->error('验证码错误');
    		}
    		else{
    			$this->error('用户名或密码错误');
    		}
    	}
        return $this->fetch('login');
        
    }
	
   
   
}

?>