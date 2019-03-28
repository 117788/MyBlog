<?php /*a:1:{s:62:"D:\wamp64\www\MyBlog\application\index\view\project\index.html";i:1553788007;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title> 项目 - Mr.Wang - Blog </title>
		<!--width=device-width 表示宽度是设备屏幕的宽度;initial-scale=1 表示初始的缩放比例;shrink-to-fit=no 自动适应手机屏幕的宽度。-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--引入public目录中的main.css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/main.css" />
		<!--引入public目录中的初始化css文件
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/initial.css" />-->
		<!--引入public目录中的动画css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/style.css" />
		<!--引入public目录中的ico图标-->
		<link rel="shortcut icon" href="http://localhost/myblog/public/static/index/img/favicon.ico">
		<link href="http://localhost/myblog/public/static/admin/style/page.css" rel="stylesheet">
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
				height: 105px;
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
			#main .widget-caption{
				border-left: 3px blue solid;
				padding-left: 5px;
			}
			#main .widget-caption a{
				color: #007bff;
			}
			#main .tabbable li{
				margin-left: 10px;
			}
			#main .tab-content{
				padding: 5px;
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
					<div class="project" <?php if($flag[0] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">前端</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == '前端'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="project" <?php if($flag[1] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">PHP</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == 'PHP'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="project" <?php if($flag[2] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">Python</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == 'Python'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="project" <?php if($flag[3] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">Linux</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == 'Linux'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="project" <?php if($flag[4] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">Java</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == 'Java'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="project" <?php if($flag[5] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">Android</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == 'Android'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="project" <?php if($flag[6] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">C语言</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == 'C语言'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="project" <?php if($flag[7] == 0): ?> style="display: none;" <?php endif; ?>>
						<h3 class="project_title">网络安全</h3>
						<div class="row">
							<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['tag1'] == '网络安全'): ?>
							<div class="project_box col-xs-3 col-md-3 col-lg-3 he_slideCaptionDown ">
								<div class="project_box_img he_slideCaptionDown1">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" /></a>
									<div class="he_slideCaptionDown_caption1">
										<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block;"><strong class="he_slideCaptionDown_caption_h1"><?php echo htmlentities($vo['info']); ?></strong> </a>
									</div>
								</div>
								<span><?php echo htmlentities($vo['name']); ?></span>
								<div class="project_box_info he_slideCaptionDown_caption">
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><strong class="he_slideCaptionDown_caption_h"><?php echo htmlentities($vo['name']); ?></strong></a>
									<a href="<?php echo htmlentities($vo['gitUrl']); ?>" style="display: block; width: 100%;height: 100%;"><p class="he_slideCaptionDown_caption_p"><?php echo htmlentities($vo['tag1']); ?> &nbsp;&nbsp;<?php echo htmlentities($vo['tag2']); ?></p></a>
								</div>
							</div>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
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
											<p>项目总数 : <?php echo htmlentities($project_all); ?></p>
											<p>学习项目 : <?php echo htmlentities($project_study); ?></p>
											<p>原创项目 : <?php echo htmlentities($project_own); ?></p>
											<p>完成项目 : <?php echo htmlentities($project_complete); ?></p>
											<p>当前项目 : <?php echo htmlentities($project_nocomplete); ?></p>
										</div>

										<div id="profile11" class="tab-pane" style="margin-left: 25%;">
											<?php if(is_array($now_project) || $now_project instanceof \think\Collection || $now_project instanceof \think\Paginator): $i = 0; $__LIST__ = $now_project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
											<p>
												<a href="<?php echo htmlentities($vo['gitUrl']); ?>"><?php echo htmlentities($vo['name']); ?></a>
											</p>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
										<div id="profile22" class="tab-pane" style="margin-left: 25%;">
											<?php if(is_array($ago_project) || $ago_project instanceof \think\Collection || $ago_project instanceof \think\Paginator): $i = 0; $__LIST__ = $ago_project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
											<p>
												<a href="$vo['gitUrl']"><?php echo htmlentities($vo['name']); ?></a>
											</p>
											<?php endforeach; endif; else: echo "" ;endif; ?>
											<div class="d-flex justify-content-center" style="margin-top: -10px;">
												<?php echo $ago_project; ?>
											</div>
											
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