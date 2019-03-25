<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Diary as DiaryModel;
class Diary extends Controller
{
    public function lst()
    {
    	$list = DiaryModel::paginate(5);
    	$this->assign("list",$list);
    	return view();
    }
    public function add(){
    	if(request()->isAjax()){
    		$post = input('post.');
    		
    		$diarys = new DiaryModel;
    		$res = $diarys->save([
    			'title'=>$post['title'],
    			'info'=>$post['info'],
    			'weather'=>$post['weather'],
    			'mood'=>$post['mood'],
    			'text'=>$post['text'],
    			'img' =>cookie('url'),
    		]);
    		if($res){
    			$this->success("添加日志成功！",'diary/lst');
    		}else{
    			$this->error('添加日志失败！！');
    		}
    		
    	}
    	return view();
    }
    public function edit()
    {
    	$id = input('id');
    	$diary = db('diary')->find($id);
	    $this->assign('diary',$diary);
    	if(request()->isAjax()){
		    $post = input('post.');
		    $id = $post['id'];
		    $data = [
		    	'title'=>$post['title'],
    			'info'=>$post['info'],
    			'weather'=>$post['weather'],
    			'mood'=>$post['mood'],
    			'text'=>$post['text'],
		    ];
		    if(cookie('url')){
		    	$data['img'] = cookie('url');
		    }else{
		    	$data['img'] = $diary['pic'];
		    }
		   	$diaryModel = new DiaryModel;
		   	$save = $diaryModel->save($data,['id' => $id]);
		    if($save !== false)
		    {
		    	$this->success('修改日志成功！','lst');
		    	
		    }else{
		    	$this->error('修改日志失败！');
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
		$user = DiaryModel::get($id);
		$res = $user->delete();
		if($res){
			$this->redirect('lst');
		}
	}

}
