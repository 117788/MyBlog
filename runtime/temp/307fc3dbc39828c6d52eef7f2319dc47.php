<?php /*a:1:{s:65:"D:\wamp64\www\MyBlog\application\index\view\technology\index.html";i:1553684225;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>技术 -Mr.Wang - Blog </title>
		<!--width=device-width 表示宽度是设备屏幕的宽度;initial-scale=1 表示初始的缩放比例;shrink-to-fit=no 自动适应手机屏幕的宽度。-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--引入public目录中的main.css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/main.css" />
		<!--引入public目录中的初始化css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/initial.css" />
		<link href="http://localhost/myblog/public/static/admin/style/page.css" rel="stylesheet">
		
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
			.article ul span{
				cursor: pointer;
			}
			#main .article  ul a{
				color: #000!important;
			}
			#main #warp {
				margin-top: 45px!important;
			}
			
			#main #banner_right {
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
							<a class="nav-link" href="<?php echo url('index/index'); ?>">首页</a>
						</li>
						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle  active" href="#" id="navbardrop" data-toggle="dropdown">
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
					<nav class="breadcrumb">
						<a class="breadcrumb-item" href="#">Blog</a>
						<a class="breadcrumb-item" href="#">技术</a>
						<a class="breadcrumb-item active" href="#"><?php echo htmlentities($tag1); ?></a>
						
					</nav>
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<div class="article">
						<h3>
							<a href="<?php echo url('technology/show',array('id'=>$vo['id'])); ?>" class="article_title"><?php echo htmlentities($vo['title']); ?></a>
						</h3>
						<ul class="clearfix">
							<li class="article_author"><i class="fa fa-user"></i>&nbsp;<?php echo htmlentities($vo['author']); ?></li>
							<li class="article_time"><i class="fa fa-calendar"></i>&nbsp;<span title="<?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?>"><?php echo htmlentities(date("y-m-d",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></span></li>
							<li class="article_read"><i class="fa fa-check-square"></i>&nbsp;<?php echo htmlentities($vo['read_times']); ?></li>
							<li class="article_comment"><i class="fa fa-comment"></i>&nbsp;<?php echo htmlentities($vo['comment_times']); ?></li>
							<li class="article_cate1"><i class="fa fa-list-alt"></i>&nbsp;<a href="#" title="<?php echo htmlentities($vo['tag1']); ?>"><?php echo htmlentities($vo['tag1']); ?></a></li>
							<li class="article_cate2"><i class="fa fa-tags"></i>&nbsp;<a href="#" title="<?php echo htmlentities($vo['tag2']); ?>"><?php echo htmlentities($vo['tag2']); ?></a></li>
						</ul>
						<div class="article_main clearfix">
							<div class="row">
								<div class="article_img col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<a href="#"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>"></a>
								</div>
								<div class="article_text col-xs-12 col-sm-6  col-md-6 col-lg-8">
									<?php echo htmlentities($vo['info']); ?>
								</div>
								<a class="article_readAll" href="<?php echo url('technology/show',array('id'=>$vo['id'])); ?>">阅读全文</a>
							</div>

						</div>

					</div>
					
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="d-flex justify-content-center" style="margin-top: -10px;">
							<?php echo $list; ?>
					</div>

				</div>
				<div class="col-lg-4 d-none d-sm-block" id="banner_right">
					<div class="hot_list widget">
						<h2 class="title">热门文章</h2>
						<ul class="list-group">
							<li class="list-group-item">
								<span class="num" style="background-color: #ff858e;">1</span>
								<span><a href="#">热门文章1</a></span>
							</li>
							<li class="list-group-item">
								<span class="num" style="background-color: #77d549;">2</span>
								<span><a href="#">热门文章2</a></span>
							</li>
							<li class="list-group-item">
								<span class="num" style="background-color: #62c1ff;">3</span>
								<span><a href="#">热门文章3</a></span>
							</li>
							<li class="list-group-item">
								<span class="num">4</span>
								<span><a href="#">热门文章4</a></span>
							</li>
							<li class="list-group-item">
								<span class="num">5</span>
								<span><a href="#">热门文章5</a></span>
							</li>
						</ul>
					</div>
					<div class="recent_list widget">
						<h2 class="title">近期文章</h2>
						<ul class="list-group">
							<li class="list-group-item">
								<span class="num" style="background-color: #ff858e;">1</span>
								<span><a href="#">近期文章1</a></span>
							</li>
							<li class="list-group-item">
								<span class="num" style="background-color: #77d549;">2</span>
								<span><a href="#">近期文章2</a></span>
							</li>
							<li class="list-group-item">
								<span class="num" style="background-color: #62c1ff;">3</span>
								<span><a href="#">近期文章3</a></span>
							</li>
							<li class="list-group-item">
								<span class="num">4</span>
								<span><a href="#">近期文章4</a></span>
							</li>
							<li class="list-group-item">
								<span class="num">5</span>
								<span><a href="#">近期文章5</a></span>
							</li>
						</ul>
					</div>
					<div class="comment_list widget">
						<h2 class="title">近期评论</h2>
						<ul class="list-group">
							<li class="list-group-item">
								<span class="num" style="background-color: #ff858e;">1</span>
								<span><a href="#">近期评论1</a></span>
							</li>
							<li class="list-group-item">
								<span class="num" style="background-color: #77d549;">2</span>
								<span><a href="#">近期评论2</a></span>
							</li>
							<li class="list-group-item">
								<span class="num" style="background-color: #62c1ff;">3</span>
								<span><a href="#">近期评论3</a></span>
							</li>
							<li class="list-group-item">
								<span class="num">4</span>
								<span><a href="#">近期评论4</a></span>
							</li>
							<li class="list-group-item">
								<span class="num">5</span>
								<span><a href="#">近期评论5</a></span>
							</li>
						</ul>
					</div>
					<div class="time_list widget">
						<h2 class="title">归档</h2>
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
					<div class="friends_link widget">
						<h2 class="title">友情链接</h2>
						<ul class="list-group">
							<li class="list-group-item">
								<span><a href="#">友情链接1</a></span>
							</li>
							<li class="list-group-item">
								<span><a href="#">友情链接2</a></span>
							</li>
							<li class="list-group-item">
								<span><a href="#">友情链接3</a></span>
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