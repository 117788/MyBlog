<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
    public function initialize(){
        if(cookie('username')){
    		$res = db('admin')->where('token',cookie('token'))->find();
    	}else{
    		$res = 0;
    	}
    	if(!$res){
    		$this->redirect('Login/index');
    	}
    }
}
