<?php /*a:1:{s:60:"D:\wamp64\www\MyBlog\application\index\view\diary\index.html";i:1553179158;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title> 日志 - Mr.Wang - Blog </title>
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
		<style type="text/css">
			#main .article ul li{
				margin-right: 60px;
			}
			#main #warp{
				margin-top: 45px!important;
			}
			#main #banner_right{
				margin-top: 95px !important;
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
							<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
								技术
							</a>
							<div class="dropdown-menu text-center" id="menu">
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">前端</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">PHP</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Linux</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Java</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Android</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">C语言</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">网络安全</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">项目</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo url('diary/index'); ?>">日志</a>
						</li>
						<li class="nav-item">
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
			<div class="row">
				
				<div class="col-xs-12 col-md-12 col-lg-8" id="warp">
					<!--面包屑导航开始-->
					<nav class="breadcrumb">
						<a class="breadcrumb-item " href="#">Blog</a>
						<a class="breadcrumb-item active" href="#">日志</a>
					</nav>
					<!--面包屑导航结束-->
					<div class="article">
						<h3>
							<a href="#" class="article_title">标题</a>
						</h3>
						<ul class="clearfix">
							<li class="article_author"><i class="fa fa-user"></i>&nbsp;作者</li>
							<li class="article_time"><i class="fa fa-calendar"></i>&nbsp;发布时间</li>
							<li class="article_weather"><i class="fa fa-calendar"></i>&nbsp;天气</li>
							<li class="article_mood"><i class="fa fa-tags"></i>&nbsp;心情</li>

						</ul>
						<div class="article_main clearfix">
							<div class="row">
								<div class="article_img col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<a href="#"><img src="https://baijunyao.com/uploads/article/20190317/5c8e551887859.png"></a>
								</div>
								<div class="article_text col-xs-12 col-sm-6  col-md-6 col-lg-8">
									大概每个前端都会碰到的问题是，当用户在某一网站登录之后，记住用户的登录状态。众所周知，HTTP 是一种没有状态的协议，无状态是指协议对于事务处理没有记忆能力，服务器不知道客户端是什么状态
								</div>
								<a class="article_readAll" href="#">阅读全文</a>
							</div>

						</div>

					</div>
					<div class="article">
						<h3>
							<a href="#" class="article_title">标题</a>
						</h3>
						<ul class="clearfix">
							<li class="article_author"><i class="fa fa-user"></i>&nbsp;作者</li>
							<li class="article_time"><i class="fa fa-calendar"></i>&nbsp;发布时间</li>
							<li class="article_weather"><i class="fa fa-calendar"></i>&nbsp;天气</li>
							<li class="article_mood"><i class="fa fa-tags"></i>&nbsp;心情</li>

						</ul>
						<div class="article_main clearfix">
							<div class="row">
								<div class="article_img col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<a href="#"><img src="https://baijunyao.com/uploads/article/20190317/5c8e551887859.png"></a>
								</div>
								<div class="article_text col-xs-12 col-sm-6  col-md-6 col-lg-8">
									大概每个前端都会碰到的问题是，当用户在某一网站登录之后，记住用户的登录状态。众所周知，HTTP 是一种没有状态的协议，无状态是指协议对于事务处理没有记忆能力，服务器不知道客户端是什么状态
								</div>
								<a class="article_readAll" href="#">阅读全文</a>
							</div>

						</div>

					</div>
					<div class="article">
						<h3>
							<a href="#" class="article_title">标题</a>
						</h3>
						<ul class="clearfix">
							<li class="article_author"><i class="fa fa-user"></i>&nbsp;作者</li>
							<li class="article_time"><i class="fa fa-calendar"></i>&nbsp;发布时间</li>
							<li class="article_weather"><i class="fa fa-calendar"></i>&nbsp;天气</li>
							<li class="article_mood"><i class="fa fa-tags"></i>&nbsp;心情</li>

						</ul>
						<div class="article_main clearfix">
							<div class="row">
								<div class="article_img col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<a href="#"><img src="https://baijunyao.com/uploads/article/20190317/5c8e551887859.png"></a>
								</div>
								<div class="article_text col-xs-12 col-sm-6  col-md-6 col-lg-8">
									大概每个前端都会碰到的问题是，当用户在某一网站登录之后，记住用户的登录状态。众所周知，HTTP 是一种没有状态的协议，无状态是指协议对于事务处理没有记忆能力，服务器不知道客户端是什么状态
								</div>
								<a class="article_readAll" href="#">阅读全文</a>
							</div>

						</div>

					</div>
					
					<div class="article">
						<h3>
							<a href="#" class="article_title">标题</a>
						</h3>
						<ul class="clearfix">
							<li class="article_author"><i class="fa fa-user"></i>&nbsp;作者</li>
							<li class="article_time"><i class="fa fa-calendar"></i>&nbsp;发布时间</li>
							<li class="article_weather"><i class="fa fa-calendar"></i>&nbsp;天气</li>
							<li class="article_mood"><i class="fa fa-tags"></i>&nbsp;心情</li>

						</ul>
						<div class="article_main clearfix">
							<div class="row">
								<div class="article_img col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<a href="#"><img src="https://baijunyao.com/uploads/article/20190317/5c8e551887859.png"></a>
								</div>
								<div class="article_text col-xs-12 col-sm-6  col-md-6 col-lg-8">
									大概每个前端都会碰到的问题是，当用户在某一网站登录之后，记住用户的登录状态。众所周知，HTTP 是一种没有状态的协议，无状态是指协议对于事务处理没有记忆能力，服务器不知道客户端是什么状态
								</div>
								<a class="article_readAll" href="#">阅读全文</a>
							</div>

						</div>

					</div>
					

					<ul class="pagination d-flex justify-content-center">
						<li class="page-item">
							<a class="page-link" href="#">Previous</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>

				</div>
				<div class="col-lg-4 d-none d-sm-block" id="banner_right">
					
					
					<div class="time_list widget">
						<h2 class="title">时间轴</h2>
						<ul class="list-group">
							<li class="list-group-item">
								<span><a href="#">2019(1)</a></span>
							</li>
							<li class="list-group-item">
								<span><a href="#">2019(2)</a></span>
							</li>
							<li class="list-group-item">
								<span><a href="#">2019(3)</a></span>
							</li>
							
						</ul>
					</div>
					
				</div>
			</div>

		</div>
		<!--主体内容结束-->
		<!--copyright开始-->
		<div id="copyright" >
			<p>copyright &nbsp;2019-2020 @
				<a href="#">wh241.com</a>
			</p>
		</div>
		<!--copyright结束-->

	</body>

</html>