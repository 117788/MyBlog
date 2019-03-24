<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Article as ArticleModel;
class Article extends Controller
{
    public function lst()
    {
    	$list = ArticleModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function add(){
    	if(request()->isPost()){
    		$post = input('post.');
    		$articles = new ArticleModel;
    		if(input('state') == 'on'){
    			$data['state'] = 1;
    		}else{
    			$data['state'] = 0;
    		}
    		$res = $articles->save([
    			'title'=>$post['title'],
    			'info'=>$post['info'],
    			'tag1'=>$post['tag1'],
    			'tag2'=>$post['tag2'],
    			'top'=>$data['state'],
    			'text'=>$post['test-editormd-markdown-doc'],
    			'img' =>cookie('url'),
    		]);
    		if($res){
    			$this->success("添加文章成功！",'article/lst');
    		}else{
    			$this->error('添加文章失败！！');
    		}
    		
    	}
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$articles = db('article')->find($id);
	    $this->assign('articles',$articles);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    $data = [
		    	'title'=>$post['title'],
    			'info'=>$post['info'],
    			'tag1'=>$post['tag1'],
    			'tag2'=>$post['tag2'],
    			'text'=>$post['test-editormd-markdown-doc'],
		    ];
		    if(input('state') == 'on'){
    			$data['top'] = 1;
    		}else{
    			$data['top'] = 0;
    		}
		    
		    if(cookie('url')){
		    	$data['img'] = cookie('url');
		    }else{
		    	$data['img'] = $admins['pic'];
		    }
		   	$articleModel = new ArticleModel;
		   	$save = $articleModel->save($data,['id' => $id]);
		    if($save !== false)
		    {
		    	$this->success('修改文章成功！','lst');
		    	
		    }else{
		    	$this->error('修改文章失败！');
		    }
		    
    	}
    	return $this->fetch();
    }
    public function upload()
    {
        $img = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $img->move('static/uploads');
        $url = 'uploads/' . $info->getSaveName();
        
        if($info){
        	if(cookie('url')){
        		cookie('url',null);
        	}
        	cookie('url',$url);
        	if(cookie('url')){
            	return json(['code' => 0, 'msg' => '上传成功!', 'url' => 'static/uploads/' . $info->getSaveName()]);
        	}
            // 成功上传后 获取上传信息

        }else{
            // 上传失败获取错误信息
            return json(['code' => 1, 'msg' => $img->getError(), 'url' => '']);
        }

	}
	public function del(){
		$id = input('id');
		// 软删除
		$user = ArticleModel::get($id);
		$res = $user->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
