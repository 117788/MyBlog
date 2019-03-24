<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	$list = db('article')->paginate(5);
    	$this->assign("list",$list);
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
    	$id = input('id');
    	$text = db('article')->where('id',$id)->find();
    	$this->assign('vo',$text);
    	return view();
    }
   

}
