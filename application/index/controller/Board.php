<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Board as BoardModel;
use app\index\model\Article as ArticleModel;
use app\index\model\Comment as CommentModel;
use app\index\model\Diary as DiaryModel;
use app\index\model\Essay as EssayModel;
class Board extends Controller
{
    public function index()
    {
    	$list = BoardModel::where('state',1)->paginate(10);
    	$article_count = ArticleModel::count();
    	$essay_count = EssayModel::count();
    	$diary_count = DiaryModel::count();
    	$comment_count = CommentModel::where('level',0)->count();
    	$board_count = BoardModel::where('level',0)->count();
    	$this->assign([
    		'list'=>$list,
    		'article_count'=>$article_count,
    		'essay_count'=>$essay_count,
    		'diary_count'=>$diary_count,
    		'comment_count'=>$comment_count,
    		'board_count'=>$board_count,
    	]);
    	return view();
    }
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
		    	'name'=>$post['name'],
		    	'email'=>$post['email'],
		    	'text'=>$post['editorText'],
		    	'ip'=>$ip,
		    ];
		   	$BoardModel = new BoardModel;
		   	$save = $BoardModel->save($data);
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
