<?php
namespace app\admin\controller;
use app\admin\model\About as AboutModel;
class About extends Base
{
    public function edit()
    {
    	$about = db('about')->find(1);
	    $this->assign('about',$about);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $data = [
		    	'aboutMe'=>$post['editorText1'],
		    	'aboutBlog'=>$post['editorText2'],
		    ];
		   	$AboutModel = new AboutModel;
		   	$save = $AboutModel->save($data,['id' => 1]);
		    if($save !== false)
		    {
		    	$this->success('修改成功！');
		    	
		    }else{
		    	$this->error('修改失败！');
		    }
		    
    	}
    	return $this->fetch();
    }

}
