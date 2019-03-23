<?php /*a:1:{s:62:"D:\wamp64\www\MyBlog\application\index\view\project\index.html";i:1553352817;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title> 项目 - Mr.Wang - Blog </title>
		<!--width=device-width 表示宽度是设备屏幕的宽度;initial-scale=1 表示初始的缩放比例;shrink-to-fit=no 自动适应手机屏幕的宽度。-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--引入public目录中的main.css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/main.css" />
		<!--引入public目录中的初始化css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/initial.css" />
		<!--引入public目录中的动画css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/style.css" />
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
		<!--Beyond styles-->
		<link id="beyond-link" href="http://localhost/myblog/public/static/index/css/beyond.css" rel="stylesheet" type="text/css">
		<link href="http://localhost/myblog/public/static/index/css/demo.css" rel="stylesheet">
		<link href="http://localhost/myblog/public/static/index/css/typicons.css" rel="stylesheet">
		<link href="http://localhost/myblog/public/static/index/css/animate.css" rel="stylesheet">
		<style type="text/css">
			#nav {
				padding: 1.7rem 1rem!important;
			}
			
			#main .article ul li {
				margin-right: 60px;
			}
			
			#main #warp {
				margin-top: 55px!important;
			}
			
			#main #banner_right {
				margin-top: 95px !important;
			}
			
			#main .project {
				background-color: #f1f1ee;
			}
			
			#main .project .project_title {
				font-size: 16px;
				font-weight: 500;
				padding: 5px 10px;
				margin-left: 10px;
				border-left: 2px dodgerblue solid;
			}
			
			#main .project .project_box {
				background-color: #fff;
				height: 215px;
				margin: 10px 20px 20px 20px;
				padding: 0;
			}
			
			#main .project .project_box img {
				width: 100%;
				height: 45%;
			}
			
			#main .project .project_box span {
				position: absolute;
				margin-top: 20%;
				left: 30%;
			}
			
			#main .project .project_box_info {
				margin-top: 0;
				height: 50%;
			}
			
			#main .project .project_box_info p {
				font-size: 12px;
				font-weight: 200;
				color: #999;
				margin-left: 20px;
				margin-bottom: 0;
			}
			
			#main .project .project_box_info strong {
				font-size: 14px;
				margin-left: 20px;
			}
			
			#main .project .project_box_info {
				position: relative;
				transition: all 0.3s;
			}
			
			#main .project .project_box:hover span {
				display: none;
			}
			
			.nav-tabs>li {
				width: 70px;
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
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Python</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Linux</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Java</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Android</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">C语言</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">网络安全</a>
							</div>
						</li>
						<li class="nav-item active">
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
						<a class="breadcrumb-item active" href="#">项目</a>
					</nav>
					<!--面包屑导航结束-->
					<div class="project" id="PHP">
						<h3 class="project_title">PHP</h3>
						<div class="row">
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>

						</div>
					</div>

					<div class="project" id="Linux">
						<h3 class="project_title">LInux</h3>
						<div class="row">
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>

						</div>
					</div>
					<div class="project" id="Java">
						<h3 class="project_title">Java</h3>
						<div class="row">
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<img src="http://localhost/myblog/public/static/index/img/project1.jpg" />
									<div class="he_slideCaptionDown_caption1">
										<strong class="he_slideCaptionDown_caption_h1">项目相关</strong>
									</div>
								</div>
								<span>项目名称</span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<strong class="he_slideCaptionDown_caption_h">项目名称</strong>
									<p class="he_slideCaptionDown_caption_p">描述信息</p>
								</div>
							</div>

						</div>
					</div>

				</div>
				<div class="col-lg-4 d-none d-sm-block" id="banner_right">

					<div class="widget flat radius-bordered">
						<div class="widget-header bg-themeprimary">
							<span class="widget-caption">项目相关</span>
						</div>

						<div class="widget-body">
							<div class="widget-main ">
								<div class="tabbable">
									<ul class="nav nav-tabs tabs-flat" id="myTab11">
										<li class="active">
											<a data-toggle="tab" href="#home11">
												统计信息
											</a>
										</li>
										<li class="">
											<a data-toggle="tab" href="#profile11">
												当前项目
											</a>
										</li>
										<li class="">
											<a data-toggle="tab" href="#profile22">
												完成项目
											</a>
										</li>
									</ul>
									<div class="tab-content tabs-flat">
										<div id="home11" class="tab-pane active" style="margin-left: 25%;">
											<p>项目总数 : 66</p>
											<p>学习项目 : 50</p>
											<p>原创项目 : 16</p>
											<p>完成项目 : 63</p>
											<p>当前项目 : 3</p>
										</div>

										<div id="profile11" class="tab-pane" style="margin-left: 25%;">
											<p>
												<a href="#">当前项目1</a>
											</p>
											<p>
												<a href="#">当前项目2</a>
											</p>
											<p>
												<a href="#">当前项目3</a>
											</p>
										</div>
										<div id="profile22" class="tab-pane" style="margin-left: 25%;">
											<p>
												<a href="#">已完成项目1</a>
											</p>
											<p>
												<a href="#">已完成项目2</a>
											</p>
											<p>
												<a href="#">已完成项目3</a>
											</p>
											<p>
												<a href="#">已完成项目4</a>
											</p>
											<p>
												<a href="#">已完成项目5</a>
											</p>
											<p>
												<a href="#">已完成项目6</a>
											</p>

											<ul class="pagination pagination-sm " style="margin-left: -15%;">
												<li class="page-item">
													<a class="page-link" href="#"><<</a>
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
													<a class="page-link" href="#">>></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
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
		<!--Basic Scripts-->
		<script src="http://localhost/myblog/public/static/index/css/jquery_002.js"></script>
		<script src="http://localhost/myblog/public/static/index/css/bootstrap.js"></script>
		<script src="http://localhost/myblog/public/static/index/css/jquery.js"></script>
		<!--Beyond Scripts-->
		<!--Beyond Scripts-->
		<script src="http://localhost/myblog/public/static/index/css/beyond.js"></script>
	</body>

</html>