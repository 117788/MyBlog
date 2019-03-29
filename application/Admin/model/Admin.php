<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\captcha\Captcha;
class Admin extends Model
{
	public function login($data){
    	$captcha = new Captcha();
		if( !$captcha->check($data['code']))
		{
			return 4;
		}
    	$user = Db::name('admin')->where('name','=',$data['username'])->find();
    	if($user){
    		if($user['password'] == md5($data['password']))
    		{
    			// 赋值（当前作用域）
				session('username',$user['username'] );
				session('id',$user['id'] );
    			return 3;
    		}else{
    			return 2;
    		}
    	}else{
    		return 1;//用户不存在
    	}
    }
}
