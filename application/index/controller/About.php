<?php
namespace app\index\controller;
use think\Controller;
class About extends Controller
{
    public function index()
    {
    	$about = db('about')->find(1);
    	$this->assign("about",$about);
    	return view();
    }

}
