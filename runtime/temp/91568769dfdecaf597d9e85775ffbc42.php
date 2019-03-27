<?php /*a:1:{s:60:"D:\wamp64\www\MyBlog\application\index\view\about\index.html";i:1553694531;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>关于 - Mr.Wang - Blog </title>
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
		<!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
		<link href="http://localhost/myblog/public/static/froala_editor/css/froala_style.min.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			#main #warp {
				margin-top: 45px!important;
			}
			
			#main #banner_right {
				margin-top: 95px !important;
			}
			#main .about,#main .about_box{
				height: 650px;
				background-color: #f1f1ee;
				margin-top: 20px;
				padding: 20px;
			}
			#main .about .about_title{
				font-size: 20px;
				font-weight: 500;
			}
			#main .about_text{
				font-size: 13px;
				font-weight: 400;
				line-height: 30px;
				text-indent: 40px;
			}
			
			#main .about_box li{
				margin: 15px 0 15px 25px;
				font-size: 15px;
			}
			#main .about_box ul{
				margin-left: 20px;
				margin-top: 20px;
			}
			#main .about_box img{
				width: 120px;
				height: 120px;
				border-radius: 50%;
				margin-left: 80px;
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
							<a class="nav-link" href="<?php echo url('index/index'); ?>">首页</a>
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
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('essay/index'); ?>">随笔</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('board/index'); ?>">留言板</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo url('about/index'); ?>">关于</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--导航栏结束-->

		<!--banner结束-->

		<!--主体内容开始-->
		<div id="main" class="container">
			<div class="row">

				<div class="col-xs-12 col-md-12 col-lg-8" id="warp">
					<!--面包屑导航开始-->
					<nav class="breadcrumb">
						<a class="breadcrumb-item" href="#">Blog</a>
						<a class="breadcrumb-item active" href="#">关于</a>
					</nav>
					<!--面包屑导航结束-->
					<div class="about">
						<div class="about_me">
							<p class="about_title">关于我 | ABOUT ME</p>
							<div class="about_text">
								<div class="fr-view" style="margin-top: 30px;">
  					 				<?php echo $about['aboutMe']; ?>
								</div>
							</div>
							
						</div>
						<div class="about_blog">
							<p class="about_title">关于博客| ABOUT BLOG</p>
							<div class="about_text">
								<div class="fr-view" style="margin-top: 30px;">
  					 				<?php echo $about['aboutBlog']; ?>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-4 d-none d-sm-block" id="banner_right">
					<div class="about_box">
						<img src="http://localhost/myblog/public/static/index/img/photo2.jpg" />
						<ul >
							<li>昵称 : Cat</li>
							<li>生日 : 1999年2月16日</li>
							<li>职业 : 还不是程序猿的码农</li>
							<li>爱好 : 睡觉、写代码、听音乐、追剧</li>
							<li>喜欢的歌手 : 许嵩 ( 暴露年龄了hh ) </li>
							<li>对象  : Object (自己new一个，哭~~)</li>
							
						</ul>
						
					</div>
				</div>
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

	</body>

</html>