<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	return view();
    }
    public function add()
    {
    	if(request()->isPOST()){
    		$post = input('post.');
    		$data=[
    			'text'=>$post['test-editormd-markdown-doc'],
    		];
    	
    	$res = db('article')->insert($data);
    	if($res){
    		$this->success("提交成功",'add');
    	}else{
    		$this->error('插入失败');
    	}
    	}
    	
    	return view();
    }
    public function show(){
    	$text = db('article')->where('id','5')->find();
    	$this->assign('text',$text);
    	return view();
    }
   

}
