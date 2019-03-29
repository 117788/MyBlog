<?php
namespace app\admin\controller;
class Index extends Base
{
    public function index()
    {
    	return view();
    }
    public function logout(){
    	session(null);
		cookie('username',null);
		cookie('token',null);
    	$this->redirect('login/index');
    }

}
