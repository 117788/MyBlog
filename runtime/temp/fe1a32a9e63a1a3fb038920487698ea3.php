<?php /*a:1:{s:60:"D:\wamp64\www\MyBlog\application\index\view\essay\index.html";i:1553679945;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>随笔 - Mr.Wang - Blog </title>
		<!--width=device-width 表示宽度是设备屏幕的宽度;initial-scale=1 表示初始的缩放比例;shrink-to-fit=no 自动适应手机屏幕的宽度。-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--引入public目录中的main.css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/main.css" />
		<!--引入public目录中的初始化css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/initial.css" />
		<!--引入public目录中的ico图标-->
		<link rel="shortcut icon" href="http://localhost/myblog/public/static/index/img/favicon.ico">
		<!--引入cdn图标-->
		<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
		<!-- 新 Bootstrap4 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
		<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
		<script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
		<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<!--引入public目录下的layui.css
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/layui/css/layui.css"/>-->
		<!--引入public目录下的layui.js-->
		<script src="http://localhost/myblog/public/static/layui/layui.js"></script>
		<!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
		<link href="http://localhost/myblog/public/static/froala_editor/css/froala_style.min.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			#main {
				height: 1200px;
				margin-top: 80px;
				background-color: #fff!important;
			}
			
			#main .essay_middle {
				height: 100%;
				background-color: #008cba;
				width: 1%;
				border-radius: 4px;
			}
			
			#main .essay_left,
			#main .essay_right,
			#main .essay_middle {
				float: left;
			}
			
			#main .essay_left,
			#main .essay_right {
				width: 49%;
				position: relative;
			}
			#main .essay_left{
				margin-top: 20px;
			}
			#main .essay_right{
				margin-top: 80px;
			}
			#main .essay_ul{
				width: 80%;
				position: relative;
				margin-bottom: 50px;
			    padding: 5px 10px;
			    border: 1px solid #e2e2e2;
			    border-radius: 6px;
			}
			#main .essay_ul .arrow_round{
				width: 12px;
			    height: 12px;
			    background: #f08a24;
			    border-radius: 50%;
			    position: absolute;
			}
			#main .essay_left .essay_ul .arrow_round{
				right: -23px;
				bottom: 19px;
			}
			#main .essay_right .essay_ul .arrow_round{
				left: -23px;
				bottom: 19px;
			}
			#main .essay_left .essay_ul{
				float: right;
				margin-right: 25px;
			}
			#main .essay_left .essay_ul i{
				position: absolute;
				right: -12px;
				bottom: 10px;
			}
			#main .essay_right .essay_ul{
				
				float: left;
				margin-left: 25px;
			}
			#main .essay_right .essay_ul i{
				position: absolute;
				left: -12px;
				bottom: 10px;
			}
			ul{
				list-style: none;
			}
		</style>
	</head>

	<body>
		<!--导航栏开始-->
		<div class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="nav">
			<div class="container text-center">
				<a class="navbar-brand" href="#">Cat</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    				<span class="navbar-toggler-icon"></span>
  				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link " href="<?php echo url('index/index'); ?>">首页</a>
						</li>
						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								技术
							</a>
							<div class="dropdown-menu text-center" id="menu">
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'前端')); ?>">前端</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'PHP')); ?>">PHP</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Python')); ?>">Python</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Linux')); ?>">Linux</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Java')); ?>">Java</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Android')); ?>">Android</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'C语言')); ?>">C语言</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Security')); ?>">网络安全</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('project/index'); ?>">项目</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('diary/index'); ?>">日志</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo url('essay/index'); ?>">随笔</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('board/index'); ?>">留言板</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('about/index'); ?>">关于</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--导航栏结束-->

		<!--主体内容开始-->
		<div id="main" class="container">
			
			<div class="essay_left">
				<?php if(is_array($essay) || $essay instanceof \think\Collection || $essay instanceof \think\Paginator): $i = 0; $__LIST__ = $essay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id'] % 2 == 0): ?>
				<ul class="essay_ul">
					<li class="essay_time"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></li>
					<li class="essay_main">
						<div class="fr-view" style="margin-top: 30px;">
  					 		<?php echo $vo['text']; ?>
						</div>
					</li>
					<div class="arrow_round"></div>
					<i class="fa fa-angle-right fa-2x" style="color: #eaebf3;"></i>
				</ul>
				<?php endif; ?>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="essay_middle"></div>
			<div class="essay_right">
				<?php if(is_array($essay) || $essay instanceof \think\Collection || $essay instanceof \think\Paginator): $i = 0; $__LIST__ = $essay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id'] % 2 == 1): ?>
				<ul class="essay_ul">
					<li class="essay_time"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></li>
					<li class="essay_main">
						<div class="fr-view" style="margin-top: 30px;">
  					 		<?php echo $vo['text']; ?>
						</div>
					</li>
					<div class="arrow_round"></div>
					<i class="fa fa-angle-left fa-2x" style="color: #eaebf3;"></i>
				</ul>
				<?php endif; ?>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>

		</div>
		<!--主体内容结束-->
		<!--copyright开始-->
		<div id="copyright">
			<p>copyright &nbsp;2019-2020 @
				<a href="#">wh241.com</a>
			</p>
		</div>
		<!--copyright结束-->
		
		<!--js脚本开始-->
		<script type="text/javascript">
			$(function(){
				$("#main .essay_left .essay_ul").css({
					"margin-right":"10px",
					"transition":"all 1s"
				});
				$("#main .essay_right .essay_ul").css({
					"margin-left":"10px",
					"transition":"all 1s"
				});
			});
		</script>
		<!--js脚本结束-->
	</body>

</html>