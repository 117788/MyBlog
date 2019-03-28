<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Comment as CommentModel;
class Comment extends Controller
{
    public function add()
    {
    	
    	if(request()->isAjax()){
		    $post = input('post.');
		     $ip=FALSE;

    //客户端IP 或 NONE 

    if(!empty($_SERVER["HTTP_CLIENT_IP"])){

        $ip = $_SERVER["HTTP_CLIENT_IP"];

    }

    //多重代理服务器下的客户端真实IP地址（可能伪造）,如果没有使用代理，此字段为空

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);

        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }

        for ($i = 0; $i < count($ips); $i++) {

            if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {

                $ip = $ips[$i];

                break;
            }
        }
    }
    		
		    $ip = $ip ? $ip : $_SERVER['REMOTE_ADDR'];
		    $data = [
		    	'article_id' => $post['article_id'],
		    	'diary_id' => $post['diary_id'],
		    	'name'=>$post['name'],
		    	'email'=>$post['email'],
		    	'text'=>$post['editorText'],
		    	'ip'=>$ip,
		    ];
		   	$CommentModel = new CommentModel;
		   	$save = $CommentModel->save($data);
		    if($save !== false)
		    {
		    	$this->success('评论成功！');
		    	
		    }else{
		    	$this->error('评论失败！');
		    }
		    
    	}
    	return view();
    }

}
